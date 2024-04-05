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
                    <h1 class="ttl_main">部首：日部（ひ・ひへん・にち・にちへん）の漢字</h1>

                    <div class="bushu_about">
                         <div class="bushu_about_box">
                              <h2>日部とは？</h2>
                              <p><strong>日部（にちぶ）は、<span
                                             class="marker">日時、時間、明暗など太陽の運行に関する字</span>が主に属します。</strong>「日」は「ひ」「にち」、偏になった形を「ひへん」「にちへん」と呼びます。
                              </p>
                              <p>「<a href="bushu04014">曰（いわく・ひらび）</a>」は別の部首ですが、形が似ていることから同一の場所で扱われることもあります。</p>
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
                                        <option value="#" selected>日（にち・にちへん）</option>
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
                                        <option value="#" selected>日（ひ）</option>
                                        <option value="bushu08007">非（ひ）</option>
                                        <option value="bushu05018">疋（ひき・ひきへん）</option>
                                        <option value="bushu06016">羊 ⺷（ひつじ・ひつじへん）</option>
                                        <option value="bushu02002">人 亻（ひと）</option>
                                        <option value="bushu02006">儿（ひとあし）</option>
                                        <option value="bushu02002">人 亻（ひとがしら・ひとやね）</option>
                                        <option value="bushu05015">皮（ひのかわ）</option>
                                        <option value="bushu04001">火 灬（ひへん）</option>
                                        <option value="#" selected>日（ひへん）</option>
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
                                   <li><a href="bbushu04008">漢検級順</a></li>
                                   <li><a href="cbushu04008">読み順</a></li>
                              </ul>
                              <ul class="search_menu2">
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
                              </ul>
                         </div><!--search_data-->
                        
                         <h2 class="left_border">部首：日部（ひ・ひへん・にち・にちへん）の漢字一覧</h2>
                         <div class="bushu_wrap">
                              <div class="color_info">
                                   <ul>
                                        <li><span>常用漢字の背景色＝</span><span class="color1"></span></li>
                                        <li><span>人名用漢字の背景色＝</span><span class="color2"></span></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts04">
                                   <h3 class="ttl_while"><a href="kakusu04">４画</a></h3>
                                   <ul class="search_parts">
                                        <li><a class="color1" href="kanji/065">日</a></li>
                                        <li><a href="kanjiy/24602">⺜</a></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts05">
                                   <h3 class="ttl_while"><a href="kakusu05">５画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="kanjiy/15132">曱</a></li>
                                        <li><a class="color1" href="675">旧</a></li>
                                        <li><a class="color1" href="2056">旦</a>
                                        </li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts06">
                                   <h3 class="ttl_while"><a href="kakusu06">６画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="kanjiy/13000">旪</a></li>
                                        <li><a href="kanjiy/15086">旫</a></li>
                                        <li><a href="kanjiy/15087">旮</a></li>
                                        <li><a class="color1" href="kanji/052">早</a></li>
                                        <li><a class="color1" href="1117">旨</a>
                                        </li>
                                        <li><a class="color1" href="1135">旬</a>
                                        </li>
                                        <li><a class="color2" href="2327">旭</a>
                                        </li>
                                        <li><a href="kanjiy/25356">旯</a></li>
                                        <li><a href="9308">㬰</a></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts07">
                                   <h3 class="ttl_while"><a href="kakusu07">７画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="kanjiy/19958">㫒</a></li>
                                        <li><a href="kanjiy/19959">㫓</a></li>
                                        <li><a href="kanjiy/19960">㫔</a></li>
                                        <li><a href="kanjiy/19961">㫕</a></li>
                                        <li><a href="kanjiy/19962">㫗</a></li>
                                        <li><a href="3903">旱</a></li>
                                        <li><a href="kanjiy/20920">㿝</a></li>
                                        <li><a href="kanjiy/25357">旷</a></li>
                                        <li><a href="10463">旳</a></li>
                                        <li><a href="11619">㫖</a></li>
                                        <li><a href="11620">旰</a></li>
                                        <li><a href="11621">旴</a></li>
                                        <li><a href="11622">旲</a></li>
                                        <li><a href="11623">旵</a></li>
                                        <li><a href="11673">时</a></li>
                                   </ul>
                              </div>
                         
                              <div class="parts_box" id="parts08">
                                   <h3 class="ttl_while"><a href="kakusu08">８画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="kanjiy/15088">旽</a></li>
                                        <li><a href="kanjiy/15089">昁</a></li>
                                        <li><a href="kanjiy/15090">昅</a></li>
                                        <li><a href="kanjiy/15091">昐</a></li>
                                        <li><a href="kanjiy/15092">昗</a></li>
                                        <li><a href="kanjiy/15093">昙</a></li>
                                        <li><a class="color1" href="kanji/228">明</a></li>
                                        <li><a class="color1" href="kanji/314">昔</a></li>
                                        <li><a class="color1" href="647">易</a></li>
                                        <li><a href="kanjiy/15338">欥</a></li>
                                        <li><a href="kanjiy/19963">㫘</a></li>
                                        <li><a href="kanjiy/19964">㫙</a></li>
                                        <li><a class="color1" href="1444">昇</a>
                                        </li>
                                        <li><a class="color1" href="1694">昆</a>
                                        </li>
                                        <li><a class="color1" href="1954">旺</a>
                                        </li>
                                        <li><a class="color2" href="2399">昂</a>
                                        </li>
                                        <li><a class="color2" href="2427">昏</a>
                                        </li>
                                        <li><a class="color2" href="2561">昌</a>
                                        </li>
                                        <li><a href="3904">杲</a></li>
                                        <li><a class="color2" href="3905">昊</a>
                                        </li>
                                        <li><a href="3906">昃</a></li>
                                        <li><a href="3914">杳</a></li>
                                        <li><a href="3915">旻</a></li>
                                        <li><a href="kanjiy/23994">昋</a></li>
                                        <li><a href="11624">昀</a></li>
                                        <li><a href="11625">昖</a></li>
                                        <li><a href="11627">昕</a></li>
                                        <li><a href="11628">昑</a></li>
                                        <li><a href="kanjiy/27358">㸓</a></li>
                                        <li><a href="11629">昍</a></li>
                                        <li><a href="11630">昈</a></li>
                                        <li><a href="11631">旿</a></li>
                                        <li><a href="11634">昒</a></li>
                                        <li><a href="11635">㫚</a></li>
                                        <li><a href="11638">昄</a></li>
                                        <li><a href="11639">旼</a></li>
                                        <li><a href="11640">昉</a></li>
                                        <li><a href="11641">昘</a></li>
                                        <li><a href="11649">旾</a></li>
                                        <li><a href="11674">旹</a></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts09">
                                   <h3 class="ttl_while"><a href="kakusu09">９画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="kanjiy/15094">昛</a></li>
                                        <li><a href="kanjiy/15095">昸</a></li>
                                        <li><a class="color1" href="kanji/158">春</a></li>
                                        <li><a class="color1" href="kanji/170">星</a></li>
                                        <li><a class="color1" href="kanji/189">昼</a></li>
                                        <li><a class="color1" href="kanji/332">昭</a></li>
                                        <li><a class="color1" href="510">昨</a></li>
                                        <li><a class="color1" href="828">映</a></li>
                                        <li><a class="color1" href="1159">是</a>
                                        </li>
                                        <li><a href="kanjiy/19965">㫛</a></li>
                                        <li><a href="kanjiy/19966">㫝</a></li>
                                        <li><a href="kanjiy/19967">㫞</a></li>
                                        <li><a href="kanjiy/19968">㫡</a></li>
                                        <li><a href="kanjiy/19969">㫢</a></li>
                                        <li><a class="color1" href="2107">昧</a>
                                        </li>
                                        <li><a href="3910">昜</a></li>
                                        <li><a class="color2" href="3911">昴</a>
                                        </li>
                                        <li><a href="3912">昶</a></li>
                                        <li><a href="3913">昵</a></li>
                                        <li><a href="3927">昿</a></li>
                                        <li><a href="kanjiy/24223">㫠</a></li>
                                        <li><a href="kanjiy/25359">显</a></li>
                                        <li><a href="kanjiy/27189">㫜</a></li>
                                        <li><a href="kanjiy/27190">㫣</a></li>
                                        <li><a href="11626">㫟</a></li>
                                        <li><a href="11632">昻</a></li>
                                        <li><a href="11633">昦</a></li>
                                        <li><a href="11636">昬</a></li>
                                        <li><a href="11643">昹</a></li>
                                        <li><a href="11644">昱</a></li>
                                        <li><a href="11645">昫</a></li>
                                        <li><a href="11646">昡</a></li>
                                        <li><a href="11647">昝</a></li>
                                        <li><a href="11648">昰</a></li>
                                        <li><a href="11651">昮</a></li>
                                        <li><a href="11652">昚</a></li>
                                        <li><a href="11653">昣</a></li>
                                        <li><a href="11657">㫤</a></li>
                                        <li><a href="11658">昳</a></li>
                                        <li><a href="11659">昩</a></li>
                                        <li><a href="11660">昲</a></li>
                                        <li><a href="11661">昺</a></li>
                                        <li><a href="11662">昞</a></li>
                                        <li><a href="11663">昪</a></li>
                                        <li><a href="11664">昢</a></li>
                                        <li><a href="11665">昤</a></li>
                                   </ul>
                              </div>
                         
                              <div class="parts_box" id="parts10">
                                   <h3 class="ttl_while"><a href="kakusu10">１０画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="kanjiy/15096">晍</a></li>
                                        <li><a class="color1" href="kanji/148">時</a></li>
                                        <li><a href="kanjiy/19970">㫥</a></li>
                                        <li><a href="kanjiy/19971">㫧</a></li>
                                        <li><a href="kanjiy/19972">㫨</a></li>
                                        <li><a href="kanjiy/19973">㫩</a></li>
                                        <li><a href="kanjiy/19974">㫫</a></li>
                                        <li><a href="kanjiy/19975">㫬</a></li>
                                        <li><a class="color2" href="2400">晃</a>
                                        </li>
                                        <li><a class="color2" href="2441">晒</a>
                                        </li>
                                        <li><a class="color2" href="2594">晋</a>
                                        </li>
                                        <li><a class="color2" href="3907">晟</a>
                                        </li>
                                        <li><a href="3908">晁</a></li>
                                        <li><a class="color2" href="3909">晏</a>
                                        </li>
                                        <li><a href="kanjiy/23995">晇</a></li>
                                        <li><a class="color2" href="6206">晄</a>
                                        </li>
                                        <li><a href="6207">晉</a></li>
                                        <li><a href="kanjiy/25361">晔</a></li>
                                        <li><a href="9311">㫪</a></li>
                                        <li><a href="kanjiy/27191">㫭</a></li>
                                        <li><a href="kanjiy/27192">㫮</a></li>
                                        <li><a href="11666">晐</a></li>
                                        <li><a href="11667">晈</a></li>
                                        <li><a href="11668">晑</a></li>
                                        <li><a href="11669">晆</a></li>
                                        <li><a href="11670">晅</a></li>
                                        <li><a href="11672">晎</a></li>
                                        <li><a href="11675">晊</a></li>
                                        <li><a href="11676">晌</a></li>
                                        <li><a href="11679">晀</a></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts11">
                                   <h3 class="ttl_while"><a href="kakusu11">１１画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="kanjiy/19976">㫯</a></li>
                                        <li><a class="color2" href="2225">晦</a>
                                        </li>
                                        <li><a href="kanjiy/19977">㫱</a></li>
                                        <li><a href="kanjiy/19978">㫲</a></li>
                                        <li><a href="kanjiy/19979">㫳</a></li>
                                        <li><a href="3916">晞</a></li>
                                        <li><a href="3917">晤</a></li>
                                        <li><a href="3918">晧</a></li>
                                        <li><a class="color2" href="3919">晨</a>
                                        </li>
                                        <li><a href="3920">晢</a></li>
                                        <li><a href="kanjiy/24225">㫴</a></li>
                                        <li><a class="color2" href="6208">晝</a>
                                        </li>
                                        <li><a class="color2" href="6439">晚</a>
                                        </li>
                                        <li><a href="6537">晣</a></li>
                                        <li><a href="10468">晥</a></li>
                                        <li><a href="kanjiy/27703">𣇄</a></li>
                                        <li><a href="kanjiy/27845">𣇃</a></li>
                                        <li><a href="11637">曻</a></li>
                                        <li><a href="11678">晠</a></li>
                                        <li><a href="11680">晗</a></li>
                                        <li><a href="11681">晘</a></li>
                                        <li><a href="11682">晛</a></li>
                                        <li><a href="11683">晜</a></li>
                                        <li><a href="11684">晙</a></li>
                                        <li><a href="11685">晡</a></li>
                                        <li><a href="11686">㫰</a></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts12">
                                   <h3 class="ttl_while"><a href="kakusu12">１２画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="kanjiy/15097">晲</a></li>
                                        <li><a href="kanjiy/15098">晽</a></li>
                                        <li><a class="color1" href="kanji/172">晴</a></li>
                                        <li><a class="color1" href="kanji/328">暑</a></li>
                                        <li><a class="color1" href="kanji/492">景</a></li>
                                        <li><a class="color1" href="969">晩</a></li>
                                        <li><a class="color1" href="1256">普</a>
                                        </li>
                                        <li><a class="color1" href="1439">晶</a>
                                        </li>
                                        <li><a class="color1" href="1660">暁</a>
                                        </li>
                                        <li><a href="kanjiy/19980">㫵</a></li>
                                        <li><a href="kanjiy/19981">㫶</a></li>
                                        <li><a href="kanjiy/19982">㫸</a></li>
                                        <li><a href="kanjiy/19983">㫹</a></li>
                                        <li><a href="kanjiy/19984">㫺</a></li>
                                        <li><a href="kanjiy/19985">㫻</a></li>
                                        <li><a class="color2" href="2719">智</a>
                                        </li>
                                        <li><a href="kanjiy/19986">㫼</a></li>
                                        <li><a href="kanjiy/19987">㫽</a></li>
                                        <li><a href="3921">晰</a></li>
                                        <li><a href="kanjiy/24226">㫷</a></li>
                                        <li><a href="6209">暃</a></li>
                                        <li><a href="6210">暎</a></li>
                                        <li><a href="6536">晳</a></li>
                                        <li><a href="kanjiy/26248">晴</a></li>
                                        <li><a href="kanjiy/27193">㫾</a></li>
                                        <li><a href="kanjiy/27194">㫿</a></li>
                                        <li><a href="kanjiy/27195">㬀</a></li>
                                        <li><a href="kanjiy/27846">𣇵</a></li>
                                        <li><a href="kanjiy/27847">𣆶</a></li>
                                        <li><a href="11687">晻</a></li>
                                        <li><a href="11688">晹</a></li>
                                        <li><a href="11689">晼</a></li>
                                        <li><a href="11690">暀</a></li>
                                        <li><a href="11691">晷</a></li>
                                        <li><a href="11693">晵</a></li>
                                        <li><a href="11694">晬</a></li>
                                        <li><a href="11695">晭</a></li>
                                        <li><a href="11696">晿</a></li>
                                        <li><a href="11698">晱</a></li>
                                        <li><a href="11699">晫</a></li>
                                        <li><a href="11700">晪</a></li>
                                        <li><a href="11702">晾</a></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts13">
                                   <h3 class="ttl_while"><a href="kakusu13">１３画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="11709">暋</a></li>
                                        <li><a href="11747">㬅</a></li>
                                        <li><a href="kanjiy/15099">暆</a></li>
                                        <li><a href="kanjiy/15100">暊</a></li>
                                        <li><a href="kanjiy/15101">暏</a></li>
                                        <li><a href="kanjiy/15102">暓</a></li>
                                        <li><a href="kanjiy/15103">暔</a></li>
                                        <li><a href="kanjiy/15104">暕</a></li>
                                        <li><a class="color1" href="kanji/242">暗</a></li>
                                        <li><a class="color1" href="942">暖</a></li>
                                        <li><a class="color1" href="1029">暇</a>
                                        </li>
                                        <li><a href="kanjiy/19988">㬁</a></li>
                                        <li><a href="kanjiy/19989">㬂</a></li>
                                        <li><a href="kanjiy/19990">㬃</a></li>
                                        <li><a href="kanjiy/19991">㬆</a></li>
                                        <li><a href="kanjiy/19992">㬇</a></li>
                                        <li><a href="kanjiy/19993">㬋</a></li>
                                        <li><a href="kanjiy/19994">㬌</a></li>
                                        <li><a href="kanjiy/19998">㬒</a></li>
                                        <li><a href="3922">暈</a></li>
                                        <li><a class="color2" href="3923">暉</a>
                                        </li>
                                        <li><a href="kanjiy/20515">㷖</a></li>
                                        <li><a href="3934">暘</a></li>
                                        <li><a href="3935">暄</a></li>
                                        <li><a href="kanjiy/24227">㬈</a></li>
                                        <li><a href="kanjiy/24228">㬊</a></li>
                                        <li><a class="color2" href="6386">暑</a>
                                        </li>
                                        <li><a href="kanjiy/25362">暅</a></li>
                                        <li><a href="kanjiy/27196">㬄</a></li>
                                        <li><a href="11697">暒</a></li>
                                        <li><a href="11704">暍</a></li>
                                        <li><a href="11705">暌</a></li>
                                        <li><a href="11706">暙</a></li>
                                        <li><a href="11707">㬉</a></li>
                                        <li><a href="11708">晸</a></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts14">
                                   <h3 class="ttl_while"><a href="kakusu14">１４画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="11710">暟</a></li>
                                        <li><a href="11711">㬎</a></li>
                                        <li><a href="11712">暠</a></li>
                                        <li><a href="11713">暛</a></li>
                                        <li><a href="11715">暱</a></li>
                                        <li><a href="11728">曅</a></li>
                                        <li><a href="kanjiy/15105">暚</a></li>
                                        <li><a href="kanjiy/15106">暞</a></li>
                                        <li><a href="kanjiy/15107">暡</a></li>
                                        <li><a href="kanjiy/15108">暣</a></li>
                                        <li><a href="kanjiy/15109">暥</a></li>
                                        <li><a href="kanjiy/15113">暯</a></li>
                                        <li><a href="kanjiy/15134">朄</a></li>
                                        <li><a class="color1" href="979">暮</a></li>
                                        <li><a class="color1" href="1311">暦</a>
                                        </li>
                                        <li><a class="color2" href="2737">暢</a>
                                        </li>
                                        <li><a href="kanjiy/19995">㬍</a></li>
                                        <li><a href="kanjiy/19996">㬏</a></li>
                                        <li><a href="kanjiy/19997">㬐</a></li>
                                        <li><a href="3929">曄</a></li>
                                        <li><a href="3933">暝</a></li>
                                        <li><a href="kanjiy/25363">暧</a></li>
                                        <li><a href="10479">暤</a></li>
                                        <li><a href="11701">暜</a></li>
                                        <li><a href="11703">暐</a></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts15">
                                   <h3 class="ttl_while"><a href="kakusu15">１５画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="11714">暵</a></li>
                                        <li><a href="11716">暲</a></li>
                                        <li><a href="11753">暬</a></li>
                                        <li><a href="kanjiy/15110">暨</a></li>
                                        <li><a href="kanjiy/15111">暩</a></li>
                                        <li><a href="kanjiy/15112">暪</a></li>
                                        <li><a href="kanjiy/15114">暰</a></li>
                                        <li><a href="kanjiy/15115">暶</a></li>
                                        <li><a href="kanjiy/15116">暷</a></li>
                                        <li><a class="color1" href="811">暴</a></li>
                                        <li><a class="color1" href="1422">暫</a>
                                        </li>
                                        <li><a href="kanjiy/19999">㬓</a></li>
                                        <li><a href="kanjiy/20000">㬔</a></li>
                                        <li><a href="kanjiy/23996">暳</a></li>
                                        <li><a href="10478">暭</a></li>
                                        <li><a href="kanjiy/27197">㬑</a></li>
                                        <li><a href="kanjiy/27198">㬕</a></li>
                                        <li><a href="kanjiy/27199">㬖</a></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts16">
                                   <h3 class="ttl_while"><a href="kakusu16">１６画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="11718">曀</a></li>
                                        <li><a href="11719">暿</a></li>
                                        <li><a href="11720">暻</a></li>
                                        <li><a href="11721">曂</a></li>
                                        <li><a href="11722">曌</a></li>
                                        <li><a href="11724">曃</a></li>
                                        <li><a href="11725">㬚</a></li>
                                        <li><a href="11726">曈</a></li>
                                        <li><a href="11727">曊</a></li>
                                        <li><a href="11732">曔</a></li>
                                        <li><a href="kanjiy/15117">暺</a></li>
                                        <li><a href="kanjiy/15119">曋</a></li>
                                        <li><a href="kanjiy/15120">曍</a></li>
                                        <li><a href="kanjiy/15135">朆</a></li>
                                        <li><a class="color1" href="1221">曇</a>
                                        </li>
                                        <li><a href="kanjiy/20001">㬗</a></li>
                                        <li><a href="kanjiy/20003">㬙</a></li>
                                        <li><a href="kanjiy/20004">㬛</a></li>
                                        <li><a href="kanjiy/20005">㬞</a></li>
                                        <li><a href="3930">暾</a></li>
                                        <li><a href="3931">暹</a></li>
                                        <li><a href="3932">曁</a></li>
                                        <li><a class="color2" href="5683">曉</a>
                                        </li>
                                        <li><a href="5684">暸</a></li>
                                        <li><a href="kanjiy/24229">㬝</a></li>
                                        <li><a href="6211">暼</a></li>
                                        <li><a class="color2" href="6440">曆</a>
                                        </li>
                                        <li><a href="kanjiy/27200">㬟</a></li>
                                        <li><a href="11677">㬜</a></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts17">
                                   <h3 class="ttl_while"><a href="kakusu17">１７画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="11729">曎</a></li>
                                        <li><a href="11730">曏</a></li>
                                        <li><a href="11731">曒</a></li>
                                        <li><a href="11733">㬠</a></li>
                                        <li><a href="11738">㬢</a></li>
                                        <li><a href="kanjiy/15118">暽</a></li>
                                        <li><a href="kanjiy/15121">曑</a></li>
                                        <li><a href="kanjiy/15122">曓</a></li>
                                        <li><a href="kanjiy/15123">曕</a></li>
                                        <li><a href="kanjiy/15124">曗</a></li>
                                        <li><a class="color1" href="1939">曖</a>
                                        </li>
                                        <li><a class="color2" href="2540">曙</a>
                                        </li>
                                        <li><a href="kanjiy/20002">㬘</a></li>
                                        <li><a href="kanjiy/20006">㬡</a></li>
                                        <li><a href="3928">曚</a></li>
                                        <li><a href="kanjiy/20015">㬲</a></li>
                                        <li><a href="kanjiy/24230">㬦</a></li>
                                        <li><a href="kanjiy/26191">龧</a></li>
                                        <li><a href="11654">曐</a></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts18">
                                   <h3 class="ttl_while"><a href="kakusu18">１８画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="11717">㬥</a></li>
                                        <li><a href="11734">㬤</a></li>
                                        <li><a href="11735">曛</a></li>
                                        <li><a class="color1" href="kanji/234">曜</a></li>
                                        <li><a href="kanjiy/15125">曘</a></li>
                                        <li><a href="kanjiy/15126">曞</a></li>
                                        <li><a href="kanjiy/20007">㬣</a></li>
                                        <li><a href="kanjiy/27201">㬨</a></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts19">
                                   <h3 class="ttl_while"><a href="kakusu19">１９画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="11736">曟</a></li>
                                        <li><a class="color2" href="2831">曝</a>
                                        </li>
                                        <li><a href="kanjiy/20008">㬩</a></li>
                                        <li><a href="kanjiy/20009">㬪</a></li>
                                        <li><a href="3926">曠</a></li>
                                        <li><a href="kanjiy/25364">曢</a></li>
                                        <li><a href="10325">曡</a></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts20">
                                   <h3 class="ttl_while"><a href="kakusu20">２０画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="11737">曣</a></li>
                                        <li><a href="11739">曨</a></li>
                                        <li><a href="kanjiy/15127">曤</a></li>
                                        <li><a href="kanjiy/15128">曥</a></li>
                                        <li><a href="kanjiy/15129">曧</a></li>
                                        <li><a href="kanjiy/20010">㬫</a></li>
                                        <li><a href="3925">曦</a></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts21">
                                   <h3 class="ttl_while"><a href="kakusu21">２１画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="11754">朇</a></li>
                                        <li><a href="3924">曩</a></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts22">
                                   <h3 class="ttl_while"><a href="kakusu22">２２画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="kanjiy/20011">㬬</a></li>
                                        <li><a href="kanjiy/20012">㬭</a></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts23">
                                   <h3 class="ttl_while"><a href="kakusu23">２３画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="11740">曬</a></li>
                                        <li><a href="11741">曫</a></li>
                                        <li><a href="kanjiy/15130">曪</a></li>
                                        <li><a href="kanjiy/20013">㬮</a></li>
                                        <li><a href="kanjiy/20014">㬯</a></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts24">
                                   <h3 class="ttl_while"><a href="kakusu24">２４画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="11742">曮</a></li>
                                        <li><a href="11743">曭</a></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts25">
                                   <h3 class="ttl_while"><a href="kakusu25">２５画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="kanjiy/15131">曯</a></li>
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
                                             <option value="radical72">English</option>
                                             <option value="bushu04008">Japanese</option>
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

<!-- Mirrored from bushu04008 by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Nov 2023 00:40:20 GMT -->

</html>