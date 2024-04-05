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
                    <h1 class="ttl_main">部首：艸部（くさ・くさかんむり・そうこう）の漢字</h1>

                    <div class="bushu_about">
                         <div class="bushu_about_box">
                              <h2>艸部とは？</h2>
                              <p><strong>艸部（そうぶ）は、<span
                                             class="marker">草花の種類や状態、草花で作られたものなどに関する字</span>が主に属します。</strong>「艸」は「くさ」、冠（かんむり）になった形「艹」を「くさかんむり」「そうこう」と呼びます。
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
                                        <option value="#" selected>艸 艹（くさ・くさかんむり）</option>
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
                                        <option value="#" selected>艸 艹（そうこう）</option>
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
                                   <li><a href="bbushu06001">漢検級順</a></li>
                                   <li><a href="cbushu06001">読み順</a></li>
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
                                   <li><a href="#parts27">27画</a></li>
                                   <li><a href="#parts28">28画</a></li>
                                   <li><a href="#parts29">29画</a></li>
                                   <li><a href="#parts32">32画</a></li>
                              </ul>
                         </div><!--search_data-->
                        
                         <h2 class="left_border">部首：艸部（くさ・くさかんむり・そうこう）の漢字一覧</h2>
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
                                        <li><a href="9358">艹</a></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts04">
                                   <h3 class="ttl_while"><a href="kakusu04">４画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="9359">艹</a></li>
                                        <li><a href="9360">艹</a></li>
                                        <li><a href="26239">龷</a></li>
                                        <li><a href="26338">艺</a></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts05">
                                   <h3 class="ttl_while"><a href="kakusu05">５画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="9361">艽</a></li>
                                        <li><a href="9362">芁</a></li>
                                        <li><a href="9363">艿</a></li>
                                        <li><a href="9364">芀</a></li>
                                        <li><a href="9365">艻</a></li>
                                        <li><a href="21913">䒒</a></li>
                                        <li><a href="21914">䒓</a></li>
                                        <li><a href="5313">艾</a></li>
                                        <li><a href="17199">艼</a></li>
                                        <li><a href="24293">䒔</a></li>
                                        <li><a href="26340">节</a></li>
                                        <li><a href="27742">𦫿</a></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts06">
                                   <h3 class="ttl_while"><a href="kakusu06">６画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="9366">芉</a></li>
                                        <li><a href="9367">芄</a></li>
                                        <li><a href="9368">芑</a></li>
                                        <li><a href="9369">芎</a></li>
                                        <li><a href="9370">芐</a></li>
                                        <li><a href="9371">芓</a></li>
                                        <li><a href="9372">䒕</a></li>
                                        <li><a href="9373">芊</a></li>
                                        <li><a href="9374">芖</a></li>
                                        <li><a href="9375">芏</a></li>
                                        <li><a href="9376">芇</a></li>
                                        <li><a href="9377">芃</a></li>
                                        <li><a href="9378">芅</a></li>
                                        <li><a href="21915">䒖</a></li>
                                        <li><a href="21916">䒗</a></li>
                                        <li><a href="21917">䒘</a></li>
                                        <li><a href="5312">艸</a></li>
                                        <li><a href="5314">芍</a></li>
                                        <li><a href="5315">芒</a></li>
                                        <li><a href="17201">芕</a></li>
                                        <li><a class="color1" href="1013">芋</a>
                                        </li>
                                        <li><a class="color1" href="1119">芝</a>
                                        </li>
                                        <li><a href="24107">芌</a></li>
                                        <li><a href="26342">芗</a></li>
                                        <li><a href="27565">䒙</a></li>
                                   </ul>
                              </div>
                         
                              <div class="parts_box" id="parts07">
                                   <h3 class="ttl_while"><a href="kakusu07">７画</a></h3>
                                   <ul class="search_parts">
                                        <li><a class="color1" href="2029">芯</a>
                                        </li>
                                        <li><a class="color2" href="2229">芥</a>
                                        </li>
                                        <li><a href="2236">苅</a></li>
                                        <li><a href="9379">芛</a></li>
                                        <li><a href="9380">芺</a></li>
                                        <li><a href="9381">芲</a></li>
                                        <li><a href="9382">芪</a></li>
                                        <li><a class="color2" href="2333">芹</a>
                                        </li>
                                        <li><a href="9383">芰</a></li>
                                        <li><a href="9384">芨</a></li>
                                        <li><a href="9385">芩</a></li>
                                        <li><a href="9386">芵</a></li>
                                        <li><a href="9387">芡</a></li>
                                        <li><a href="9388">芤</a></li>
                                        <li><a href="9389">芷</a></li>
                                        <li><a href="9390">芿</a></li>
                                        <li><a href="9391">苆</a></li>
                                        <li><a href="9392">芮</a></li>
                                        <li><a href="9393">芧</a></li>
                                        <li><a href="9394">芚</a></li>
                                        <li><a href="9395">芘</a></li>
                                        <li><a href="9396">芣</a></li>
                                        <li><a href="9397">芾</a></li>
                                        <li><a href="9398">芴</a></li>
                                        <li><a href="9399">芠</a></li>
                                        <li><a href="9400">芼</a></li>
                                        <li><a class="color2" href="2816">芭</a>
                                        </li>
                                        <li><a class="color2" href="2876">芙</a>
                                        </li>
                                        <li><a href="21918">䒚</a></li>
                                        <li><a href="21919">䒛</a></li>
                                        <li><a href="21920">䒜</a></li>
                                        <li><a href="21921">䒝</a></li>
                                        <li><a href="21922">䒞</a></li>
                                        <li><a href="21923">䒟</a></li>
                                        <li><a href="21924">䒠</a></li>
                                        <li><a href="21925">䒡</a></li>
                                        <li><a href="21926">䒣</a></li>
                                        <li><a href="5316">芫</a></li>
                                        <li><a href="21927">䒤</a></li>
                                        <li><a href="5322">芟</a></li>
                                        <li><a href="21928">䒥</a></li>
                                        <li><a href="5323">芬</a></li>
                                        <li><a href="21929">䒦</a></li>
                                        <li><a href="17202">芜</a></li>
                                        <li><a href="17203">芞</a></li>
                                        <li><a href="17204">芢</a></li>
                                        <li><a href="17205">芶</a></li>
                                        <li><a href="17206">苀</a></li>
                                        <li><a href="17207">苁</a></li>
                                        <li><a href="17208">苂</a></li>
                                        <li><a href="17209">苃</a></li>
                                        <li><a href="17210">苄</a></li>
                                        <li><a href="17225">茾</a></li>
                                        <li><a class="color2" href="5445">芦</a>
                                        </li>
                                        <li><a class="color1" href="kanji/007">花</a></li>
                                        <li><a class="color1" href="kanji/493">芸</a></li>
                                        <li><a class="color1" href="1554">芳</a>
                                        </li>
                                        <li><a href="9196">芈</a></li>
                                        <li><a href="24294">䒢</a></li>
                                        <li><a href="26343">苈</a></li>
                                        <li><a href="26344">苉</a></li>
                                        <li><a href="26345">苊</a></li>
                                        <li><a href="26347">苍</a></li>
                                        <li><a href="26348">苎</a></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts08">
                                   <h3 class="ttl_while"><a href="kakusu08">８画</a></h3>
                                   <ul class="search_parts">
                                        <li><a class="color1" href="1958">苛</a>
                                        </li>
                                        <li><a class="color2" href="2170">苑</a>
                                        </li>
                                        <li><a class="color2" href="2212">茄</a>
                                        </li>
                                        <li><a href="9401">苢</a></li>
                                        <li><a href="9403">苷</a></li>
                                        <li><a href="9405">苘</a></li>
                                        <li><a href="2641">苫</a></li>
                                        <li><a href="9407">茁</a></li>
                                        <li><a href="9408">茋</a></li>
                                        <li><a href="2649">苒</a></li>
                                        <li><a href="9409">茌</a></li>
                                        <li><a href="9411">苕</a></li>
                                        <li><a href="9412">苐</a></li>
                                        <li><a href="9413">苨</a></li>
                                        <li><a class="color2" href="2694">苔</a>
                                        </li>
                                        <li><a href="9414">苶</a></li>
                                        <li><a href="9415">茇</a></li>
                                        <li><a href="2731">苧</a></li>
                                        <li><a href="9416">苤</a></li>
                                        <li><a href="9417">苾</a></li>
                                        <li><a href="9418">苠</a></li>
                                        <li><a href="9419">茀</a></li>
                                        <li><a href="9420">苪</a></li>
                                        <li><a href="9421">苯</a></li>
                                        <li><a href="9422">苚</a></li>
                                        <li><a href="9423">苭</a></li>
                                        <li><a class="color2" href="2922">茅</a>
                                        </li>
                                        <li><a href="9438">茊</a></li>
                                        <li><a href="2986">苓</a></li>
                                        <li><a href="5324">苡</a></li>
                                        <li><a href="21930">䒧</a></li>
                                        <li><a href="5325">苳</a></li>
                                        <li><a href="21931">䒨</a></li>
                                        <li><a class="color2" href="5326">茉</a>
                                        </li>
                                        <li><a href="21932">䒪</a></li>
                                        <li><a href="5327">苜</a></li>
                                        <li><a href="21933">䒬</a></li>
                                        <li><a href="5328">苻</a></li>
                                        <li><a href="21934">䒭</a></li>
                                        <li><a href="5329">苣</a></li>
                                        <li><a href="5330">范</a></li>
                                        <li><a href="5331">苞</a></li>
                                        <li><a href="5332">苙</a></li>
                                        <li><a href="5333">苟</a></li>
                                        <li><a href="5334">苹</a></li>
                                        <li><a href="5335">茆</a></li>
                                        <li><a href="5336">苴</a></li>
                                        <li><a class="color2" href="5337">苺</a>
                                        </li>
                                        <li><a href="17211">苝</a></li>
                                        <li><a href="17212">苩</a></li>
                                        <li><a href="17213">苬</a></li>
                                        <li><a href="17214">苮</a></li>
                                        <li><a href="17215">苰</a></li>
                                        <li><a href="17216">苲</a></li>
                                        <li><a href="17217">苵</a></li>
                                        <li><a href="17218">苸</a></li>
                                        <li><a href="17219">苼</a></li>
                                        <li><a href="17220">苿</a></li>
                                        <li><a class="color1" href="kanji/279">苦</a></li>
                                        <li><a class="color1" href="kanji/448">英</a></li>
                                        <li><a class="color1" href="kanji/456">芽</a></li>
                                        <li><a class="color1" href="894">若</a></li>
                                        <li><a class="color1" href="1284">茂</a>
                                        </li>
                                        <li><a class="color1" href="1541">苗</a>
                                        </li>
                                        <li><a class="color1" href="1670">茎</a>
                                        </li>
                                        <li><a href="24108">苖</a></li>
                                        <li><a href="24295">䒩</a></li>
                                        <li><a href="24296">䒫</a></li>
                                        <li><a href="26351">茐</a></li>
                                        <li><a href="26353">茓</a></li>
                                        <li><a href="26354">茔</a></li>
                                        <li><a href="26355">茕</a></li>
                                        <li><a href="27563">䒯</a></li>
                                        <li><a href="27564">䒮</a></li>
                                   </ul>
                              </div>
                         
                              <div class="parts_box" id="parts09">
                                   <h3 class="ttl_while"><a href="kakusu09">９画</a></h3>
                                   <ul class="search_parts">
                                        <li><a class="color1" href="1796">荘</a>
                                        </li>
                                        <li><a class="color1" href="1946">茨</a>
                                        </li>
                                        <li><a href="2356">荊</a></li>
                                        <li><a class="color2" href="2588">茸</a>
                                        </li>
                                        <li><a href="2607">荏</a></li>
                                        <li><a href="9404">茍</a></li>
                                        <li><a href="9406">苽</a></li>
                                        <li><a class="color2" href="2642">茜</a>
                                        </li>
                                        <li><a href="9424">䒾</a></li>
                                        <li><a href="9425">茟</a></li>
                                        <li><a href="9426">荢</a></li>
                                        <li><a href="9427">荄</a></li>
                                        <li><a href="9428">䒷</a></li>
                                        <li><a href="9429">荁</a></li>
                                        <li><a href="9430">荍</a></li>
                                        <li><a href="9431">茥</a></li>
                                        <li><a href="9432">茭</a></li>
                                        <li><a href="9433">荇</a></li>
                                        <li><a href="9435">茩</a></li>
                                        <li><a href="9436">茳</a></li>
                                        <li><a href="9437">茛</a></li>
                                        <li><a href="9440">茈</a></li>
                                        <li><a href="9441">茡</a></li>
                                        <li><a href="9442">茬</a></li>
                                        <li><a href="9443">茺</a></li>
                                        <li><a href="9444">茙</a></li>
                                        <li><a href="9445">荗</a></li>
                                        <li><a href="9446">茮</a></li>
                                        <li><a href="9447">荃</a></li>
                                        <li><a href="9450">荎</a></li>
                                        <li><a href="9451">茽</a></li>
                                        <li><a href="9452">荑</a></li>
                                        <li><a href="9453">茼</a></li>
                                        <li><a href="9454">茷</a></li>
                                        <li><a href="9455">荂</a></li>
                                        <li><a href="9457">䒽</a></li>
                                        <li><a href="9458">荔</a></li>
                                        <li><a href="9459">茢</a></li>
                                        <li><a href="9460">荖</a></li>
                                        <li><a href="21935">䒰</a></li>
                                        <li><a href="21936">䒲</a></li>
                                        <li><a href="9467">荚</a></li>
                                        <li><a href="21937">䒴</a></li>
                                        <li><a href="21938">䒵</a></li>
                                        <li><a href="21939">䒸</a></li>
                                        <li><a href="21940">䒺</a></li>
                                        <li><a href="21941">䒻</a></li>
                                        <li><a href="21942">䒼</a></li>
                                        <li><a href="5339">茴</a></li>
                                        <li><a href="5340">茯</a></li>
                                        <li><a href="5341">茱</a></li>
                                        <li><a href="5342">荀</a></li>
                                        <li><a href="5343">荅</a></li>
                                        <li><a href="5344">茲</a></li>
                                        <li><a href="5345">茹</a></li>
                                        <li><a href="5346">茵</a></li>
                                        <li><a href="5347">荐</a></li>
                                        <li><a href="5348">茗</a></li>
                                        <li><a href="5349">茘</a></li>
                                        <li><a href="5350">茫</a></li>
                                        <li><a href="12998">芔</a></li>
                                        <li><a href="5381">莽</a></li>
                                        <li><a href="17221">茚</a></li>
                                        <li><a href="17222">茠</a></li>
                                        <li><a href="17223">茤</a></li>
                                        <li><a href="17224">茪</a></li>
                                        <li><a href="17226">茿</a></li>
                                        <li><a href="17227">荋</a></li>
                                        <li><a href="17228">荌</a></li>
                                        <li><a href="9574">茰</a></li>
                                        <li><a class="color1" href="kanji/051">草</a></li>
                                        <li><a class="color1" href="kanji/188">茶</a></li>
                                        <li><a href="5936">茖</a></li>
                                        <li><a class="color1" href="1095">荒</a>
                                        </li>
                                        <li><a href="6523">荆</a></li>
                                        <li><a href="8807">荕</a></li>
                                        <li><a href="24109">茦</a></li>
                                        <li><a href="24110">茧</a></li>
                                        <li><a href="24297">䒱</a></li>
                                        <li><a href="24298">䒶</a></li>
                                        <li><a href="24299">䓁</a></li>
                                        <li><a href="24398">䒹</a></li>
                                        <li><a href="24483">荠</a></li>
                                        <li><a href="26352">茒</a></li>
                                        <li><a href="26359">荜</a></li>
                                        <li><a href="26360">荞</a></li>
                                        <li><a href="26361">荟</a></li>
                                        <li><a href="26363">荥</a></li>
                                        <li><a href="26364">荦</a></li>
                                        <li><a href="26365">荧</a></li>
                                        <li><a href="26366">荨</a></li>
                                        <li><a href="26367">荩</a></li>
                                        <li><a href="26368">荪</a></li>
                                        <li><a href="26372">荮</a></li>
                                        <li><a href="27561">䓀</a></li>
                                        <li><a href="27562">䒿</a></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts10">
                                   <h3 class="ttl_while"><a href="kakusu10">１０画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="9200">羐</a></li>
                                        <li><a class="color2" href="2261">莞</a>
                                        </li>
                                        <li><a class="color2" href="2761">荻</a>
                                        </li>
                                        <li><a href="2781">莵</a></li>
                                        <li><a class="color2" href="2832">莫</a>
                                        </li>
                                        <li><a href="9434">莕</a></li>
                                        <li><a href="2963">莱</a></li>
                                        <li><a href="9448">荈</a></li>
                                        <li><a href="9463">莧</a></li>
                                        <li><a href="9464">莃</a></li>
                                        <li><a href="9465">莍</a></li>
                                        <li><a href="9466">莒</a></li>
                                        <li><a href="9468">莙</a></li>
                                        <li><a href="9469">莄</a></li>
                                        <li><a href="9470">䓔</a></li>
                                        <li><a href="9471">莝</a></li>
                                        <li><a href="9472">莘</a></li>
                                        <li><a href="9473">茞</a></li>
                                        <li><a href="21943">䓂</a></li>
                                        <li><a href="5338">莓</a></li>
                                        <li><a href="9474">莀</a></li>
                                        <li><a href="21944">䓃</a></li>
                                        <li><a href="9475">荽</a></li>
                                        <li><a href="21945">䓄</a></li>
                                        <li><a href="9476">荾</a></li>
                                        <li><a href="21946">䓅</a></li>
                                        <li><a href="9477">荿</a></li>
                                        <li><a href="21947">䓆</a></li>
                                        <li><a href="9478">莦</a></li>
                                        <li><a href="21948">䓇</a></li>
                                        <li><a href="9479">莌</a></li>
                                        <li><a href="21949">䓈</a></li>
                                        <li><a href="9480">莜</a></li>
                                        <li><a href="21950">䓉</a></li>
                                        <li><a href="9481">莛</a></li>
                                        <li><a href="21951">䓊</a></li>
                                        <li><a href="21952">䓋</a></li>
                                        <li><a href="21953">䓍</a></li>
                                        <li><a href="9484">荰</a></li>
                                        <li><a href="21954">䓎</a></li>
                                        <li><a href="9485">莆</a></li>
                                        <li><a href="21955">䓏</a></li>
                                        <li><a href="9486">莩</a></li>
                                        <li><a href="21956">䓑</a></li>
                                        <li><a href="5351">莚</a></li>
                                        <li><a href="9487">莬</a></li>
                                        <li><a href="21957">䓒</a></li>
                                        <li><a href="5352">莢</a></li>
                                        <li><a href="9488">莂</a></li>
                                        <li><a href="5353">莪</a></li>
                                        <li><a href="9489">莔</a></li>
                                        <li><a href="5354">莟</a></li>
                                        <li><a href="9490">荸</a></li>
                                        <li><a href="5355">莎</a></li>
                                        <li><a href="5356">莅</a></li>
                                        <li><a href="5357">芻</a></li>
                                        <li><a href="5359">茣</a></li>
                                        <li><a href="5360">莨</a></li>
                                        <li><a href="5361">荳</a></li>
                                        <li><a href="5362">莠</a></li>
                                        <li><a href="5367">荼</a></li>
                                        <li><a href="5368">荵</a></li>
                                        <li><a class="color2" href="5369">莉</a>
                                        </li>
                                        <li><a href="9506">茝</a></li>
                                        <li><a href="17229">荱</a></li>
                                        <li><a href="17230">荲</a></li>
                                        <li><a href="17231">荴</a></li>
                                        <li><a href="17232">荶</a></li>
                                        <li><a href="17233">荹</a></li>
                                        <li><a href="17234">荺</a></li>
                                        <li><a href="17235">莁</a></li>
                                        <li><a href="17236">莈</a></li>
                                        <li><a href="17237">莋</a></li>
                                        <li><a href="17238">莏</a></li>
                                        <li><a href="17239">莐</a></li>
                                        <li><a href="17240">莗</a></li>
                                        <li><a href="17241">莡</a></li>
                                        <li><a href="17242">莥</a></li>
                                        <li><a href="17243">莮</a></li>
                                        <li><a href="17244">莯</a></li>
                                        <li><a href="17245">莻</a></li>
                                        <li><a class="color1" href="kanji/257">荷</a></li>
                                        <li><a href="5937">莖</a></li>
                                        <li><a href="5938">莇</a></li>
                                        <li><a class="color2" href="5939">莊</a>
                                        </li>
                                        <li><a class="color1" href="1334">華</a>
                                        </li>
                                        <li><a href="24111">莑</a></li>
                                        <li><a href="24112">莤</a></li>
                                        <li><a href="24300">䓌</a></li>
                                        <li><a href="24301">䓐</a></li>
                                        <li><a href="24302">䓓</a></li>
                                        <li><a href="26357">荙</a></li>
                                        <li><a href="26369">荫</a></li>
                                        <li><a href="26376">莣</a></li>
                                        <li><a href="26377">莰</a></li>
                                        <li><a href="26378">莳</a></li>
                                        <li><a href="26379">莴</a></li>
                                        <li><a href="26382">获</a></li>
                                        <li><a href="26385">莸</a></li>
                                        <li><a href="26386">莹</a></li>
                                        <li><a href="27559">䓖</a></li>
                                        <li><a href="27806">𦰩</a></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts11">
                                   <h3 class="ttl_while"><a href="kakusu11">１１画</a></h3>
                                   <ul class="search_parts">
                                        <li><a class="color1" href="1943">萎</a>
                                        </li>
                                        <li><a class="color2" href="2262">菅</a>
                                        </li>
                                        <li><a class="color2" href="2570">菖</a>
                                        </li>
                                        <li><a href="9410">菭</a></li>
                                        <li><a class="color2" href="2797">萄</a>
                                        </li>
                                        <li><a class="color2" href="2901">菩</a>
                                        </li>
                                        <li><a class="color2" href="2911">萌</a>
                                        </li>
                                        <li><a href="9694">萕</a></li>
                                        <li><a class="color2" href="2912">萠</a>
                                        </li>
                                        <li><a class="color2" href="2987">菱</a>
                                        </li>
                                        <li><a href="21958">䓗</a></li>
                                        <li><a href="11650">萅</a></li>
                                        <li><a href="21959">䓘</a></li>
                                        <li><a href="21960">䓙</a></li>
                                        <li><a href="21961">䓚</a></li>
                                        <li><a href="21962">䓛</a></li>
                                        <li><a href="9493">菀</a></li>
                                        <li><a href="21963">䓜</a></li>
                                        <li><a href="9494">菸</a></li>
                                        <li><a href="21964">䓝</a></li>
                                        <li><a href="9495">菏</a></li>
                                        <li><a href="21965">䓟</a></li>
                                        <li><a href="9496">菡</a></li>
                                        <li><a href="21966">䓠</a></li>
                                        <li><a href="21967">䓡</a></li>
                                        <li><a href="9498">萈</a></li>
                                        <li><a href="21968">䓢</a></li>
                                        <li><a href="9499">萁</a></li>
                                        <li><a href="21969">䓣</a></li>
                                        <li><a href="21970">䓤</a></li>
                                        <li><a href="21971">䓥</a></li>
                                        <li><a href="5370">菽</a></li>
                                        <li><a href="9502">萙</a></li>
                                        <li><a href="21972">䓧</a></li>
                                        <li><a href="5371">萢</a></li>
                                        <li><a href="9503">菤</a></li>
                                        <li><a href="21973">䓪</a></li>
                                        <li><a href="5372">菠</a></li>
                                        <li><a href="9504">菇</a></li>
                                        <li><a href="21974">䓭</a></li>
                                        <li><a href="5373">菎</a></li>
                                        <li><a href="9505">莿</a></li>
                                        <li><a href="5374">菴</a></li>
                                        <li><a href="5375">菲</a></li>
                                        <li><a href="9507">菆</a></li>
                                        <li><a href="5376">萃</a></li>
                                        <li><a href="9508">菨</a></li>
                                        <li><a href="5377">萍</a></li>
                                        <li><a href="9509">萑</a></li>
                                        <li><a class="color2" href="5378">菫</a>
                                        </li>
                                        <li><a href="9510">菥</a></li>
                                        <li><a href="5379">菁</a></li>
                                        <li><a href="9511">菹</a></li>
                                        <li><a href="5380">菘</a></li>
                                        <li><a href="9513">萐</a></li>
                                        <li><a href="9514">萏</a></li>
                                        <li><a href="9515">菼</a></li>
                                        <li><a href="9516">菂</a></li>
                                        <li><a href="9517">菾</a></li>
                                        <li><a href="9518">菪</a></li>
                                        <li><a href="9519">菝</a></li>
                                        <li><a href="9520">萉</a></li>
                                        <li><a href="9521">菔</a></li>
                                        <li><a href="9522">荓</a></li>
                                        <li><a href="9523">萆</a></li>
                                        <li><a href="9524">菢</a></li>
                                        <li><a href="9525">菶</a></li>
                                        <li><a href="9526">菵</a></li>
                                        <li><a href="9527">莾</a></li>
                                        <li><a href="9529">菉</a></li>
                                        <li><a href="9530">䓞</a></li>
                                        <li><a href="17246">菃</a></li>
                                        <li><a href="17247">菄</a></li>
                                        <li><a href="17248">菈</a></li>
                                        <li><a href="17249">菋</a></li>
                                        <li><a href="17250">菍</a></li>
                                        <li><a href="17252">菕</a></li>
                                        <li><a href="17253">菗</a></li>
                                        <li><a href="17254">菙</a></li>
                                        <li><a href="17255">菚</a></li>
                                        <li><a href="9548">菑</a></li>
                                        <li><a href="17256">菛</a></li>
                                        <li><a href="17257">菞</a></li>
                                        <li><a href="17258">菦</a></li>
                                        <li><a href="17259">菧</a></li>
                                        <li><a href="17260">菬</a></li>
                                        <li><a href="17261">菮</a></li>
                                        <li><a href="17262">菺</a></li>
                                        <li><a href="17263">菿</a></li>
                                        <li><a href="17264">萀</a></li>
                                        <li><a href="17265">萂</a></li>
                                        <li><a href="17266">萒</a></li>
                                        <li><a href="17267">萔</a></li>
                                        <li><a href="17268">萘</a></li>
                                        <li><a href="17269">萟</a></li>
                                        <li><a href="17271">营</a></li>
                                        <li><a href="5940">萓</a></li>
                                        <li><a href="5941">萋</a></li>
                                        <li><a href="5942">菷</a></li>
                                        <li><a class="color1" href="508">菜</a></li>
                                        <li><a class="color1" href="947">著</a></li>
                                        <li><a class="color1" href="1027">菓</a>
                                        </li>
                                        <li><a href="6297">萇</a></li>
                                        <li><a href="6299">菻</a></li>
                                        <li><a class="color2" href="6456">萊</a>
                                        </li>
                                        <li><a class="color1" href="1367">菊</a>
                                        </li>
                                        <li><a class="color1" href="1661">菌</a>
                                        </li>
                                        <li><a href="8811">萗</a></li>
                                        <li><a href="24113">菒</a></li>
                                        <li><a href="24114">菳</a></li>
                                        <li><a href="24115">萞</a></li>
                                        <li><a href="24303">䓦</a></li>
                                        <li><a href="26461">萖</a></li>
                                        <li><a href="26463">萛</a></li>
                                        <li><a href="26464">萜</a></li>
                                        <li><a href="26465">萝</a></li>
                                        <li><a href="26466">萡</a></li>
                                        <li><a href="26467">萣</a></li>
                                        <li><a href="26468">萦</a></li>
                                        <li><a href="26469">萧</a></li>
                                        <li><a href="27555">䓬</a></li>
                                        <li><a href="27556">䓫</a></li>
                                        <li><a href="27557">䓩</a></li>
                                        <li><a href="27558">䓨</a></li>
                                        <li><a href="27560">䓕</a></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts12">
                                   <h3 class="ttl_while"><a href="kakusu12">１２画</a></h3>
                                   <ul class="search_parts">
                                        <li><a class="color1" href="1969">葛</a>
                                        </li>
                                        <li><a class="color2" href="2263">萱</a>
                                        </li>
                                        <li><a class="color2" href="2282">葵</a>
                                        </li>
                                        <li><a href="2304">韮</a></li>
                                        <li><a href="2381">菰</a></li>
                                        <li><a class="color2" href="2516">萩</a>
                                        </li>
                                        <li><a class="color2" href="2517">葺</a>
                                        </li>
                                        <li><a href="2668">葱</a></li>
                                        <li><a href="2780">菟</a></li>
                                        <li><a class="color2" href="2798">董</a>
                                        </li>
                                        <li><a class="color2" href="2880">葡</a>
                                        </li>
                                        <li><a href="2973">葎</a></li>
                                        <li><a href="3033">葢</a></li>
                                        <li><a href="9456">茻</a></li>
                                        <li><a href="12395">蒍</a></li>
                                        <li><a href="9492">葊</a></li>
                                        <li><a href="21975">䓮</a></li>
                                        <li><a href="21976">䓯</a></li>
                                        <li><a href="21977">䓰</a></li>
                                        <li><a href="21979">䓳</a></li>
                                        <li><a href="21980">䓴</a></li>
                                        <li><a href="21981">䓶</a></li>
                                        <li><a href="9512">葅</a></li>
                                        <li><a href="21982">䓷</a></li>
                                        <li><a href="21983">䓸</a></li>
                                        <li><a href="5382">萼</a></li>
                                        <li><a href="21984">䓹</a></li>
                                        <li><a href="5383">葩</a></li>
                                        <li><a href="21985">䓻</a></li>
                                        <li><a href="5384">葷</a></li>
                                        <li><a href="5385">萸</a></li>
                                        <li><a href="5386">萵</a></li>
                                        <li><a href="5387">葯</a></li>
                                        <li><a href="5388">葭</a></li>
                                        <li><a href="5389">葆</a></li>
                                        <li><a href="9531">葳</a></li>
                                        <li><a href="9532">葜</a></li>
                                        <li><a href="9533">萿</a></li>
                                        <li><a href="9534">葀</a></li>
                                        <li><a href="9535">葌</a></li>
                                        <li><a href="9536">菣</a></li>
                                        <li><a href="9537">葪</a></li>
                                        <li><a href="9538">萲</a></li>
                                        <li><a href="5410">蒂</a></li>
                                        <li><a href="9542">葟</a></li>
                                        <li><a href="9543">葒</a></li>
                                        <li><a href="17251">菐</a></li>
                                        <li><a href="9544">葓</a></li>
                                        <li><a href="9545">葈</a></li>
                                        <li><a href="9546">葸</a></li>
                                        <li><a href="9547">葘</a></li>
                                        <li><a href="9549">葇</a></li>
                                        <li><a href="9550">蒁</a></li>
                                        <li><a href="9551">葙</a></li>
                                        <li><a href="9552">葚</a></li>
                                        <li><a href="9553">葰</a></li>
                                        <li><a href="9554">葠</a></li>
                                        <li><a href="9556">葴</a></li>
                                        <li><a href="9557">蒅</a></li>
                                        <li><a href="9558">莭</a></li>
                                        <li><a href="9559">葏</a></li>
                                        <li><a href="9560">葥</a></li>
                                        <li><a href="9561">葄</a></li>
                                        <li><a href="9562">塟</a></li>
                                        <li><a href="9563">葼</a></li>
                                        <li><a href="17272">萭</a></li>
                                        <li><a href="9564">葤</a></li>
                                        <li><a href="17273">萮</a></li>
                                        <li><a href="9565">葶</a></li>
                                        <li><a href="17274">萰</a></li>
                                        <li><a href="9566">葖</a></li>
                                        <li><a href="17275">萳</a></li>
                                        <li><a href="9567">葞</a></li>
                                        <li><a href="17276">萴</a></li>
                                        <li><a href="9568">萯</a></li>
                                        <li><a href="17277">萶</a></li>
                                        <li><a href="9569">葍</a></li>
                                        <li><a href="17278">萷</a></li>
                                        <li><a href="9570">葐</a></li>
                                        <li><a href="17279">萺</a></li>
                                        <li><a href="9571">萹</a></li>
                                        <li><a href="17280">萾</a></li>
                                        <li><a href="9572">葑</a></li>
                                        <li><a href="17281">葂</a></li>
                                        <li><a href="9573">葧</a></li>
                                        <li><a href="17282">葃</a></li>
                                        <li><a href="17283">葋</a></li>
                                        <li><a href="9575">葽</a></li>
                                        <li><a href="17284">葔</a></li>
                                        <li><a href="17285">葕</a></li>
                                        <li><a href="17286">葝</a></li>
                                        <li><a href="17287">葨</a></li>
                                        <li><a href="17288">葲</a></li>
                                        <li><a href="17289">葾</a></li>
                                        <li><a href="17290">葿</a></li>
                                        <li><a href="17291">蒀</a></li>
                                        <li><a href="5887">葫</a></li>
                                        <li><a href="17292">蒃</a></li>
                                        <li><a class="color2" href="5888">萬</a>
                                        </li>
                                        <li><a href="17293">蒊</a></li>
                                        <li><a class="color1" href="kanji/425">葉</a></li>
                                        <li><a class="color1" href="kanji/430">落</a></li>
                                        <li><a href="5986">葹</a></li>
                                        <li><a href="5987">葮</a></li>
                                        <li><a href="5988">蒄</a></li>
                                        <li><a href="6300">萪</a></li>
                                        <li><a class="color2" href="6410">著</a>
                                        </li>
                                        <li><a class="color1" href="1480">葬</a>
                                        </li>
                                        <li><a href="24116">萫</a></li>
                                        <li><a href="24117">萻</a></li>
                                        <li><a href="24118">葁</a></li>
                                        <li><a href="24119">葻</a></li>
                                        <li><a href="24304">䓲</a></li>
                                        <li><a href="24305">䓵</a></li>
                                        <li><a href="24306">䓺</a></li>
                                        <li><a href="26470">萨</a></li>
                                        <li><a href="26471">蒆</a></li>
                                        <li><a href="26472">蒈</a></li>
                                        <li><a href="26473">蒌</a></li>
                                        <li><a href="26474">蒎</a></li>
                                        <li><a href="26475">蒏</a></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts13">
                                   <h3 class="ttl_while"><a href="kakusu13">１３画</a></h3>
                                   <ul class="search_parts">
                                        <li><a class="color1" href="1965">蓋</a>
                                        </li>
                                        <li><a class="color2" href="2152">葦</a>
                                        </li>
                                        <li><a class="color2" href="2437">蓑</a>
                                        </li>
                                        <li><a href="2456">蒜</a></li>
                                        <li><a class="color2" href="2475">蒔</a>
                                        </li>
                                        <li><a class="color2" href="2518">蒐</a>
                                        </li>
                                        <li><a href="2571">蒋</a></li>
                                        <li><a class="color2" href="2669">蒼</a>
                                        </li>
                                        <li><a class="color2" href="2877">蒲</a>
                                        </li>
                                        <li><a class="color2" href="2923">蒙</a>
                                        </li>
                                        <li><a class="color2" href="2957">蓉</a>
                                        </li>
                                        <li><a class="color2" href="3010">蓮</a>
                                        </li>
                                        <li><a href="9491">蒞</a></li>
                                        <li><a href="5358">蒭</a></li>
                                        <li><a href="9497">䓿</a></li>
                                        <li><a href="21978">䓱</a></li>
                                        <li><a href="21986">䓼</a></li>
                                        <li><a href="21987">䓽</a></li>
                                        <li><a href="21988">䓾</a></li>
                                        <li><a href="21989">䔀</a></li>
                                        <li><a href="21990">䔁</a></li>
                                        <li><a href="21991">䔂</a></li>
                                        <li><a href="5390">蒿</a></li>
                                        <li><a href="21992">䔃</a></li>
                                        <li><a href="5391">蓙</a></li>
                                        <li><a href="21993">䔄</a></li>
                                        <li><a href="5392">蒟</a></li>
                                        <li><a href="21994">䔅</a></li>
                                        <li><a href="5393">蓖</a></li>
                                        <li><a href="21995">䔇</a></li>
                                        <li><a href="5394">蒡</a></li>
                                        <li><a href="21996">䔉</a></li>
                                        <li><a href="5395">蓍</a></li>
                                        <li><a href="21997">䔌</a></li>
                                        <li><a href="5396">蓆</a></li>
                                        <li><a href="5397">蒹</a></li>
                                        <li><a href="5398">蓁</a></li>
                                        <li><a href="5399">蓐</a></li>
                                        <li><a href="5400">蒻</a></li>
                                        <li><a href="9555">蓡</a></li>
                                        <li><a href="9576">蒕</a></li>
                                        <li><a href="9577">蒽</a></li>
                                        <li><a href="9578">蒯</a></li>
                                        <li><a href="9579">蒦</a></li>
                                        <li><a href="9580">䔈</a></li>
                                        <li><a href="9581">蓇</a></li>
                                        <li><a href="9582">蓌</a></li>
                                        <li><a href="9583">䔋</a></li>
                                        <li><a href="9584">蒴</a></li>
                                        <li><a href="9585">蒒</a></li>
                                        <li><a href="17294">蒑</a></li>
                                        <li><a href="9586">蒺</a></li>
                                        <li><a href="17295">蒖</a></li>
                                        <li><a href="9587">蒓</a></li>
                                        <li><a href="17296">蒘</a></li>
                                        <li><a href="9588">蒠</a></li>
                                        <li><a href="17297">蒚</a></li>
                                        <li><a href="9589">蒨</a></li>
                                        <li><a href="17298">蒛</a></li>
                                        <li><a href="17299">蒝</a></li>
                                        <li><a href="9591">蒩</a></li>
                                        <li><a href="17300">蒢</a></li>
                                        <li><a href="5958">蓊</a></li>
                                        <li><a href="9592">蓀</a></li>
                                        <li><a href="17301">蒣</a></li>
                                        <li><a href="9593">蒧</a></li>
                                        <li><a href="17302">蒤</a></li>
                                        <li><a href="9594">蓎</a></li>
                                        <li><a href="17303">蒥</a></li>
                                        <li><a href="9595">蓜</a></li>
                                        <li><a href="17304">蒫</a></li>
                                        <li><a class="color1" href="913">蒸</a></li>
                                        <li><a href="5985">蓚</a></li>
                                        <li><a href="9596">蓓</a></li>
                                        <li><a href="17305">蒬</a></li>
                                        <li><a href="9597">蒪</a></li>
                                        <li><a href="17306">蒮</a></li>
                                        <li><a href="9598">蒱</a></li>
                                        <li><a href="17307">蒰</a></li>
                                        <li><a href="9599">蓂</a></li>
                                        <li><a href="17308">蒳</a></li>
                                        <li><a href="9600">蒾</a></li>
                                        <li><a href="17309">蒵</a></li>
                                        <li><a href="17310">蒶</a></li>
                                        <li><a href="9602">蒗</a></li>
                                        <li><a href="17311">蒷</a></li>
                                        <li><a href="9603">蓈</a></li>
                                        <li><a href="17312">蓃</a></li>
                                        <li><a class="color1" href="1188">蓄</a>
                                        </li>
                                        <li><a href="17313">蓒</a></li>
                                        <li><a href="17314">蓔</a></li>
                                        <li><a href="17315">蓕</a></li>
                                        <li><a href="17316">蓘</a></li>
                                        <li><a href="17317">蓞</a></li>
                                        <li><a href="8875">䔍</a></li>
                                        <li><a href="24120">蓅</a></li>
                                        <li><a href="24307">䔆</a></li>
                                        <li><a href="24308">䔊</a></li>
                                        <li><a href="26494">蓗</a></li>
                                        <li><a href="26496">蓛</a></li>
                                        <li><a href="26501">蓤</a></li>
                                        <li><a href="26502">蓥</a></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts14">
                                   <h3 class="ttl_while"><a href="kakusu14">１４画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="9617">蓯</a></li>
                                        <li><a href="17326">蔅</a></li>
                                        <li><a href="9618">蔧</a></li>
                                        <li><a href="17327">蔉</a></li>
                                        <li><a href="9619">蔎</a></li>
                                        <li><a href="17328">蔋</a></li>
                                        <li><a href="9620">蔪</a></li>
                                        <li><a href="17329">蔍</a></li>
                                        <li><a href="9621">蔥</a></li>
                                        <li><a href="17330">蔏</a></li>
                                        <li><a href="9622">蔌</a></li>
                                        <li><a href="17331">蔖</a></li>
                                        <li><a href="9623">蓷</a></li>
                                        <li><a href="17332">蔙</a></li>
                                        <li><a href="9624">蓨</a></li>
                                        <li><a href="17333">蔝</a></li>
                                        <li><a href="9625">蓧</a></li>
                                        <li><a href="17334">蔨</a></li>
                                        <li><a href="9626">蔯</a></li>
                                        <li><a href="17335">蔩</a></li>
                                        <li><a class="color1" href="2100">蔑</a>
                                        </li>
                                        <li><a href="9627">蓪</a></li>
                                        <li><a href="17336">蔮</a></li>
                                        <li><a href="9628">蔢</a></li>
                                        <li><a href="17337">蔰</a></li>
                                        <li><a href="9629">蓽</a></li>
                                        <li><a href="17338">蔱</a></li>
                                        <li><a href="2153">蔚</a></li>
                                        <li><a href="9630">蔤</a></li>
                                        <li><a href="17339">蔻</a></li>
                                        <li><a class="color2" href="2164">蔭</a>
                                        </li>
                                        <li><a href="9631">蔈</a></li>
                                        <li><a href="9632">蓱</a></li>
                                        <li><a href="9634">蓩</a></li>
                                        <li><a href="9635">蔂</a></li>
                                        <li><a href="9636">蔞</a></li>
                                        <li><a href="9637">蔶</a></li>
                                        <li><a href="9671">䔥</a></li>
                                        <li><a class="color2" href="2740">蔦</a>
                                        </li>
                                        <li><a class="color2" href="2846">蔓</a>
                                        </li>
                                        <li><a href="2881">蔀</a></li>
                                        <li><a class="color2" href="2913">蓬</a>
                                        </li>
                                        <li><a href="9482">蔐</a></li>
                                        <li><a href="9501">蓳</a></li>
                                        <li><a href="9528">䔖</a></li>
                                        <li><a href="21998">䔎</a></li>
                                        <li><a href="21999">䔐</a></li>
                                        <li><a href="22000">䔑</a></li>
                                        <li><a href="22001">䔒</a></li>
                                        <li><a href="22002">䔓</a></li>
                                        <li><a href="5401">蓼</a></li>
                                        <li><a href="22003">䔔</a></li>
                                        <li><a href="5402">蔗</a></li>
                                        <li><a href="22004">䔕</a></li>
                                        <li><a href="5403">蔔</a></li>
                                        <li><a href="22005">䔗</a></li>
                                        <li><a href="5404">蔡</a></li>
                                        <li><a href="22006">䔘</a></li>
                                        <li><a href="5405">蔘</a></li>
                                        <li><a href="22007">䔙</a></li>
                                        <li><a href="5406">蔟</a></li>
                                        <li><a href="22008">䔚</a></li>
                                        <li><a href="5407">蓴</a></li>
                                        <li><a href="22009">䔛</a></li>
                                        <li><a href="5408">蓿</a></li>
                                        <li><a href="22010">䔜</a></li>
                                        <li><a href="5409">蔕</a></li>
                                        <li><a href="22012">䔞</a></li>
                                        <li><a href="22013">䔟</a></li>
                                        <li><a href="22014">䔠</a></li>
                                        <li><a href="22015">䔡</a></li>
                                        <li><a href="22016">䔢</a></li>
                                        <li><a href="22017">䔣</a></li>
                                        <li><a href="22018">䔧</a></li>
                                        <li><a href="22019">䔪</a></li>
                                        <li><a href="22020">䔬</a></li>
                                        <li><a href="9590">蔳</a></li>
                                        <li><a href="6298">蔆</a></li>
                                        <li><a href="9605">蔫</a></li>
                                        <li><a href="9606">蓲</a></li>
                                        <li><a href="9607">蔊</a></li>
                                        <li><a class="color2" href="6457">蔣</a>
                                        </li>
                                        <li><a href="9608">蔇</a></li>
                                        <li><a href="9609">蔃</a></li>
                                        <li><a href="17318">蓭</a></li>
                                        <li><a href="9610">蓺</a></li>
                                        <li><a href="17319">蓵</a></li>
                                        <li><a href="9611">蔲</a></li>
                                        <li><a href="17320">蓶</a></li>
                                        <li><a href="7275">蔴</a></li>
                                        <li><a href="9612">蔜</a></li>
                                        <li><a href="17321">蓸</a></li>
                                        <li><a href="9613">蔛</a></li>
                                        <li><a href="9614">蓰</a></li>
                                        <li><a href="17323">蓾</a></li>
                                        <li><a href="9615">蓻</a></li>
                                        <li><a href="17324">蔁</a></li>
                                        <li><a href="9616">蔠</a></li>
                                        <li><a href="17325">蔄</a></li>
                                        <li><a href="22038">䕄</a></li>
                                        <li><a href="24121">蓫</a></li>
                                        <li><a href="24122">蔒</a></li>
                                        <li><a href="24309">䔏</a></li>
                                        <li><a href="24310">䔤</a></li>
                                        <li><a href="26498">蓠</a></li>
                                        <li><a href="26499">蓢</a></li>
                                        <li><a href="26504">蔷</a></li>
                                        <li><a href="26505">蔸</a></li>
                                        <li><a href="27551">䔫</a></li>
                                        <li><a href="27552">䔩</a></li>
                                        <li><a href="27553">䔨</a></li>
                                        <li><a href="27554">䔦</a></li>
                                        <li><a href="27690">蓮</a></li>
                                        <li><a href="27743">𦹀</a></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts15">
                                   <h3 class="ttl_while"><a href="kakusu15">１５画</a></h3>
                                   <ul class="search_parts">
                                        <li><a class="color1" href="2097">蔽</a>
                                        </li>
                                        <li><a href="17340">蕂</a></li>
                                        <li><a href="17341">蕄</a></li>
                                        <li><a href="17342">蕅</a></li>
                                        <li><a href="17343">蕇</a></li>
                                        <li><a href="17344">蕌</a></li>
                                        <li><a href="17345">蕍</a></li>
                                        <li><a href="17346">蕔</a></li>
                                        <li><a href="9638">蔿</a></li>
                                        <li><a href="17347">蕛</a></li>
                                        <li><a href="9639">蕓</a></li>
                                        <li><a href="17348">蕥</a></li>
                                        <li><a href="9640">蕑</a></li>
                                        <li><a href="17349">蕦</a></li>
                                        <li><a href="9641">蕳</a></li>
                                        <li><a href="17350">蕧</a></li>
                                        <li><a class="color2" href="2323">蕎</a>
                                        </li>
                                        <li><a href="9642">䕀</a></li>
                                        <li><a href="17351">蕮</a></li>
                                        <li><a href="9643">蕢</a></li>
                                        <li><a href="9644">蕖</a></li>
                                        <li><a class="color2" href="2360">蕨</a>
                                        </li>
                                        <li><a href="9645">蕙</a></li>
                                        <li><a href="9646">蕞</a></li>
                                        <li><a href="9648">蕠</a></li>
                                        <li><a href="9649">蕤</a></li>
                                        <li><a href="9650">蕝</a></li>
                                        <li><a href="9651">蕏</a></li>
                                        <li><a href="9652">蕆</a></li>
                                        <li><a href="9653">蕫</a></li>
                                        <li><a href="9654">蕟</a></li>
                                        <li><a href="9655">蕒</a></li>
                                        <li><a href="9656">蕜</a></li>
                                        <li><a href="9657">蔾</a></li>
                                        <li><a class="color2" href="2572">蕉</a>
                                        </li>
                                        <li><a href="2621">蕊</a></li>
                                        <li><a href="2622">蕋</a></li>
                                        <li><a href="9679">蕡</a></li>
                                        <li><a href="2799">蕩</a></li>
                                        <li><a class="color2" href="2844">蕃</a>
                                        </li>
                                        <li><a href="9689">蕯</a></li>
                                        <li><a class="color2" href="2882">蕪</a>
                                        </li>
                                        <li><a href="9461">蕐</a></li>
                                        <li><a href="22011">䔝</a></li>
                                        <li><a href="5411">蔬</a></li>
                                        <li><a href="5412">蕘</a></li>
                                        <li><a href="5413">蕕</a></li>
                                        <li><a href="5415">蕁</a></li>
                                        <li><a href="5416">蕈</a></li>
                                        <li><a href="5417">蕀</a></li>
                                        <li><a href="22021">䔭</a></li>
                                        <li><a href="22022">䔮</a></li>
                                        <li><a href="22023">䔯</a></li>
                                        <li><a href="22024">䔰</a></li>
                                        <li><a href="22025">䔱</a></li>
                                        <li><a href="22026">䔲</a></li>
                                        <li><a href="22027">䔳</a></li>
                                        <li><a href="22028">䔴</a></li>
                                        <li><a href="22029">䔶</a></li>
                                        <li><a href="22030">䔷</a></li>
                                        <li><a href="22031">䔸</a></li>
                                        <li><a href="22032">䔹</a></li>
                                        <li><a href="22033">䔺</a></li>
                                        <li><a href="22034">䔽</a></li>
                                        <li><a href="22035">䔾</a></li>
                                        <li><a href="22036">䔿</a></li>
                                        <li><a href="22037">䕁</a></li>
                                        <li><a class="color1" href="934">蔵</a></li>
                                        <li><a href="9601">蓏</a></li>
                                        <li><a href="6301">蕚</a></li>
                                        <li><a href="9604">䕃</a></li>
                                        <li><a href="17322">蓹</a></li>
                                        <li><a href="24123">蕬</a></li>
                                        <li><a href="24124">蕰</a></li>
                                        <li><a href="24311">䔵</a></li>
                                        <li><a href="24312">䔻</a></li>
                                        <li><a href="26509">蕱</a></li>
                                        <li><a href="26511">蕴</a></li>
                                        <li><a href="26513">蕵</a></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts16">
                                   <h3 class="ttl_while"><a href="kakusu16">１６画</a></h3>
                                   <ul class="search_parts">
                                        <li><a class="color2" href="2189">薗</a>
                                        </li>
                                        <li><a href="9633">薎</a></li>
                                        <li><a href="17352">蕶</a></li>
                                        <li><a href="17353">薂</a></li>
                                        <li><a href="17354">薃</a></li>
                                        <li><a href="17355">薍</a></li>
                                        <li><a href="17356">薒</a></li>
                                        <li><a href="17357">薚</a></li>
                                        <li><a href="17358">薞</a></li>
                                        <li><a href="17359">薡</a></li>
                                        <li><a href="17360">薣</a></li>
                                        <li><a href="9658">薆</a></li>
                                        <li><a href="9659">薁</a></li>
                                        <li><a href="9660">蕸</a></li>
                                        <li><a href="9661">薖</a></li>
                                        <li><a href="9662">薢</a></li>
                                        <li><a href="9663">薌</a></li>
                                        <li><a href="9665">蕻</a></li>
                                        <li><a href="9666">薧</a></li>
                                        <li><a href="9667">薅</a></li>
                                        <li><a href="9668">蕼</a></li>
                                        <li><a href="9669">薋</a></li>
                                        <li><a href="9670">蕺</a></li>
                                        <li><a href="9672">薥</a></li>
                                        <li><a href="2671">薮</a></li>
                                        <li><a href="9673">薓</a></li>
                                        <li><a href="9674">薝</a></li>
                                        <li><a class="color2" href="2720">薙</a>
                                        </li>
                                        <li><a href="9675">薘</a></li>
                                        <li><a href="9676">蕽</a></li>
                                        <li><a href="9677">薠</a></li>
                                        <li><a href="9678">薭</a></li>
                                        <li><a href="9680">蕹</a></li>
                                        <li><a href="9681">薏</a></li>
                                        <li><a href="9682">薟</a></li>
                                        <li><a href="9683">﨟</a></li>
                                        <li><a href="9684">薉</a></li>
                                        <li><a href="9701">藇</a></li>
                                        <li><a class="color2" href="3012">蕗</a>
                                        </li>
                                        <li><a href="9539">蕿</a></li>
                                        <li><a href="5414">蕣</a></li>
                                        <li><a href="5418">薊</a></li>
                                        <li><a href="5419">蕷</a></li>
                                        <li><a class="color2" href="5420">蕾</a>
                                        </li>
                                        <li><a href="5421">薔</a></li>
                                        <li><a href="5422">薨</a></li>
                                        <li><a href="5423">薀</a></li>
                                        <li><a href="5424">薑</a></li>
                                        <li><a href="5425">薜</a></li>
                                        <li><a href="5426">薛</a></li>
                                        <li><a href="5427">薈</a></li>
                                        <li><a href="5428">薇</a></li>
                                        <li><a href="5429">薐</a></li>
                                        <li><a href="5430">薤</a></li>
                                        <li><a href="5431">蕭</a></li>
                                        <li><a class="color1" href="kanji/418">薬</a></li>
                                        <li><a class="color1" href="1154">薪</a>
                                        </li>
                                        <li><a class="color1" href="1230">薄</a>
                                        </li>
                                        <li><a class="color1" href="1667">薫</a>
                                        </li>
                                        <li><a class="color1" href="1783">薦</a>
                                        </li>
                                        <li><a href="22039">䕅</a></li>
                                        <li><a href="22040">䕆</a></li>
                                        <li><a href="22041">䕇</a></li>
                                        <li><a href="22042">䕈</a></li>
                                        <li><a href="22043">䕉</a></li>
                                        <li><a href="22044">䕊</a></li>
                                        <li><a href="22045">䕋</a></li>
                                        <li><a href="22046">䕍</a></li>
                                        <li><a href="22047">䕎</a></li>
                                        <li><a href="22048">䕏</a></li>
                                        <li><a href="22049">䕑</a></li>
                                        <li><a href="24125">薕</a></li>
                                        <li><a href="24399">䕌</a></li>
                                        <li><a href="26193">龩</a></li>
                                        <li><a href="26510">蕲</a></li>
                                        <li><a href="27550">䕂</a></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts17">
                                   <h3 class="ttl_while"><a href="kakusu17">１７画</a></h3>
                                   <ul class="search_parts">
                                        <li><a class="color2" href="2412">藁</a>
                                        </li>
                                        <li><a class="color2" href="2451">薩</a>
                                        </li>
                                        <li><a href="17361">藀</a></li>
                                        <li><a href="17362">藃</a></li>
                                        <li><a href="17363">藄</a></li>
                                        <li><a href="2545">薯</a></li>
                                        <li><a href="17364">藅</a></li>
                                        <li><a href="17365">藆</a></li>
                                        <li><a href="17366">藈</a></li>
                                        <li><a href="17367">藌</a></li>
                                        <li><a href="17368">藒</a></li>
                                        <li><a href="9685">薳</a></li>
                                        <li><a href="9686">薿</a></li>
                                        <li><a href="9687">藑</a></li>
                                        <li><a href="9690">薾</a></li>
                                        <li><a href="9691">薷</a></li>
                                        <li><a href="9692">薽</a></li>
                                        <li><a href="9693">藎</a></li>
                                        <li><a href="9695">薱</a></li>
                                        <li><a href="9696">藋</a></li>
                                        <li><a href="9697">薼</a></li>
                                        <li><a href="9698">薴</a></li>
                                        <li><a href="9699">薸</a></li>
                                        <li><a href="9700">藊</a></li>
                                        <li><a href="9717">薻</a></li>
                                        <li><a href="9720">薲</a></li>
                                        <li><a href="5432">藉</a></li>
                                        <li><a href="5433">薹</a></li>
                                        <li><a href="5434">薺</a></li>
                                        <li><a href="5435">藐</a></li>
                                        <li><a class="color2" href="6426">薰</a>
                                        </li>
                                        <li><a href="22050">䕒</a></li>
                                        <li><a href="22051">䕓</a></li>
                                        <li><a href="22052">䕔</a></li>
                                        <li><a href="22053">䕖</a></li>
                                        <li><a href="22054">䕗</a></li>
                                        <li><a href="22055">䕘</a></li>
                                        <li><a href="22056">䕙</a></li>
                                        <li><a href="22057">䕚</a></li>
                                        <li><a href="22058">䕛</a></li>
                                        <li><a href="22059">䕝</a></li>
                                        <li><a href="22063">䕣</a></li>
                                        <li><a href="24126">薵</a></li>
                                        <li><a href="24127">薶</a></li>
                                        <li><a href="24128">藂</a></li>
                                        <li><a href="24313">䔼</a></li>
                                        <li><a href="27547">䕜</a></li>
                                        <li><a href="27548">䕕</a></li>
                                        <li><a href="27549">䕐</a></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts18">
                                   <h3 class="ttl_while"><a href="kakusu18">１８画</a></h3>
                                   <ul class="search_parts">
                                        <li><a class="color1" href="2071">藤</a>
                                        </li>
                                        <li><a class="color1" href="2122">藍</a>
                                        </li>
                                        <li><a href="17370">藗</a></li>
                                        <li><a href="17371">藛</a></li>
                                        <li><a href="17372">藢</a></li>
                                        <li><a href="17373">藣</a></li>
                                        <li><a href="17374">藧</a></li>
                                        <li><a href="17375">藫</a></li>
                                        <li><a href="17376">藬</a></li>
                                        <li><a href="17378">藯</a></li>
                                        <li><a href="17379">藰</a></li>
                                        <li><a href="2670">藪</a></li>
                                        <li><a href="17380">藱</a></li>
                                        <li><a href="9688">藳</a></li>
                                        <li><a href="9702">藙</a></li>
                                        <li><a href="9703">藭</a></li>
                                        <li><a href="9704">藠</a></li>
                                        <li><a href="9705">藚</a></li>
                                        <li><a href="9707">藨</a></li>
                                        <li><a href="9708">藦</a></li>
                                        <li><a href="9709">藘</a></li>
                                        <li><a href="9710">䕡</a></li>
                                        <li><a href="9711">藟</a></li>
                                        <li><a href="9483">藡</a></li>
                                        <li><a href="5436">藕</a></li>
                                        <li><a href="5437">藜</a></li>
                                        <li><a class="color2" href="5784">藝</a>
                                        </li>
                                        <li><a class="color2" href="5785">藥</a>
                                        </li>
                                        <li><a class="color2" href="5984">藏</a>
                                        </li>
                                        <li><a class="color1" href="1533">藩</a>
                                        </li>
                                        <li><a href="22061">䕠</a></li>
                                        <li><a href="22062">䕢</a></li>
                                        <li><a href="22064">䕤</a></li>
                                        <li><a href="22065">䕥</a></li>
                                        <li><a href="24129">藴</a></li>
                                        <li><a href="24314">䕞</a></li>
                                        <li><a href="26514">藔</a></li>
                                        <li><a href="26515">藞</a></li>
                                        <li><a href="26516">藲</a></li>
                                        <li><a href="26517">藵</a></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts19">
                                   <h3 class="ttl_while"><a href="kakusu19">１９画</a></h3>
                                   <ul class="search_parts">
                                        <li><a class="color1" href="1797">藻</a>
                                        </li>
                                        <li><a href="2546">藷</a></li>
                                        <li><a href="17369">藖</a></li>
                                        <li><a class="color2" href="2610">蘇</a>
                                        </li>
                                        <li><a href="9664">蘍</a></li>
                                        <li><a href="2623">蘂</a></li>
                                        <li><a href="17377">藮</a></li>
                                        <li><a href="17381">藸</a></li>
                                        <li><a href="17382">藽</a></li>
                                        <li><a href="17383">蘃</a></li>
                                        <li><a href="17384">蘈</a></li>
                                        <li><a href="17386">蘏</a></li>
                                        <li><a class="color2" href="2965">蘭</a>
                                        </li>
                                        <li><a href="9706">䕨</a></li>
                                        <li><a href="9713">藿</a></li>
                                        <li><a href="9714">蘄</a></li>
                                        <li><a href="9715">蘁</a></li>
                                        <li><a href="9716">蘅</a></li>
                                        <li><a href="9718">蘀</a></li>
                                        <li><a href="9719">蘑</a></li>
                                        <li><a href="9721">蘉</a></li>
                                        <li><a href="9722">䕲</a></li>
                                        <li><a href="9723">藶</a></li>
                                        <li><a href="9745">蘒</a></li>
                                        <li><a href="9540">藼</a></li>
                                        <li><a href="9541">蘐</a></li>
                                        <li><a href="5438">蘊</a></li>
                                        <li><a href="5439">藾</a></li>
                                        <li><a href="5440">蘢</a></li>
                                        <li><a href="5441">藺</a></li>
                                        <li><a href="5442">藹</a></li>
                                        <li><a href="5443">蘋</a></li>
                                        <li><a href="5444">蘆</a></li>
                                        <li><a href="5983">蘓</a></li>
                                        <li><a href="6779">蘎</a></li>
                                        <li><a href="22060">䕟</a></li>
                                        <li><a href="22066">䕦</a></li>
                                        <li><a href="22067">䕧</a></li>
                                        <li><a href="22068">䕩</a></li>
                                        <li><a href="22069">䕪</a></li>
                                        <li><a href="22071">䕬</a></li>
                                        <li><a href="22072">䕭</a></li>
                                        <li><a href="22073">䕮</a></li>
                                        <li><a href="22075">䕰</a></li>
                                        <li><a href="22076">䕱</a></li>
                                        <li><a href="26518">蘔</a></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts20">
                                   <h3 class="ttl_while"><a href="kakusu20">２０画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="17385">蘌</a></li>
                                        <li><a href="17387">蘕</a></li>
                                        <li><a href="17388">蘟</a></li>
                                        <li><a href="17389">蘠</a></li>
                                        <li><a href="17390">蘣</a></li>
                                        <li><a href="17391">蘥</a></li>
                                        <li><a href="17392">蘨</a></li>
                                        <li><a href="17393">蘪</a></li>
                                        <li><a href="17396">蘮</a></li>
                                        <li><a href="4194">蘗</a></li>
                                        <li><a href="4209">蘖</a></li>
                                        <li><a href="9724">蘛</a></li>
                                        <li><a href="9725">蘡</a></li>
                                        <li><a href="9726">蘙</a></li>
                                        <li><a href="9727">蘤</a></li>
                                        <li><a href="9728">蘧</a></li>
                                        <li><a href="9729">蘘</a></li>
                                        <li><a href="9730">蘩</a></li>
                                        <li><a href="9731">䕷</a></li>
                                        <li><a href="9732">蘦</a></li>
                                        <li><a href="9733">蘞</a></li>
                                        <li><a href="9500">蘜</a></li>
                                        <li><a href="5446">蘚</a></li>
                                        <li><a href="5570">蘯</a></li>
                                        <li><a href="5982">蘰</a></li>
                                        <li><a href="22070">䕫</a></li>
                                        <li><a href="22074">䕯</a></li>
                                        <li><a href="22077">䕳</a></li>
                                        <li><a href="22078">䕴</a></li>
                                        <li><a href="22079">䕵</a></li>
                                        <li><a href="24315">䕶</a></li>
                                        <li><a href="26521">蘝</a></li>
                                        <li><a href="27689">蘭</a></li>
                                        <li><a href="27744">𧃴</a></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts21">
                                   <h3 class="ttl_while"><a href="kakusu21">２１画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="17394">蘫</a></li>
                                        <li><a href="17395">蘬</a></li>
                                        <li><a href="17398">蘲</a></li>
                                        <li><a href="17399">蘳</a></li>
                                        <li><a href="17400">蘴</a></li>
                                        <li><a href="17401">蘵</a></li>
                                        <li><a href="9734">蘶</a></li>
                                        <li><a href="22080">䕸</a></li>
                                        <li><a href="22081">䕹</a></li>
                                        <li><a href="24316">䕺</a></li>
                                        <li><a href="26524">蘷</a></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts22">
                                   <h3 class="ttl_while"><a href="kakusu22">２２画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="17397">蘱</a></li>
                                        <li><a href="17402">蘻</a></li>
                                        <li><a href="17403">蘾</a></li>
                                        <li><a href="9712">蘽</a></li>
                                        <li><a href="9735">蘹</a></li>
                                        <li><a href="9736">蘸</a></li>
                                        <li><a href="9737">蘼</a></li>
                                        <li><a href="9738">蘺</a></li>
                                        <li><a href="5447">蘿</a></li>
                                        <li><a href="6659">虀</a></li>
                                        <li><a href="22082">䕻</a></li>
                                        <li><a href="22083">䕼</a></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts23">
                                   <h3 class="ttl_while"><a href="kakusu23">２３画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="17404">虃</a></li>
                                        <li><a href="17405">虇</a></li>
                                        <li><a href="22084">䕽</a></li>
                                        <li><a href="24317">䕾</a></li>
                                        <li><a href="24387">虁</a></li>
                                        <li><a href="26525">虄</a></li>
                                        <li><a href="26526">虅</a></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts24">
                                   <h3 class="ttl_while"><a href="kakusu24">２４画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="9739">虈</a></li>
                                        <li><a href="9740">䖀</a></li>
                                        <li><a href="9741">虉</a></li>
                                        <li><a href="9742">虆</a></li>
                                        <li><a href="9743">虂</a></li>
                                        <li><a href="9744">蘒</a></li>
                                        <li><a href="22088">䖃</a></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts25">
                                   <h3 class="ttl_while"><a href="kakusu25">２５画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="22085">䕿</a></li>
                                        <li><a href="22086">䖁</a></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts26">
                                   <h3 class="ttl_while"><a href="kakusu26">２６画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="17406">虊</a></li>
                                        <li><a href="22087">䖂</a></li>
                                        <li><a href="27546">䖄</a></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts27">
                                   <h3 class="ttl_while"><a href="kakusu27">２７画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="22089">䖅</a></li>
                                        <li><a href="22090">䖆</a></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts28">
                                   <h3 class="ttl_while"><a href="kakusu28">２８画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="17407">虌</a></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts29">
                                   <h3 class="ttl_while"><a href="kakusu29">２９画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="24388">虋</a></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts32">
                                   <h3 class="ttl_while"><a href="kakusu32">３２画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="24318">䖇</a></li>
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
                                             <option value="radical140">English</option>
                                             <option value="bushu06001">Japanese</option>
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

<!-- Mirrored from bushu06001 by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Nov 2023 00:40:16 GMT -->

</html>