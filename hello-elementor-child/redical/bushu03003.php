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
                    <h1 class="ttl_main">部首：口部（くち・くちへん）の漢字</h1>

                    <div class="bushu_about">
                         <div class="bushu_about_box">
                              <h2>口部とは？</h2>
                              <p><strong>口部（こうぶ）は、<span
                                             class="marker">食べる、飲む、声や息を出すなど口や口の働きに関する字</span>が多く属します。</strong>「口」は「くち」、偏になった形を「くちへん」と呼びます。
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
                                        <option value="#" selected>口（くち・くちへん）</option>
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
                                   <li><a href="bbushu03003">漢検級順</a></li>
                                   <li><a href="cbushu03003">読み順</a></li>
                              </ul>
                              <ul class="search_menu2">
                                   <li><a href="#parts03">3画</a></li>
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
                                   <li><a href="#parts28">28画</a></li>
                              </ul>
                         </div><!--search_data-->
                        
                         <h2 class="left_border">部首：口部（くち・くちへん）の漢字一覧</h2>
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
                                        <li><a class="color1" href="kanji/020">口</a></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts05">
                                   <h3 class="ttl_while"><a href="kakusu05">５画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="3218">叮</a></li>
                                        <li><a href="3219">叨</a></li>
                                        <li><a href="3220">叭</a></li>
                                        <li><a href="3221">叺</a></li>
                                        <li><a href="kanjiy/18877">㕣</a></li>
                                        <li><a href="kanjiy/18878">㕤</a></li>
                                        <li><a href="kanjiy/18879">㕥</a></li>
                                        <li><a class="color1" href="kanjiy/27700">𠮟</a>
                                        </li>
                                        <li><a href="kanjiy/12700">叧</a></li>
                                        <li><a href="kanjiy/13218">另</a></li>
                                        <li><a href="kanjiy/13219">叴</a></li>
                                        <li><a href="kanjiy/13220">叵</a></li>
                                        <li><a href="kanjiy/13221">叹</a></li>
                                        <li><a href="kanjiy/13222">叻</a></li>
                                        <li><a href="kanjiy/13223">叼</a></li>
                                        <li><a class="color1" href="kanji/076">右</a></li>
                                        <li><a class="color1" href="kanji/121">古</a></li>
                                        <li><a class="color1" href="kanji/183">台</a></li>
                                        <li><a class="color1" href="kanji/296">号</a></li>
                                        <li><a class="color1" href="520">史</a></li>
                                        <li><a class="color1" href="523">司</a></li>
                                        <li><a class="color1" href="656">可</a></li>
                                        <li><a class="color1" href="682">句</a></li>
                                        <li><a class="color1" href="1138">召</a>
                                        </li>
                                        <li><a href="kanjiy/24777">叽</a></li>
                                        <li><a href="kanjiy/24778">叾</a></li>
                                        <li><a class="color1" href="2019">叱</a>
                                        </li>
                                        <li><a class="color2" href="2318">叶</a>
                                        </li>
                                        <li><a href="2394">叩</a></li>
                                        <li><a class="color2" href="2464">只</a>
                                        </li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts06">
                                   <h3 class="ttl_while"><a href="kakusu06">６画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="3222">吁</a></li>
                                        <li><a href="kanjiy/18880">㕦</a></li>
                                        <li><a href="kanjiy/18881">㕧</a></li>
                                        <li><a href="kanjiy/18882">㕨</a></li>
                                        <li><a href="kanjiy/12396">吕</a></li>
                                        <li><a class="color1" href="kanji/072">名</a></li>
                                        <li><a href="kanjiy/13224">叿</a></li>
                                        <li><a href="kanjiy/13225">吀</a></li>
                                        <li><a class="color1" href="kanji/135">合</a></li>
                                        <li><a href="kanjiy/13226">吂</a></li>
                                        <li><a href="kanjiy/13227">吅</a></li>
                                        <li><a class="color1" href="kanji/204">同</a></li>
                                        <li><a href="kanjiy/13228">吆</a></li>
                                        <li><a href="kanjiy/13229">吇</a></li>
                                        <li><a href="kanjiy/13230">吒</a></li>
                                        <li><a class="color1" href="kanji/294">向</a></li>
                                        <li><a href="kanjiy/13231">吓</a></li>
                                        <li><a href="kanjiy/13232">吔</a></li>
                                        <li><a class="color1" href="kanji/462">各</a></li>
                                        <li><a class="color1" href="847">吸</a></li>
                                        <li><a class="color1" href="869">后</a></li>
                                        <li><a class="color1" href="1068">叫</a>
                                        </li>
                                        <li><a class="color1" href="1202">吐</a>
                                        </li>
                                        <li><a class="color1" href="1368">吉</a>
                                        </li>
                                        <li><a class="color1" href="1586">吏</a>
                                        </li>
                                        <li><a href="kanjiy/24779">吖</a></li>
                                        <li><a href="2292">吃</a></li>
                                        <li><a href="2625">吋</a></li>
                                        <li><a href="2733">吊</a></li>
                                   </ul>
                              </div>
                         
                              <div class="parts_box" id="parts07">
                                   <h3 class="ttl_while"><a href="kakusu07">７画</a></h3>
                                   <ul class="search_parts">
                                        <li><a class="color2" href="2888">吻</a>
                                        </li>
                                        <li><a href="3223">吽</a></li>
                                        <li><a href="3224">听</a></li>
                                        <li><a href="3225">吭</a></li>
                                        <li><a href="3226">吼</a></li>
                                        <li><a href="3227">吮</a></li>
                                        <li><a href="3228">吶</a></li>
                                        <li><a href="3229">吩</a></li>
                                        <li><a href="3230">吝</a></li>
                                        <li><a href="3231">呎</a></li>
                                        <li><a href="kanjiy/18883">㕩</a></li>
                                        <li><a href="kanjiy/18884">㕪</a></li>
                                        <li><a href="kanjiy/18885">㕫</a></li>
                                        <li><a href="kanjiy/18886">㕬</a></li>
                                        <li><a href="kanjiy/18887">㕭</a></li>
                                        <li><a href="kanjiy/18888">㕮</a></li>
                                        <li><a href="kanjiy/18889">㕰</a></li>
                                        <li><a href="kanjiy/18890">㕱</a></li>
                                        <li><a href="kanjiy/18891">㕲</a></li>
                                        <li><a href="kanjiy/18892">㕳</a></li>
                                        <li><a href="kanjiy/18893">㕴</a></li>
                                        <li><a href="kanjiy/18894">㕵</a></li>
                                        <li><a href="kanjiy/18895">㕶</a></li>
                                        <li><a href="5796">呀</a></li>
                                        <li><a class="color2" href="6433">吞</a>
                                        </li>
                                        <li><a href="kanjiy/12355">呏</a></li>
                                        <li><a class="color1" href="kanji/283">君</a></li>
                                        <li><a href="kanjiy/13233">吘</a></li>
                                        <li><a href="kanjiy/13234">吙</a></li>
                                        <li><a href="kanjiy/13235">吚</a></li>
                                        <li><a href="kanjiy/13236">吜</a></li>
                                        <li><a href="kanjiy/13237">吡</a></li>
                                        <li><a href="kanjiy/13238">吢</a></li>
                                        <li><a href="kanjiy/13239">吣</a></li>
                                        <li><a href="kanjiy/13240">吤</a></li>
                                        <li><a href="kanjiy/13241">吥</a></li>
                                        <li><a class="color1" href="505">告</a></li>
                                        <li><a href="kanjiy/13242">吧</a></li>
                                        <li><a href="kanjiy/13243">吨</a></li>
                                        <li><a href="kanjiy/13244">吪</a></li>
                                        <li><a href="kanjiy/13245">启</a></li>
                                        <li><a href="kanjiy/13246">吰</a></li>
                                        <li><a href="kanjiy/13247">吱</a></li>
                                        <li><a href="kanjiy/13248">吲</a></li>
                                        <li><a href="kanjiy/13249">吳</a></li>
                                        <li><a href="kanjiy/13250">吴</a></li>
                                        <li><a href="kanjiy/13251">吵</a></li>
                                        <li><a href="kanjiy/13252">吷</a></li>
                                        <li><a href="kanjiy/13253">吺</a></li>
                                        <li><a class="color1" href="970">否</a></li>
                                        <li><a href="kanjiy/13254">吿</a></li>
                                        <li><a class="color1" href="1046">含</a>
                                        </li>
                                        <li><a href="kanjiy/13255">呁</a></li>
                                        <li><a href="kanjiy/13256">呃</a></li>
                                        <li><a href="kanjiy/13257">呄</a></li>
                                        <li><a href="kanjiy/13258">呅</a></li>
                                        <li><a class="color1" href="1158">吹</a>
                                        </li>
                                        <li><a href="kanjiy/13259">呇</a></li>
                                        <li><a href="kanjiy/13260">呋</a></li>
                                        <li><a href="kanjiy/13261">呌</a></li>
                                        <li><a href="kanjiy/13262">呍</a></li>
                                        <li><a href="kanjiy/13263">呐</a></li>
                                        <li><a href="kanjiy/13264">呕</a></li>
                                        <li><a href="kanjiy/13265">呚</a></li>
                                        <li><a href="kanjiy/24196">㕯</a></li>
                                        <li><a href="kanjiy/24780">呒</a></li>
                                        <li><a class="color1" href="1665">吟</a>
                                        </li>
                                        <li><a href="kanjiy/24781">呓</a></li>
                                        <li><a class="color1" href="1681">呉</a>
                                        </li>
                                        <li><a href="kanjiy/24782">呔</a></li>
                                        <li><a href="kanjiy/24783">呖</a></li>
                                        <li><a href="kanjiy/24784">呙</a></li>
                                        <li><a href="kanjiy/24785">呛</a></li>
                                        <li><a class="color1" href="1829">呈</a>
                                        </li>
                                        <li><a class="color1" href="2128">呂</a>
                                        </li>
                                        <li><a class="color2" href="2388">吾</a>
                                        </li>
                                        <li><a href="2688">呆</a></li>
                                        <li><a href="2805">呑</a></li>
                                        <li><a href="2818">吠</a></li>
                                   </ul>
                              </div>
                         
                              <div class="parts_box" id="parts08">
                                   <h3 class="ttl_while"><a href="kakusu08">８画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="3027">咒</a></li>
                                        <li><a href="3232">咏</a></li>
                                        <li><a href="3233">呵</a></li>
                                        <li><a href="3234">咎</a></li>
                                        <li><a href="3235">呟</a></li>
                                        <li><a href="3237">呷</a></li>
                                        <li><a href="3239">呻</a></li>
                                        <li><a href="3240">咀</a></li>
                                        <li><a href="3241">呶</a></li>
                                        <li><a href="3242">咄</a></li>
                                        <li><a href="3243">咐</a></li>
                                        <li><a href="3244">咆</a></li>
                                        <li><a href="kanjiy/26519">㕷</a></li>
                                        <li><a href="kanjiy/26520">㕿</a></li>
                                        <li><a href="kanjiy/18896">㕸</a></li>
                                        <li><a href="kanjiy/18897">㕹</a></li>
                                        <li><a href="kanjiy/18898">㕺</a></li>
                                        <li><a href="kanjiy/18899">㕻</a></li>
                                        <li><a href="kanjiy/18900">㕼</a></li>
                                        <li><a href="kanjiy/18901">㕽</a></li>
                                        <li><a href="kanjiy/18902">㕾</a></li>
                                        <li><a href="6069">咋</a></li>
                                        <li><a href="8114">呧</a></li>
                                        <li><a class="color1" href="kanji/414">味</a></li>
                                        <li><a class="color1" href="kanji/415">命</a></li>
                                        <li><a class="color1" href="kanji/439">和</a></li>
                                        <li><a href="kanjiy/23898">咅</a></li>
                                        <li><a href="kanjiy/23900">哎</a></li>
                                        <li><a class="color1" href="530">周</a></li>
                                        <li><a class="color1" href="865">呼</a></li>
                                        <li><a href="kanjiy/13266">呝</a></li>
                                        <li><a href="kanjiy/13267">呞</a></li>
                                        <li><a href="kanjiy/13268">呠</a></li>
                                        <li><a href="kanjiy/13269">呡</a></li>
                                        <li><a href="kanjiy/13270">呢</a></li>
                                        <li><a href="kanjiy/13271">呣</a></li>
                                        <li><a href="kanjiy/13272">呤</a></li>
                                        <li><a href="kanjiy/13273">呥</a></li>
                                        <li><a href="kanjiy/13274">呦</a></li>
                                        <li><a href="kanjiy/13275">呩</a></li>
                                        <li><a href="kanjiy/13276">呫</a></li>
                                        <li><a href="kanjiy/13277">呬</a></li>
                                        <li><a href="kanjiy/13278">呭</a></li>
                                        <li><a href="kanjiy/13279">呮</a></li>
                                        <li><a href="kanjiy/24787">咗</a></li>
                                        <li><a href="kanjiy/13280">呯</a></li>
                                        <li><a href="kanjiy/24788">咘</a></li>
                                        <li><a href="kanjiy/24789">咚</a></li>
                                        <li><a href="kanjiy/13282">呴</a></li>
                                        <li><a href="kanjiy/24790">咛</a></li>
                                        <li><a href="kanjiy/13283">呸</a></li>
                                        <li><a href="kanjiy/24791">咝</a></li>
                                        <li><a href="kanjiy/13284">呹</a></li>
                                        <li><a href="kanjiy/13285">呺</a></li>
                                        <li><a href="kanjiy/13286">呾</a></li>
                                        <li><a class="color1" href="2022">呪</a>
                                        </li>
                                        <li><a href="kanjiy/13287">呿</a></li>
                                        <li><a href="kanjiy/13288">咁</a></li>
                                        <li><a href="kanjiy/13289">咂</a></li>
                                        <li><a href="kanjiy/13290">咃</a></li>
                                        <li><a href="kanjiy/13291">咇</a></li>
                                        <li><a href="kanjiy/13292">咈</a></li>
                                        <li><a href="kanjiy/13293">咉</a></li>
                                        <li><a href="kanjiy/13294">咊</a></li>
                                        <li><a href="kanjiy/13295">咍</a></li>
                                        <li><a href="kanjiy/13296">咑</a></li>
                                        <li><a href="kanjiy/13297">咓</a></li>
                                        <li><a href="kanjiy/13298">咔</a></li>
                                        <li><a href="kanjiy/13299">咕</a></li>
                                        <li><a href="kanjiy/13300">咖</a></li>
                                        <li><a href="kanjiy/13301">咜</a></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts09">
                                   <h3 class="ttl_while"><a href="kakusu09">９画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="kanjiy/13321">咿</a></li>
                                        <li><a href="kanjiy/13322">哃</a></li>
                                        <li><a href="kanjiy/13323">哅</a></li>
                                        <li><a href="kanjiy/13324">哆</a></li>
                                        <li><a href="kanjiy/13325">哊</a></li>
                                        <li><a href="kanjiy/13326">哋</a></li>
                                        <li><a href="kanjiy/13327">哏</a></li>
                                        <li><a href="kanjiy/13328">哙</a></li>
                                        <li><a href="kanjiy/13329">哛</a></li>
                                        <li><a href="3236">呱</a></li>
                                        <li><a href="3238">呰</a></li>
                                        <li><a href="3245">哇</a></li>
                                        <li><a href="3246">咢</a></li>
                                        <li><a href="3247">咸</a></li>
                                        <li><a href="3248">咥</a></li>
                                        <li><a href="3249">咬</a></li>
                                        <li><a href="3250">哄</a></li>
                                        <li><a href="3251">哈</a></li>
                                        <li><a href="kanjiy/26522">㖈</a></li>
                                        <li><a href="3252">咨</a></li>
                                        <li><a href="kanjiy/26523">㖉</a></li>
                                        <li><a href="3253">咫</a></li>
                                        <li><a href="kanjiy/26528">㖊</a></li>
                                        <li><a href="3254">哂</a></li>
                                        <li><a href="3255">咤</a></li>
                                        <li><a href="kanjiy/18903">㖀</a></li>
                                        <li><a href="kanjiy/18904">㖁</a></li>
                                        <li><a href="kanjiy/18905">㖂</a></li>
                                        <li><a href="kanjiy/18906">㖃</a></li>
                                        <li><a href="kanjiy/18907">㖄</a></li>
                                        <li><a href="kanjiy/18908">㖅</a></li>
                                        <li><a href="kanjiy/18909">㖆</a></li>
                                        <li><a href="kanjiy/18910">㖇</a></li>
                                        <li><a href="kanjiy/18911">㖋</a></li>
                                        <li><a href="kanjiy/18912">㖌</a></li>
                                        <li><a href="kanjiy/18913">㖍</a></li>
                                        <li><a href="kanjiy/18914">㖎</a></li>
                                        <li><a href="kanjiy/27581">䎛</a></li>
                                        <li><a href="kanjiy/27723">𠱰</a></li>
                                        <li><a href="5797">咾</a></li>
                                        <li><a href="6052">咼</a></li>
                                        <li><a href="6053">哘</a></li>
                                        <li><a href="6056">咯</a></li>
                                        <li><a href="7369">响</a></li>
                                        <li><a class="color1" href="kanji/404">品</a></li>
                                        <li><a href="kanjiy/23899">咞</a></li>
                                        <li><a class="color1" href="1110">咲</a>
                                        </li>
                                        <li><a class="color1" href="1320">哀</a>
                                        </li>
                                        <li><a href="kanjiy/13281">呲</a></li>
                                        <li><a class="color1" href="1947">咽</a>
                                        </li>
                                        <li><a href="kanjiy/24793">哌</a></li>
                                        <li><a href="kanjiy/24794">哐</a></li>
                                        <li><a href="kanjiy/24798">哔</a></li>
                                        <li><a href="kanjiy/24799">哕</a></li>
                                        <li><a href="kanjiy/24800">哖</a></li>
                                        <li><a href="kanjiy/24801">哗</a></li>
                                        <li><a href="kanjiy/24802">哚</a></li>
                                        <li><a href="kanjiy/24803">哜</a></li>
                                        <li><a href="kanjiy/24804">哝</a></li>
                                        <li><a href="kanjiy/24805">哞</a></li>
                                        <li><a href="2222">咳</a></li>
                                        <li><a href="kanjiy/13302">咟</a></li>
                                        <li><a href="kanjiy/13303">咠</a></li>
                                        <li><a href="kanjiy/13304">咡</a></li>
                                        <li><a href="kanjiy/13305">咣</a></li>
                                        <li><a class="color2" href="2440">哉</a>
                                        </li>
                                        <li><a href="kanjiy/13306">咦</a></li>
                                        <li><a href="kanjiy/13307">咧</a></li>
                                        <li><a href="kanjiy/13308">咩</a></li>
                                        <li><a href="kanjiy/13309">咪</a></li>
                                        <li><a href="kanjiy/13310">咭</a></li>
                                        <li><a href="kanjiy/13311">咮</a></li>
                                        <li><a href="kanjiy/13312">咰</a></li>
                                        <li><a href="kanjiy/13313">咱</a></li>
                                        <li><a href="kanjiy/13314">咴</a></li>
                                        <li><a href="kanjiy/13315">咵</a></li>
                                        <li><a href="kanjiy/13316">咶</a></li>
                                        <li><a href="kanjiy/13317">咷</a></li>
                                        <li><a href="kanjiy/13318">咹</a></li>
                                        <li><a href="kanjiy/13319">咺</a></li>
                                        <li><a href="kanjiy/13320">咻</a></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts10">
                                   <h3 class="ttl_while"><a href="kakusu10">１０画</a></h3>
                                   <ul class="search_parts">
                                        <li><a class="color2" href="2966">哩</a>
                                        </li>
                                        <li><a href="kanjiy/13330">哣</a></li>
                                        <li><a href="kanjiy/13331">哤</a></li>
                                        <li><a href="kanjiy/13332">哧</a></li>
                                        <li><a href="kanjiy/13333">哪</a></li>
                                        <li><a href="kanjiy/13334">哫</a></li>
                                        <li><a href="kanjiy/13335">哬</a></li>
                                        <li><a href="kanjiy/13336">哯</a></li>
                                        <li><a href="kanjiy/13337">哰</a></li>
                                        <li><a href="kanjiy/13338">哱</a></li>
                                        <li><a href="kanjiy/13339">哴</a></li>
                                        <li><a href="kanjiy/13340">哵</a></li>
                                        <li><a href="kanjiy/13341">哶</a></li>
                                        <li><a href="kanjiy/13342">哷</a></li>
                                        <li><a href="kanjiy/13343">哸</a></li>
                                        <li><a href="kanjiy/13344">哹</a></li>
                                        <li><a href="kanjiy/13345">哻</a></li>
                                        <li><a href="kanjiy/13346">哼</a></li>
                                        <li><a href="kanjiy/13347">哾</a></li>
                                        <li><a href="kanjiy/13348">哿</a></li>
                                        <li><a href="kanjiy/13349">唀</a></li>
                                        <li><a href="kanjiy/13350">唁</a></li>
                                        <li><a href="kanjiy/13351">唂</a></li>
                                        <li><a href="kanjiy/13352">唃</a></li>
                                        <li><a href="kanjiy/13353">唅</a></li>
                                        <li><a href="kanjiy/13354">唈</a></li>
                                        <li><a href="kanjiy/13355">唉</a></li>
                                        <li><a href="kanjiy/13356">唊</a></li>
                                        <li><a href="kanjiy/13357">唋</a></li>
                                        <li><a href="kanjiy/13358">唍</a></li>
                                        <li><a href="kanjiy/13359">唎</a></li>
                                        <li><a href="kanjiy/13360">唑</a></li>
                                        <li><a href="kanjiy/13361">唒</a></li>
                                        <li><a href="kanjiy/26531">㖞</a></li>
                                        <li><a href="kanjiy/13362">唓</a></li>
                                        <li><a href="3256">哥</a></li>
                                        <li><a href="kanjiy/13363">唕</a></li>
                                        <li><a href="3257">哦</a></li>
                                        <li><a href="kanjiy/13364">唗</a></li>
                                        <li><a href="3258">唏</a></li>
                                        <li><a href="kanjiy/13365">唘</a></li>
                                        <li><a href="3259">唔</a></li>
                                        <li><a href="kanjiy/13366">唙</a></li>
                                        <li><a href="kanjiy/26583">㖴</a></li>
                                        <li><a href="3260">哽</a></li>
                                        <li><a href="kanjiy/13367">唚</a></li>
                                        <li><a href="3261">哮</a></li>
                                        <li><a href="kanjiy/13368">唜</a></li>
                                        <li><a href="3262">哭</a></li>
                                        <li><a href="kanjiy/13369">唟</a></li>
                                        <li><a href="3263">哢</a></li>
                                        <li><a href="kanjiy/13370">唧</a></li>
                                        <li><a href="3273">唳</a></li>
                                        <li><a href="kanjiy/18915">㖏</a></li>
                                        <li><a href="kanjiy/18916">㖐</a></li>
                                        <li><a href="kanjiy/18917">㖑</a></li>
                                        <li><a href="kanjiy/18918">㖒</a></li>
                                        <li><a href="kanjiy/18919">㖓</a></li>
                                        <li><a href="kanjiy/18920">㖔</a></li>
                                        <li><a href="kanjiy/27786">𠵅</a></li>
                                        <li><a href="kanjiy/18921">㖕</a></li>
                                        <li><a href="kanjiy/18922">㖖</a></li>
                                        <li><a href="kanjiy/18923">㖗</a></li>
                                        <li><a href="kanjiy/18924">㖘</a></li>
                                        <li><a href="kanjiy/18925">㖙</a></li>
                                        <li><a href="kanjiy/18926">㖚</a></li>
                                        <li><a href="kanjiy/18927">㖛</a></li>
                                        <li><a href="kanjiy/18928">㖜</a></li>
                                        <li><a href="kanjiy/18929">㖝</a></li>
                                        <li><a href="kanjiy/12336">哳</a></li>
                                        <li><a class="color1" href="kanji/248">員</a></li>
                                        <li><a href="kanjiy/23901">哠</a></li>
                                        <li><a href="kanjiy/23902">唌</a></li>
                                        <li><a class="color1" href="1207">唐</a>
                                        </li>
                                        <li><a class="color1" href="1515">哲</a>
                                        </li>
                                        <li><a class="color1" href="1698">唆</a>
                                        </li>
                                        <li><a class="color1" href="1765">唇</a>
                                        </li>
                                        <li><a class="color1" href="1949">唄</a>
                                        </li>
                                        <li><a href="kanjiy/24796">哒</a></li>
                                        <li><a class="color1" href="2101">哺</a>
                                        </li>
                                        <li><a href="2137">唖</a></li>
                                        <li><a href="kanjiy/24807">唛</a></li>
                                        <li><a href="kanjiy/24808">唞</a></li>
                                        <li><a href="kanjiy/24809">唠</a></li>
                                        <li><a href="kanjiy/24810">唡</a></li>
                                        <li><a href="kanjiy/24812">唣</a></li>
                                        <li><a href="kanjiy/24813">唤</a></li>
                                        <li><a href="kanjiy/24814">唥</a></li>
                                        <li><a href="kanjiy/24815">唦</a></li>
                                        <li><a class="color2" href="2552">哨</a>
                                        </li>
                                        <li><a class="color2" href="2702">啄</a>
                                        </li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts11">
                                   <h3 class="ttl_while"><a href="kakusu11">１１画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="kanjiy/26532">㖬</a></li>
                                        <li><a href="kanjiy/26535">㖭</a></li>
                                        <li><a href="kanjiy/26537">㖮</a></li>
                                        <li><a href="kanjiy/26581">㖱</a></li>
                                        <li><a href="kanjiy/26586">㖵</a></li>
                                        <li><a href="3264">唹</a></li>
                                        <li><a href="kanjiy/13371">唩</a></li>
                                        <li><a href="3265">啀</a></li>
                                        <li><a href="kanjiy/13372">唪</a></li>
                                        <li><a href="kanjiy/13373">唫</a></li>
                                        <li><a href="3267">售</a></li>
                                        <li><a href="kanjiy/13374">唬</a></li>
                                        <li><a href="3268">啜</a></li>
                                        <li><a href="kanjiy/13375">唭</a></li>
                                        <li><a href="3269">啅</a></li>
                                        <li><a href="kanjiy/13376">唰</a></li>
                                        <li><a href="3270">啖</a></li>
                                        <li><a href="kanjiy/13377">唲</a></li>
                                        <li><a href="3271">啗</a></li>
                                        <li><a href="kanjiy/13378">唴</a></li>
                                        <li><a href="3272">唸</a></li>
                                        <li><a href="kanjiy/13379">唵</a></li>
                                        <li><a href="kanjiy/13380">唶</a></li>
                                        <li><a href="kanjiy/13381">唷</a></li>
                                        <li><a href="kanjiy/13382">唺</a></li>
                                        <li><a href="kanjiy/13383">唻</a></li>
                                        <li><a href="kanjiy/13384">唼</a></li>
                                        <li><a href="kanjiy/13385">唽</a></li>
                                        <li><a href="kanjiy/13386">唿</a></li>
                                        <li><a href="kanjiy/13387">啁</a></li>
                                        <li><a href="kanjiy/13388">啂</a></li>
                                        <li><a href="kanjiy/13389">啃</a></li>
                                        <li><a href="kanjiy/13390">啈</a></li>
                                        <li><a href="kanjiy/13391">啉</a></li>
                                        <li><a href="kanjiy/13392">啊</a></li>
                                        <li><a href="kanjiy/13393">啋</a></li>
                                        <li><a href="kanjiy/13394">啎</a></li>
                                        <li><a href="kanjiy/13395">啒</a></li>
                                        <li><a href="kanjiy/13396">啔</a></li>
                                        <li><a href="kanjiy/13397">啕</a></li>
                                        <li><a href="kanjiy/13399">啛</a></li>
                                        <li><a href="kanjiy/18930">㖟</a></li>
                                        <li><a href="kanjiy/13400">啟</a></li>
                                        <li><a href="kanjiy/18931">㖠</a></li>
                                        <li><a href="kanjiy/13401">啠</a></li>
                                        <li><a href="kanjiy/18932">㖡</a></li>
                                        <li><a href="kanjiy/13402">啡</a></li>
                                        <li><a href="kanjiy/13403">啢</a></li>
                                        <li><a href="kanjiy/18934">㖣</a></li>
                                        <li><a href="kanjiy/13404">啤</a></li>
                                        <li><a href="kanjiy/18935">㖤</a></li>
                                        <li><a href="kanjiy/13405">啥</a></li>
                                        <li><a href="kanjiy/18936">㖥</a></li>
                                        <li><a href="kanjiy/13406">啦</a></li>
                                        <li><a href="kanjiy/18937">㖦</a></li>
                                        <li><a href="kanjiy/13407">啵</a></li>
                                        <li><a href="kanjiy/18938">㖧</a></li>
                                        <li><a href="kanjiy/18939">㖨</a></li>
                                        <li><a href="kanjiy/18940">㖩</a></li>
                                        <li><a href="kanjiy/18941">㖪</a></li>
                                        <li><a href="kanjiy/18942">㖫</a></li>
                                        <li><a href="kanjiy/18943">㖯</a></li>
                                        <li><a href="kanjiy/18944">㖰</a></li>
                                        <li><a href="kanjiy/18945">㖲</a></li>
                                        <li><a href="kanjiy/18946">㖳</a></li>
                                        <li><a href="kanjiy/13435">喯</a></li>
                                        <li><a href="6054">啌</a></li>
                                        <li><a href="6055">啝</a></li>
                                        <li><a href="kanjiy/13440">喵</a></li>
                                        <li><a href="6471">啞</a></li>
                                        <li><a href="kanjiy/12356">啐</a></li>
                                        <li><a href="kanjiy/12357">啑</a></li>
                                        <li><a href="kanjiy/12358">啍</a></li>
                                        <li><a href="kanjiy/12359">啘</a></li>
                                        <li><a href="kanjiy/12360">啚</a></li>
                                        <li><a class="color1" href="kanji/334">商</a></li>
                                        <li><a class="color1" href="kanji/417">問</a></li>
                                        <li><a class="color1" href="534">唱</a></li>
                                        <li><a href="kanjiy/23903">啨</a></li>
                                        <li><a href="kanjiy/23904">喏</a></li>
                                        <li><a class="color1" href="1380">啓</a>
                                        </li>
                                        <li><a class="color1" href="1631">喝</a>
                                        </li>
                                        <li><a class="color1" href="1913">唯</a>
                                        </li>
                                        <li><a class="color1" href="2052">唾</a>
                                        </li>
                                        <li><a href="kanjiy/24816">唨</a></li>
                                        <li><a href="kanjiy/24817">啇</a></li>
                                        <li><a href="kanjiy/24901">啩</a></li>
                                        <li><a href="kanjiy/24902">啪</a></li>
                                        <li><a href="kanjiy/24904">啬</a></li>
                                        <li><a href="kanjiy/24905">啭</a></li>
                                        <li><a href="kanjiy/24906">啯</a></li>
                                        <li><a href="kanjiy/24907">啰</a></li>
                                        <li><a href="kanjiy/24908">啱</a></li>
                                        <li><a href="kanjiy/24909">啲</a></li>
                                        <li><a href="kanjiy/24910">啳</a></li>
                                        <li><a href="kanjiy/24912">啶</a></li>
                                        <li><a href="kanjiy/24914">啸</a></li>
                                        <li><a href="kanjiy/24915">啹</a></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts12">
                                   <h3 class="ttl_while"><a href="kakusu12">１２画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="kanjiy/24917">喹</a></li>
                                        <li><a href="kanjiy/24918">喺</a></li>
                                        <li><a href="kanjiy/24919">喽</a></li>
                                        <li><a href="kanjiy/24920">喾</a></li>
                                        <li><a href="kanjiy/26346">喝</a></li>
                                        <li><a href="kanjiy/26591">㖽</a></li>
                                        <li><a href="kanjiy/26595">㗈</a></li>
                                        <li><a href="kanjiy/26598">㗎</a></li>
                                        <li><a href="kanjiy/26604">㗏</a></li>
                                        <li><a href="kanjiy/26606">㗑</a></li>
                                        <li><a href="3266">啣</a></li>
                                        <li><a href="kanjiy/26617">㗒</a></li>
                                        <li><a href="3274">喙</a></li>
                                        <li><a href="3275">喀</a></li>
                                        <li><a href="3276">喊</a></li>
                                        <li><a href="3277">喟</a></li>
                                        <li><a href="3278">啻</a></li>
                                        <li><a href="3279">啾</a></li>
                                        <li><a href="3280">喘</a></li>
                                        <li><a href="3281">喞</a></li>
                                        <li><a href="3282">啼</a></li>
                                        <li><a href="3283">喃</a></li>
                                        <li><a href="kanjiy/27787">𠷡</a></li>
                                        <li><a href="3284">喇</a></li>
                                        <li><a href="3285">喨</a></li>
                                        <li><a href="kanjiy/13398">啙</a></li>
                                        <li><a href="kanjiy/18933">㖢</a></li>
                                        <li><a href="kanjiy/13408">啺</a></li>
                                        <li><a href="kanjiy/13409">啽</a></li>
                                        <li><a href="kanjiy/13410">啿</a></li>
                                        <li><a href="kanjiy/13411">喁</a></li>
                                        <li><a href="kanjiy/13412">喂</a></li>
                                        <li><a href="kanjiy/13413">喅</a></li>
                                        <li><a href="kanjiy/13414">喆</a></li>
                                        <li><a href="kanjiy/13415">喈</a></li>
                                        <li><a href="kanjiy/13416">喌</a></li>
                                        <li><a href="kanjiy/18947">㖶</a></li>
                                        <li><a href="kanjiy/18948">㖷</a></li>
                                        <li><a href="kanjiy/13418">喎</a></li>
                                        <li><a href="kanjiy/18949">㖸</a></li>
                                        <li><a href="kanjiy/13419">喐</a></li>
                                        <li><a href="kanjiy/18950">㖹</a></li>
                                        <li><a href="kanjiy/13420">喒</a></li>
                                        <li><a href="kanjiy/18951">㖺</a></li>
                                        <li><a href="kanjiy/13421">喓</a></li>
                                        <li><a href="kanjiy/18952">㖻</a></li>
                                        <li><a href="kanjiy/13422">喔</a></li>
                                        <li><a href="kanjiy/18953">㖼</a></li>
                                        <li><a href="kanjiy/13423">喕</a></li>
                                        <li><a href="kanjiy/18954">㖾</a></li>
                                        <li><a href="kanjiy/13424">喖</a></li>
                                        <li><a href="kanjiy/18955">㖿</a></li>
                                        <li><a href="kanjiy/13425">喗</a></li>
                                        <li><a href="kanjiy/18956">㗀</a></li>
                                        <li><a href="kanjiy/13426">喛</a></li>
                                        <li><a href="kanjiy/18957">㗁</a></li>
                                        <li><a href="kanjiy/13427">喠</a></li>
                                        <li><a href="kanjiy/18958">㗂</a></li>
                                        <li><a href="kanjiy/18959">㗃</a></li>
                                        <li><a href="kanjiy/13429">喢</a></li>
                                        <li><a href="kanjiy/18960">㗄</a></li>
                                        <li><a href="kanjiy/13430">喣</a></li>
                                        <li><a href="kanjiy/18961">㗅</a></li>
                                        <li><a class="color2" href="5762">單</a>
                                        </li>
                                        <li><a href="kanjiy/13431">喤</a></li>
                                        <li><a href="kanjiy/18962">㗆</a></li>
                                        <li><a href="kanjiy/13432">喥</a></li>
                                        <li><a href="kanjiy/18963">㗇</a></li>
                                        <li><a href="kanjiy/13433">喦</a></li>
                                        <li><a href="kanjiy/18964">㗉</a></li>
                                        <li><a href="kanjiy/13434">喭</a></li>
                                        <li><a href="kanjiy/18965">㗊</a></li>
                                        <li><a href="kanjiy/18966">㗋</a></li>
                                        <li><a href="kanjiy/13436">喱</a></li>
                                        <li><a href="kanjiy/18967">㗌</a></li>
                                        <li><a href="kanjiy/13437">喲</a></li>
                                        <li><a href="kanjiy/18968">㗍</a></li>
                                        <li><a href="kanjiy/13438">喳</a></li>
                                        <li><a href="kanjiy/18969">㗐</a></li>
                                        <li><a href="kanjiy/13439">喴</a></li>
                                        <li><a href="kanjiy/13441">喸</a></li>
                                        <li><a href="kanjiy/13442">喼</a></li>
                                        <li><a href="kanjiy/18981">㗡</a></li>
                                        <li><a href="kanjiy/13455">嗏</a></li>
                                        <li><a href="kanjiy/12337">喑</a></li>
                                        <li><a class="color1" href="kanji/469">喜</a></li>
                                        <li><a class="color1" href="645">営</a></li>
                                        <li><a href="kanjiy/23905">喻</a></li>
                                        <li><a href="kanjiy/23907">嗒</a></li>
                                        <li><a href="kanjiy/23908">嗞</a></li>
                                        <li><a class="color1" href="927">善</a></li>
                                        <li><a class="color1" href="1356">喚</a>
                                        </li>
                                        <li><a class="color1" href="1369">喫</a>
                                        </li>
                                        <li><a class="color1" href="1798">喪</a>
                                        </li>
                                        <li><a class="color1" href="2000">喉</a>
                                        </li>
                                        <li><a class="color1" href="2115">喩</a>
                                        </li>
                                        <li><a class="color2" href="2319">喬</a>
                                        </li>
                                        <li><a class="color2" href="2346">喰</a>
                                        </li>
                                        <li><a class="color2" href="2364">喧</a>
                                        </li>
                                        <li><a href="kanjiy/24903">啫</a></li>
                                        <li><a class="color2" href="2734">喋</a>
                                        </li>
                                        <li><a href="kanjiy/24911">啴</a></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts13">
                                   <h3 class="ttl_while"><a href="kakusu13">１３画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="kanjiy/24921">嗪</a></li>
                                        <li><a href="kanjiy/24922">嗫</a></li>
                                        <li><a href="kanjiy/24923">嗬</a></li>
                                        <li><a href="kanjiy/24942">嗮</a></li>
                                        <li><a href="kanjiy/24943">嗯</a></li>
                                        <li><a href="kanjiy/24944">嗰</a></li>
                                        <li><a href="kanjiy/24945">嗲</a></li>
                                        <li><a href="kanjiy/24946">嗳</a></li>
                                        <li><a href="kanjiy/24947">嗴</a></li>
                                        <li><a href="kanjiy/26618">㗝</a></li>
                                        <li><a href="kanjiy/27721">𠺞</a></li>
                                        <li><a href="kanjiy/27790">𠺕</a></li>
                                        <li><a href="kanjiy/27791">𠹭</a></li>
                                        <li><a href="3286">嗚</a></li>
                                        <li><a href="kanjiy/27792">𠹤</a></li>
                                        <li><a href="3287">嗇</a></li>
                                        <li><a href="3288">嗟</a></li>
                                        <li><a href="3289">嗄</a></li>
                                        <li><a href="3290">嗜</a></li>
                                        <li><a href="3291">嗤</a></li>
                                        <li><a href="3292">嗔</a></li>
                                        <li><a href="kanjiy/13417">喍</a></li>
                                        <li><a href="kanjiy/13428">喡</a></li>
                                        <li><a href="kanjiy/18970">㗓</a></li>
                                        <li><a href="kanjiy/18971">㗔</a></li>
                                        <li><a href="kanjiy/18972">㗕</a></li>
                                        <li><a href="kanjiy/18973">㗗</a></li>
                                        <li><a href="kanjiy/13443">喿</a></li>
                                        <li><a href="kanjiy/18974">㗘</a></li>
                                        <li><a href="kanjiy/13444">嗀</a></li>
                                        <li><a href="kanjiy/18975">㗙</a></li>
                                        <li><a href="kanjiy/13445">嗁</a></li>
                                        <li><a href="kanjiy/18976">㗚</a></li>
                                        <li><a href="6258">甞</a></li>
                                        <li><a href="kanjiy/13446">嗃</a></li>
                                        <li><a href="kanjiy/18977">㗜</a></li>
                                        <li><a href="kanjiy/13447">嗆</a></li>
                                        <li><a href="kanjiy/18978">㗞</a></li>
                                        <li><a href="kanjiy/13448">嗈</a></li>
                                        <li><a href="kanjiy/18979">㗟</a></li>
                                        <li><a href="kanjiy/13449">嗉</a></li>
                                        <li><a href="kanjiy/18980">㗠</a></li>
                                        <li><a href="kanjiy/13450">嗊</a></li>
                                        <li><a href="kanjiy/13451">嗋</a></li>
                                        <li><a href="kanjiy/13452">嗌</a></li>
                                        <li><a href="kanjiy/13453">嗍</a></li>
                                        <li><a href="kanjiy/13454">嗎</a></li>
                                        <li><a href="kanjiy/13456">嗐</a></li>
                                        <li><a href="8788">㗛</a></li>
                                        <li><a href="kanjiy/13457">嗑</a></li>
                                        <li><a href="kanjiy/13458">嗓</a></li>
                                        <li><a href="kanjiy/13459">嗕</a></li>
                                        <li><a href="kanjiy/13460">嗖</a></li>
                                        <li><a href="kanjiy/13461">嗗</a></li>
                                        <li><a href="kanjiy/13462">嗘</a></li>
                                        <li><a href="kanjiy/13463">嗙</a></li>
                                        <li><a href="kanjiy/13464">嗛</a></li>
                                        <li><a href="kanjiy/13465">嗝</a></li>
                                        <li><a href="kanjiy/13466">嗠</a></li>
                                        <li><a href="kanjiy/13467">嗡</a></li>
                                        <li><a href="kanjiy/13468">嗥</a></li>
                                        <li><a href="kanjiy/13469">嗦</a></li>
                                        <li><a href="kanjiy/13470">嗧</a></li>
                                        <li><a href="kanjiy/13471">嗨</a></li>
                                        <li><a href="kanjiy/13472">嗩</a></li>
                                        <li><a href="kanjiy/13473">嗭</a></li>
                                        <li><a href="kanjiy/13474">嗱</a></li>
                                        <li><a href="kanjiy/13479">嗼</a></li>
                                        <li><a href="kanjiy/23906">嗂</a></li>
                                        <li><a href="kanjiy/23909">嗢</a></li>
                                        <li><a class="color1" href="1182">嘆</a>
                                        </li>
                                        <li><a href="kanjiy/24197">㗖</a></li>
                                        <li><a class="color1" href="1709">嗣</a>
                                        </li>
                                        <li><a class="color1" href="1979">嗅</a>
                                        </li>
                                        <li><a class="color2" href="2206">嘩</a>
                                        </li>
                                        <li><a href="kanjiy/24913">啷</a></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts14">
                                   <h3 class="ttl_while"><a href="kakusu14">１４画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="kanjiy/24948">嗵</a></li>
                                        <li><a href="kanjiy/24949">嘡</a></li>
                                        <li><a href="kanjiy/24950">嘢</a></li>
                                        <li><a href="kanjiy/24951">嘣</a></li>
                                        <li><a href="kanjiy/24952">嘥</a></li>
                                        <li><a href="kanjiy/24953">嘦</a></li>
                                        <li><a href="kanjiy/24954">嘧</a></li>
                                        <li><a href="kanjiy/18625">嘅</a></li>
                                        <li><a href="kanjiy/26619">㗮</a></li>
                                        <li><a href="kanjiy/26620">㗰</a></li>
                                        <li><a href="kanjiy/27793">𠽟</a></li>
                                        <li><a href="3293">嘔</a></li>
                                        <li><a href="3294">嗷</a></li>
                                        <li><a href="3295">嘖</a></li>
                                        <li><a href="3296">嗾</a></li>
                                        <li><a href="3297">嗽</a></li>
                                        <li><a href="3298">嘛</a></li>
                                        <li><a href="5787">嗹</a></li>
                                        <li><a class="color2" href="6378">嘆</a>
                                        </li>
                                        <li><a href="kanjiy/18982">㗢</a></li>
                                        <li><a href="kanjiy/18983">㗣</a></li>
                                        <li><a href="kanjiy/18984">㗤</a></li>
                                        <li><a href="kanjiy/18985">㗥</a></li>
                                        <li><a href="kanjiy/18986">㗦</a></li>
                                        <li><a href="kanjiy/18987">㗧</a></li>
                                        <li><a href="kanjiy/18988">㗨</a></li>
                                        <li><a href="kanjiy/18989">㗩</a></li>
                                        <li><a href="kanjiy/18991">㗫</a></li>
                                        <li><a href="kanjiy/18992">㗬</a></li>
                                        <li><a href="kanjiy/18993">㗭</a></li>
                                        <li><a href="kanjiy/18994">㗯</a></li>
                                        <li><a href="kanjiy/13475">嗶</a></li>
                                        <li><a href="kanjiy/13476">嗸</a></li>
                                        <li><a href="kanjiy/13477">嗺</a></li>
                                        <li><a href="kanjiy/13478">嗻</a></li>
                                        <li><a href="kanjiy/13480">嗿</a></li>
                                        <li><a href="kanjiy/13481">嘀</a></li>
                                        <li><a href="kanjiy/13482">嘁</a></li>
                                        <li><a href="kanjiy/13483">嘂</a></li>
                                        <li><a href="kanjiy/13484">嘃</a></li>
                                        <li><a href="kanjiy/13485">嘄</a></li>
                                        <li><a href="kanjiy/13486">嘇</a></li>
                                        <li><a href="kanjiy/13487">嘈</a></li>
                                        <li><a href="kanjiy/13488">嘊</a></li>
                                        <li><a href="kanjiy/13489">嘋</a></li>
                                        <li><a href="kanjiy/13490">嘌</a></li>
                                        <li><a href="kanjiy/13491">嘍</a></li>
                                        <li><a href="kanjiy/13492">嘎</a></li>
                                        <li><a href="kanjiy/13493">嘏</a></li>
                                        <li><a href="kanjiy/13494">嘐</a></li>
                                        <li><a href="kanjiy/13495">嘑</a></li>
                                        <li><a href="kanjiy/13496">嘒</a></li>
                                        <li><a href="kanjiy/13497">嘓</a></li>
                                        <li><a href="kanjiy/13498">嘕</a></li>
                                        <li><a href="kanjiy/13499">嘙</a></li>
                                        <li><a href="kanjiy/13500">嘚</a></li>
                                        <li><a href="kanjiy/13501">嘜</a></li>
                                        <li><a href="kanjiy/13502">嘝</a></li>
                                        <li><a href="kanjiy/13503">嘞</a></li>
                                        <li><a href="kanjiy/13506">嘨</a></li>
                                        <li><a href="kanjiy/13529">噑</a></li>
                                        <li><a class="color2" href="2205">嘉</a>
                                        </li>
                                        <li><a href="2307">嘘</a></li>
                                        <li><a class="color2" href="2553">嘗</a>
                                        </li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts15">
                                   <h3 class="ttl_while"><a href="kakusu15">１５画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="kanjiy/26623">㗸</a></li>
                                        <li><a href="kanjiy/26624">㗹</a></li>
                                        <li><a href="kanjiy/26625">㗺</a></li>
                                        <li><a href="kanjiy/26626">㘃</a></li>
                                        <li><a href="3299">噎</a></li>
                                        <li><a href="3301">嘶</a></li>
                                        <li><a href="3302">嘸</a></li>
                                        <li><a href="6057">噐</a></li>
                                        <li><a href="6473">噓</a></li>
                                        <li><a href="kanjiy/18990">㗪</a></li>
                                        <li><a href="kanjiy/12338">噁</a></li>
                                        <li><a href="kanjiy/18995">㗱</a></li>
                                        <li><a href="kanjiy/18996">㗲</a></li>
                                        <li><a href="kanjiy/18997">㗳</a></li>
                                        <li><a href="kanjiy/18998">㗴</a></li>
                                        <li><a href="kanjiy/18999">㗵</a></li>
                                        <li><a href="kanjiy/19000">㗶</a></li>
                                        <li><a href="kanjiy/19002">㗽</a></li>
                                        <li><a class="color1" href="kanji/475">器</a></li>
                                        <li><a href="kanjiy/13504">嘟</a></li>
                                        <li><a href="kanjiy/13505">嘠</a></li>
                                        <li><a href="kanjiy/13507">嘪</a></li>
                                        <li><a href="kanjiy/13508">嘫</a></li>
                                        <li><a href="kanjiy/13509">嘬</a></li>
                                        <li><a href="kanjiy/13510">嘭</a></li>
                                        <li><a href="kanjiy/23910">嘰</a></li>
                                        <li><a href="kanjiy/13511">嘮</a></li>
                                        <li><a href="kanjiy/23911">嘼</a></li>
                                        <li><a href="kanjiy/13512">嘳</a></li>
                                        <li><a href="kanjiy/23912">嘾</a></li>
                                        <li><a href="kanjiy/13513">嘵</a></li>
                                        <li><a href="kanjiy/23913">噄</a></li>
                                        <li><a href="kanjiy/13514">嘷</a></li>
                                        <li><a href="kanjiy/13515">嘹</a></li>
                                        <li><a href="kanjiy/23915">噇</a></li>
                                        <li><a href="kanjiy/13516">嘺</a></li>
                                        <li><a href="kanjiy/13517">嘻</a></li>
                                        <li><a href="kanjiy/13518">嘽</a></li>
                                        <li><a href="kanjiy/23918">噶</a></li>
                                        <li><a class="color1" href="1261">噴</a>
                                        </li>
                                        <li><a href="kanjiy/13519">嘿</a></li>
                                        <li><a href="kanjiy/13520">噀</a></li>
                                        <li><a href="kanjiy/13521">噃</a></li>
                                        <li><a href="kanjiy/13522">噅</a></li>
                                        <li><a href="kanjiy/13523">噈</a></li>
                                        <li><a href="kanjiy/13524">噉</a></li>
                                        <li><a class="color1" href="1450">嘱</a>
                                        </li>
                                        <li><a href="kanjiy/13525">噊</a></li>
                                        <li><a href="kanjiy/13526">噋</a></li>
                                        <li><a href="kanjiy/13527">噍</a></li>
                                        <li><a href="kanjiy/13528">噏</a></li>
                                        <li><a href="kanjiy/13531">噔</a></li>
                                        <li><a href="kanjiy/13532">噕</a></li>
                                        <li><a href="kanjiy/13533">噖</a></li>
                                        <li><a href="kanjiy/13534">噗</a></li>
                                        <li><a href="kanjiy/13535">噘</a></li>
                                        <li><a href="kanjiy/13537">噚</a></li>
                                        <li><a href="kanjiy/24792">噝</a></li>
                                        <li><a href="kanjiy/13544">噧</a></li>
                                        <li><a class="color1" href="2061">嘲</a>
                                        </li>
                                        <li><a href="2420">噛</a></li>
                                        <li><a class="color2" href="2651">噌</a>
                                        </li>
                                        <li><a class="color2" href="2675">噂</a>
                                        </li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts16">
                                   <h3 class="ttl_while"><a href="kakusu16">１６画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="2839">噺</a></li>
                                        <li><a href="kanjiy/24955">噻</a></li>
                                        <li><a href="kanjiy/24956">噼</a></li>
                                        <li><a href="kanjiy/26627">㘄</a></li>
                                        <li><a href="3300">嘴</a></li>
                                        <li><a href="3303">噫</a></li>
                                        <li><a href="3304">噤</a></li>
                                        <li><a href="3305">嘯</a></li>
                                        <li><a href="3306">噬</a></li>
                                        <li><a href="3307">噪</a></li>
                                        <li><a href="3308">嚆</a></li>
                                        <li><a class="color2" href="6379">器</a>
                                        </li>
                                        <li><a href="kanjiy/12339">噦</a></li>
                                        <li><a href="kanjiy/12340">噯</a></li>
                                        <li><a href="kanjiy/19001">㗼</a></li>
                                        <li><a href="kanjiy/19003">㗾</a></li>
                                        <li><a href="kanjiy/19004">㗿</a></li>
                                        <li><a href="kanjiy/19005">㘀</a></li>
                                        <li><a href="kanjiy/19006">㘁</a></li>
                                        <li><a href="kanjiy/19007">㘂</a></li>
                                        <li><a href="kanjiy/19123">㚡</a></li>
                                        <li><a href="kanjiy/23916">噠</a></li>
                                        <li><a href="kanjiy/23917">噱</a></li>
                                        <li><a href="kanjiy/23920">嚄</a></li>
                                        <li><a href="kanjiy/24198">㗻</a></li>
                                        <li><a href="kanjiy/13530">噒</a></li>
                                        <li><a href="kanjiy/13536">噙</a></li>
                                        <li><a href="kanjiy/13538">噞</a></li>
                                        <li><a href="kanjiy/13539">噟</a></li>
                                        <li><a href="kanjiy/13540">噡</a></li>
                                        <li><a href="kanjiy/13541">噢</a></li>
                                        <li><a href="kanjiy/13542">噣</a></li>
                                        <li><a href="kanjiy/13543">噥</a></li>
                                        <li><a href="kanjiy/13545">噩</a></li>
                                        <li><a href="kanjiy/13546">噭</a></li>
                                        <li><a href="kanjiy/13547">噮</a></li>
                                        <li><a href="kanjiy/13548">噰</a></li>
                                        <li><a href="kanjiy/13549">噲</a></li>
                                        <li><a href="kanjiy/13550">噳</a></li>
                                        <li><a href="kanjiy/13551">噵</a></li>
                                        <li><a href="kanjiy/13552">噷</a></li>
                                        <li><a href="kanjiy/13553">噹</a></li>
                                        <li><a href="2806">噸</a></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts17">
                                   <h3 class="ttl_while"><a href="kakusu17">１７画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="kanjiy/24957">嚑</a></li>
                                        <li><a href="kanjiy/24958">嚒</a></li>
                                        <li><a href="kanjiy/24959">嚓</a></li>
                                        <li><a href="3309">嚀</a></li>
                                        <li><a href="3310">嚊</a></li>
                                        <li><a href="3313">嚏</a></li>
                                        <li><a href="6058">營</a></li>
                                        <li><a href="7615">㘅</a></li>
                                        <li><a href="kanjiy/19008">㘆</a></li>
                                        <li><a href="kanjiy/19009">㘇</a></li>
                                        <li><a href="kanjiy/19010">㘈</a></li>
                                        <li><a href="kanjiy/23914">噆</a></li>
                                        <li><a href="kanjiy/23919">嚃</a></li>
                                        <li><a class="color1" href="1629">嚇</a>
                                        </li>
                                        <li><a href="kanjiy/13554">噽</a></li>
                                        <li><a href="kanjiy/13555">噾</a></li>
                                        <li><a href="kanjiy/13556">噿</a></li>
                                        <li><a href="kanjiy/13557">嚁</a></li>
                                        <li><a href="kanjiy/13559">嚅</a></li>
                                        <li><a href="kanjiy/13560">嚈</a></li>
                                        <li><a href="kanjiy/13561">嚉</a></li>
                                        <li><a href="kanjiy/13562">嚋</a></li>
                                        <li><a href="kanjiy/13563">嚌</a></li>
                                        <li><a href="kanjiy/13564">嚍</a></li>
                                        <li><a href="kanjiy/13565">嚎</a></li>
                                        <li><a href="kanjiy/13566">嚐</a></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts18">
                                   <h3 class="ttl_while"><a href="kakusu18">１８画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="kanjiy/24960">嚡</a></li>
                                        <li><a href="kanjiy/24961">嚤</a></li>
                                        <li><a href="3311">嚠</a></li>
                                        <li><a href="3312">嚔</a></li>
                                        <li><a href="6476">嚙</a></li>
                                        <li><a href="kanjiy/19011">㘉</a></li>
                                        <li><a href="kanjiy/19012">㘊</a></li>
                                        <li><a href="kanjiy/19014">㘌</a></li>
                                        <li><a href="kanjiy/19015">㘍</a></li>
                                        <li><a href="kanjiy/19016">㘏</a></li>
                                        <li><a href="kanjiy/23881">㘎</a></li>
                                        <li><a href="kanjiy/23921">嚝</a></li>
                                        <li><a href="kanjiy/13558">嚂</a></li>
                                        <li><a href="kanjiy/13567">嚕</a></li>
                                        <li><a href="kanjiy/13568">嚖</a></li>
                                        <li><a href="kanjiy/13569">嚗</a></li>
                                        <li><a href="kanjiy/13570">嚘</a></li>
                                        <li><a href="kanjiy/13572">嚛</a></li>
                                        <li><a href="2801">嚢</a></li>
                                        <li><a href="kanjiy/13573">嚜</a></li>
                                        <li><a href="kanjiy/13574">嚞</a></li>
                                        <li><a href="kanjiy/13575">嚟</a></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts19">
                                   <h3 class="ttl_while"><a href="kakusu19">１９画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="kanjiy/13577">嚧</a></li>
                                        <li><a href="kanjiy/13578">嚨</a></li>
                                        <li><a href="kanjiy/13579">嚩</a></li>
                                        <li><a href="kanjiy/13580">嚪</a></li>
                                        <li><a href="kanjiy/13581">嚫</a></li>
                                        <li><a href="kanjiy/13582">嚭</a></li>
                                        <li><a href="kanjiy/13583">嚯</a></li>
                                        <li><a href="kanjiy/24962">嚰</a></li>
                                        <li><a href="3314">嚥</a></li>
                                        <li><a href="3315">嚮</a></li>
                                        <li><a href="kanjiy/12341">嚬</a></li>
                                        <li><a href="kanjiy/19013">㘋</a></li>
                                        <li><a href="kanjiy/19017">㘐</a></li>
                                        <li><a href="kanjiy/19018">㘑</a></li>
                                        <li><a href="kanjiy/19019">㘒</a></li>
                                        <li><a href="kanjiy/13571">嚚</a></li>
                                        <li><a href="kanjiy/13576">嚦</a></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts20">
                                   <h3 class="ttl_while"><a href="kakusu20">２０画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="kanjiy/13584">嚱</a></li>
                                        <li><a href="kanjiy/13585">嚲</a></li>
                                        <li><a href="kanjiy/13586">嚵</a></li>
                                        <li><a href="kanjiy/13587">嚷</a></li>
                                        <li><a href="kanjiy/13590">嚾</a></li>
                                        <li><a href="kanjiy/13591">嚿</a></li>
                                        <li><a href="kanjiy/24963">嚸</a></li>
                                        <li><a href="kanjiy/24964">嚹</a></li>
                                        <li><a href="kanjiy/26621">㘔</a></li>
                                        <li><a href="3316">嚶</a></li>
                                        <li><a class="color2" href="6147">嚴</a>
                                        </li>
                                        <li><a href="kanjiy/12475">嚳</a></li>
                                        <li><a href="kanjiy/19020">㘓</a></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts21">
                                   <h3 class="ttl_while"><a href="kakusu21">２１画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="kanjiy/13588">嚻</a></li>
                                        <li><a href="kanjiy/13589">嚽</a></li>
                                        <li><a href="kanjiy/13593">囆</a></li>
                                        <li><a href="kanjiy/24965">嚺</a></li>
                                        <li><a href="kanjiy/26628">㘗</a></li>
                                        <li><a href="3317">囂</a></li>
                                        <li><a href="3318">嚼</a></li>
                                        <li><a href="3319">囁</a></li>
                                        <li><a href="3320">囃</a></li>
                                        <li><a href="3321">囀</a></li>
                                        <li><a href="3322">囈</a></li>
                                        <li><a href="kanjiy/19021">㘕</a></li>
                                        <li><a href="kanjiy/19022">㘖</a></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts22">
                                   <h3 class="ttl_while"><a href="kakusu22">２２画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="kanjiy/13592">囅</a></li>
                                        <li><a href="kanjiy/13594">囇</a></li>
                                        <li><a href="kanjiy/13595">囉</a></li>
                                        <li><a href="kanjiy/13596">囋</a></li>
                                        <li><a href="kanjiy/24966">囄</a></li>
                                        <li><a href="kanjiy/26629">㘘</a></li>
                                        <li><a href="5786">囎</a></li>
                                        <li><a href="6479">囊</a></li>
                                        <li><a href="kanjiy/23922">囌</a></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts23">
                                   <h3 class="ttl_while"><a href="kakusu23">２３画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="kanjiy/13598">囐</a></li>
                                        <li><a href="kanjiy/13599">囒</a></li>
                                        <li><a href="9354">囏</a></li>
                                        <li><a href="kanjiy/19023">㘙</a></li>
                                        <li><a href="kanjiy/23880">㘚</a></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts24">
                                   <h3 class="ttl_while"><a href="kakusu24">２４画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="kanjiy/13597">囍</a></li>
                                        <li><a href="3770">囓</a></li>
                                        <li><a href="5763">囑</a></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts25">
                                   <h3 class="ttl_while"><a href="kakusu25">２５画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="kanjiy/13600">囔</a></li>
                                        <li><a href="kanjiy/24967">囕</a></li>
                                        <li><a href="kanjiy/19024">㘛</a></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts26">
                                   <h3 class="ttl_while"><a href="kakusu26">２６画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="kanjiy/19025">㘜</a></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts28">
                                   <h3 class="ttl_while"><a href="kakusu28">２８画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="kanjiy/24968">囖</a></li>
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
                                             <option value="radical30">English</option>
                                             <option value="bushu03003">Japanese</option>
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

<!-- Mirrored from bushu03003 by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Nov 2023 00:39:39 GMT -->

</html>