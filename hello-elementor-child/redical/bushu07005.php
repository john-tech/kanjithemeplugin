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
                    <h1 class="ttl_main">部首：足部（あし・あしへん）の漢字</h1>

                    <div class="bushu_about">
                         <div class="bushu_about_box">
                              <h2>足部とは？</h2>
                              <p><strong>足部（そくぶ）は、<span
                                             class="marker">足の各部分、状態、足を使った動作などに関する字</span>が主に属します。</strong>「足」は「あし」、偏になった形を「あしへん」と呼びます。
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
                                        <option value="#" selected>足（あし・あしへん）</option>
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
                                   <li><a href="bbushu07005">漢検級順</a></li>
                                   <li><a href="cbushu07005">読み順</a></li>
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
                                   <li><a href="#parts28">28画</a></li>
                              </ul>
                         </div><!--search_data-->
                        
                         <h2 class="left_border">部首：足部（あし・あしへん）の漢字一覧</h2>
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
                                        <li><a class="color1" href="kanji/053">足</a></li>
                                        <li><a href="24746">⻊</a></li>
                                        <li><a href="27772">𧾷</a></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts09">
                                   <h3 class="ttl_while"><a href="kakusu09">９画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="17810">趴</a></li>
                                        <li><a href="22554">䟓</a></li>
                                        <li><a href="22555">䟔</a></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts10">
                                   <h3 class="ttl_while"><a href="kakusu10">１０画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="17811">趶</a></li>
                                        <li><a href="22556">䟕</a></li>
                                        <li><a href="22557">䟖</a></li>
                                        <li><a href="26836">趸</a></li>
                                        <li><a href="8359">趷</a></li>
                                        <li><a href="8360">趵</a></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts11">
                                   <h3 class="ttl_while"><a href="kakusu11">１１画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="17812">趽</a></li>
                                        <li><a href="17813">跁</a></li>
                                        <li><a href="22558">䟗</a></li>
                                        <li><a href="22559">䟘</a></li>
                                        <li><a href="22560">䟙</a></li>
                                        <li><a href="22561">䟚</a></li>
                                        <li><a href="22562">䟛</a></li>
                                        <li><a href="22563">䟜</a></li>
                                        <li><a href="22564">䟝</a></li>
                                        <li><a href="22565">䟞</a></li>
                                        <li><a href="22574">䟪</a></li>
                                        <li><a href="4253">跂</a></li>
                                        <li><a href="4254">趺</a></li>
                                        <li><a href="4255">趾</a></li>
                                        <li><a href="26837">跃</a></li>
                                        <li><a href="26838">跄</a></li>
                                        <li><a href="8361">趹</a></li>
                                        <li><a href="8362">跀</a></li>
                                        <li><a href="8363">趿</a></li>
                                        <li><a href="8364">趻</a></li>
                                   </ul>
                              </div>
                         
                              <div class="parts_box" id="parts12">
                                   <h3 class="ttl_while"><a href="kakusu12">１２画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="17814">跉</a></li>
                                        <li><a href="17815">跍</a></li>
                                        <li><a href="17816">跒</a></li>
                                        <li><a href="17817">跓</a></li>
                                        <li><a href="17818">跘</a></li>
                                        <li><a href="17819">跜</a></li>
                                        <li><a href="22566">䟟</a></li>
                                        <li><a href="22567">䟠</a></li>
                                        <li><a href="22568">䟢</a></li>
                                        <li><a href="22569">䟤</a></li>
                                        <li><a href="22570">䟥</a></li>
                                        <li><a href="22571">䟧</a></li>
                                        <li><a href="22572">䟨</a></li>
                                        <li><a href="22573">䟩</a></li>
                                        <li><a href="22575">䟬</a></li>
                                        <li><a href="22576">䟭</a></li>
                                        <li><a class="color1" href="1062">距</a>
                                        </li>
                                        <li><a href="4256">跏</a></li>
                                        <li><a href="4257">跖</a></li>
                                        <li><a href="4258">跌</a></li>
                                        <li><a href="4259">跚</a></li>
                                        <li><a href="4260">跛</a></li>
                                        <li><a href="4261">跋</a></li>
                                        <li><a href="8366">跇</a></li>
                                        <li><a href="8367">跔</a></li>
                                        <li><a href="8368">跙</a></li>
                                        <li><a href="8369">跎</a></li>
                                        <li><a href="8370">跆</a></li>
                                        <li><a href="8371">跅</a></li>
                                        <li><a href="8372">䟡</a></li>
                                        <li><a href="8373">䟣</a></li>
                                        <li><a href="8374">跕</a></li>
                                        <li><a href="8375">跈</a></li>
                                        <li><a href="8376">䟫</a></li>
                                        <li><a href="8377">跊</a></li>
                                        <li><a href="8378">䟦</a></li>
                                        <li><a href="8379">跗</a></li>
                                        <li><a href="8380">跑</a></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts13">
                                   <h3 class="ttl_while"><a href="kakusu13">１３画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="12884">跱</a></li>
                                        <li><a href="17820">跠</a></li>
                                        <li><a href="17821">跢</a></li>
                                        <li><a href="17822">跩</a></li>
                                        <li><a href="17824">跮</a></li>
                                        <li><a href="22577">䟮</a></li>
                                        <li><a href="22578">䟯</a></li>
                                        <li><a class="color1" href="kanji/438">路</a></li>
                                        <li><a href="22579">䟰</a></li>
                                        <li><a href="22580">䟱</a></li>
                                        <li><a class="color1" href="1163">跡</a>
                                        </li>
                                        <li><a class="color1" href="1190">跳</a>
                                        </li>
                                        <li><a class="color1" href="1786">践</a>
                                        </li>
                                        <li><a class="color2" href="2383">跨</a>
                                        </li>
                                        <li><a href="4262">跟</a></li>
                                        <li><a href="4263">跣</a></li>
                                        <li><a href="4264">跪</a></li>
                                        <li><a href="4265">跫</a></li>
                                        <li><a href="26843">跸</a></li>
                                        <li><a href="26845">跺</a></li>
                                        <li><a href="26846">跻</a></li>
                                        <li><a href="27499">䟳</a></li>
                                        <li><a href="27500">䟲</a></li>
                                        <li><a href="8381">跬</a></li>
                                        <li><a href="8383">趼</a></li>
                                        <li><a href="8384">跤</a></li>
                                        <li><a href="8385">跲</a></li>
                                        <li><a href="8386">跴</a></li>
                                        <li><a href="8387">跐</a></li>
                                        <li><a href="8388">跧</a></li>
                                        <li><a href="8389">跥</a></li>
                                        <li><a href="8390">跦</a></li>
                                        <li><a href="8407">跰</a></li>
                                   </ul>
                              </div>
                         
                              <div class="parts_box" id="parts14">
                                   <h3 class="ttl_while"><a href="kakusu14">１４画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="8450">踌</a></li>
                                        <li><a href="10339">䟽</a></li>
                                        <li><a href="11815">踋</a></li>
                                        <li><a href="17823">跭</a></li>
                                        <li><a href="17825">跾</a></li>
                                        <li><a href="17826">踀</a></li>
                                        <li><a href="17827">踂</a></li>
                                        <li><a href="17828">踃</a></li>
                                        <li><a href="17829">踇</a></li>
                                        <li><a href="22581">䟴</a></li>
                                        <li><a href="22582">䟵</a></li>
                                        <li><a href="22583">䟶</a></li>
                                        <li><a href="22584">䟷</a></li>
                                        <li><a class="color1" href="1295">踊</a>
                                        </li>
                                        <li><a href="22585">䟸</a></li>
                                        <li><a href="22586">䟹</a></li>
                                        <li><a href="22587">䟺</a></li>
                                        <li><a href="22588">䟻</a></li>
                                        <li><a href="4266">跼</a></li>
                                        <li><a href="4267">跿</a></li>
                                        <li><a href="4268">踉</a></li>
                                        <li><a href="6106">踈</a></li>
                                        <li><a href="26840">跶</a></li>
                                        <li><a href="26844">跹</a></li>
                                        <li><a href="26850">踎</a></li>
                                        <li><a href="8391">跽</a></li>
                                        <li><a href="8392">踁</a></li>
                                        <li><a href="8393">踍</a></li>
                                        <li><a href="8394">踆</a></li>
                                        <li><a href="8395">踅</a></li>
                                        <li><a href="8396">踄</a></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts15">
                                   <h3 class="ttl_while"><a href="kakusu15">１５画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="12780">䠊</a></li>
                                        <li><a href="17830">踓</a></li>
                                        <li><a href="17831">踕</a></li>
                                        <li><a href="17832">踗</a></li>
                                        <li><a href="17833">踚</a></li>
                                        <li><a href="17834">踛</a></li>
                                        <li><a href="17835">踜</a></li>
                                        <li><a href="17836">踤</a></li>
                                        <li><a href="17837">踨</a></li>
                                        <li><a href="17838">踩</a></li>
                                        <li><a class="color1" href="1214">踏</a>
                                        </li>
                                        <li><a class="color1" href="2048">踪</a>
                                        </li>
                                        <li><a href="22589">䟼</a></li>
                                        <li><a href="22590">䟾</a></li>
                                        <li><a href="22591">䟿</a></li>
                                        <li><a href="22592">䠀</a></li>
                                        <li><a href="22593">䠁</a></li>
                                        <li><a href="22594">䠂</a></li>
                                        <li><a href="22595">䠃</a></li>
                                        <li><a href="22596">䠄</a></li>
                                        <li><a href="22597">䠅</a></li>
                                        <li><a href="22598">䠆</a></li>
                                        <li><a href="22599">䠇</a></li>
                                        <li><a href="22600">䠈</a></li>
                                        <li><a href="22601">䠉</a></li>
                                        <li><a href="22602">䠋</a></li>
                                        <li><a href="4269">踝</a></li>
                                        <li><a href="4270">踟</a></li>
                                        <li><a href="4271">踞</a></li>
                                        <li><a href="24145">蹃</a></li>
                                        <li><a href="6107">踐</a></li>
                                        <li><a href="26851">踙</a></li>
                                        <li><a href="26854">踭</a></li>
                                        <li><a href="26855">踮</a></li>
                                        <li><a href="27498">䠌</a></li>
                                        <li><a href="8397">踠</a></li>
                                        <li><a href="8398">踑</a></li>
                                        <li><a href="8399">踦</a></li>
                                        <li><a href="8400">踘</a></li>
                                        <li><a href="8401">踡</a></li>
                                        <li><a href="8402">踧</a></li>
                                        <li><a href="8403">踥</a></li>
                                        <li><a href="8404">踖</a></li>
                                        <li><a href="8405">踔</a></li>
                                        <li><a href="8406">踢</a></li>
                                        <li><a href="8408">踣</a></li>
                                        <li><a href="8409">踒</a></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts16">
                                   <h3 class="ttl_while"><a href="kakusu16">１６画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="8414">踹</a></li>
                                        <li><a href="8415">蹀</a></li>
                                        <li><a href="8416">踶</a></li>
                                        <li><a href="8418">蹁</a></li>
                                        <li><a href="17839">踫</a></li>
                                        <li><a href="17840">踲</a></li>
                                        <li><a href="17841">踺</a></li>
                                        <li><a href="17842">踻</a></li>
                                        <li><a href="17843">踼</a></li>
                                        <li><a href="17844">踾</a></li>
                                        <li><a href="17845">踿</a></li>
                                        <li><a href="17846">蹅</a></li>
                                        <li><a class="color2" href="2756">蹄</a>
                                        </li>
                                        <li><a href="22603">䠍</a></li>
                                        <li><a href="22604">䠎</a></li>
                                        <li><a href="22605">䠏</a></li>
                                        <li><a href="22606">䠐</a></li>
                                        <li><a href="22607">䠑</a></li>
                                        <li><a href="22608">䠒</a></li>
                                        <li><a href="22609">䠓</a></li>
                                        <li><a href="22610">䠔</a></li>
                                        <li><a href="4272">蹂</a></li>
                                        <li><a href="4273">踵</a></li>
                                        <li><a href="4274">踰</a></li>
                                        <li><a href="4275">踴</a></li>
                                        <li><a href="22617">䠜</a></li>
                                        <li><a href="8345">䠖</a></li>
                                        <li><a href="26857">踯</a></li>
                                        <li><a href="8365">踸</a></li>
                                        <li><a href="8410">踽</a></li>
                                        <li><a href="8411">踳</a></li>
                                        <li><a href="8412">踷</a></li>
                                        <li><a href="8413">踱</a></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts17">
                                   <h3 class="ttl_while"><a href="kakusu17">１７画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="8417">蹏</a></li>
                                        <li><a href="8419">蹍</a></li>
                                        <li><a href="8420">蹎</a></li>
                                        <li><a href="8421">蹋</a></li>
                                        <li><a href="17847">蹑</a></li>
                                        <li><a href="22611">䠕</a></li>
                                        <li><a href="22612">䠗</a></li>
                                        <li><a href="22613">䠘</a></li>
                                        <li><a href="22614">䠙</a></li>
                                        <li><a href="4276">蹊</a></li>
                                        <li><a href="4277">蹉</a></li>
                                        <li><a href="22616">䠛</a></li>
                                        <li><a href="4278">蹌</a></li>
                                        <li><a href="4279">蹇</a></li>
                                        <li><a href="22618">䠝</a></li>
                                        <li><a href="4280">蹐</a></li>
                                        <li><a href="4281">蹈</a></li>
                                        <li><a href="22622">䠢</a></li>
                                        <li><a href="24146">蹆</a></li>
                                        <li><a href="26858">蹒</a></li>
                                        <li><a href="26859">蹓</a></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts18">
                                   <h3 class="ttl_while"><a href="kakusu18">１８画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="8423">蹞</a></li>
                                        <li><a href="8424">蹔</a></li>
                                        <li><a href="8425">蹝</a></li>
                                        <li><a href="8426">䠞</a></li>
                                        <li><a href="8427">蹜</a></li>
                                        <li><a href="8428">蹡</a></li>
                                        <li><a href="8429">蹛</a></li>
                                        <li><a href="8430">蹢</a></li>
                                        <li><a href="17848">蹖</a></li>
                                        <li><a href="17849">蹗</a></li>
                                        <li><a href="17850">蹘</a></li>
                                        <li><a href="17851">蹚</a></li>
                                        <li><a href="17852">蹥</a></li>
                                        <li><a href="17853">蹦</a></li>
                                        <li><a href="17854">蹧</a></li>
                                        <li><a class="color2" href="2496">蹟</a>
                                        </li>
                                        <li><a href="22615">䠚</a></li>
                                        <li><a href="22619">䠟</a></li>
                                        <li><a href="22620">䠠</a></li>
                                        <li><a href="4282">蹙</a></li>
                                        <li><a href="22621">䠡</a></li>
                                        <li><a href="4283">蹠</a></li>
                                        <li><a href="4284">蹣</a></li>
                                        <li><a href="4285">蹤</a></li>
                                        <li><a href="4286">蹕</a></li>
                                        <li><a href="26863">躀</a></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts19">
                                   <h3 class="ttl_while"><a href="kakusu19">１９画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="8431">蹻</a></li>
                                        <li><a href="8433">蹺</a></li>
                                        <li><a href="8434">蹷</a></li>
                                        <li><a href="8435">蹵</a></li>
                                        <li><a href="8436">蹱</a></li>
                                        <li><a href="8437">蹭</a></li>
                                        <li><a href="8438">蹪</a></li>
                                        <li><a href="8439">䠧</a></li>
                                        <li><a href="8440">蹬</a></li>
                                        <li><a href="8441">蹹</a></li>
                                        <li><a href="8442">蹳</a></li>
                                        <li><a href="8443">蹯</a></li>
                                        <li><a href="8444">蹩</a></li>
                                        <li><a href="8445">䠥</a></li>
                                        <li><a href="8449">躉</a></li>
                                        <li><a href="8452">蹮</a></li>
                                        <li><a href="8454">蹰</a></li>
                                        <li><a href="17855">蹨</a></li>
                                        <li><a href="17856">蹫</a></li>
                                        <li><a class="color1" href="2025">蹴</a>
                                        </li>
                                        <li><a href="22623">䠣</a></li>
                                        <li><a href="22624">䠤</a></li>
                                        <li><a href="22625">䠦</a></li>
                                        <li><a href="4287">蹶</a></li>
                                        <li><a href="4288">蹲</a></li>
                                        <li><a href="4289">蹼</a></li>
                                        <li><a href="4293">躇</a></li>
                                        <li><a href="26860">蹽</a></li>
                                        <li><a href="26861">蹾</a></li>
                                        <li><a href="26862">蹿</a></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts20">
                                   <h3 class="ttl_while"><a href="kakusu20">２０画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="8446">躆</a></li>
                                        <li><a href="8447">躂</a></li>
                                        <li><a href="8459">蹸</a></li>
                                        <li><a href="17857">躈</a></li>
                                        <li><a href="22626">䠨</a></li>
                                        <li><a href="22627">䠩</a></li>
                                        <li><a href="4290">躅</a></li>
                                        <li><a href="4291">躄</a></li>
                                        <li><a href="4292">躁</a></li>
                                        <li><a href="6533">躃</a></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts21">
                                   <h3 class="ttl_while"><a href="kakusu21">２１画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="17859">躎</a></li>
                                        <li><a class="color1" href="1289">躍</a>
                                        </li>
                                        <li><a href="22628">䠪</a></li>
                                        <li><a href="22629">䠫</a></li>
                                        <li><a href="4294">躋</a></li>
                                        <li><a href="4295">躊</a></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts22">
                                   <h3 class="ttl_while"><a href="kakusu22">２２画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="8451">躚</a></li>
                                        <li><a href="8453">躕</a></li>
                                        <li><a href="8455">躐</a></li>
                                        <li><a href="8456">躒</a></li>
                                        <li><a href="17858">躌</a></li>
                                        <li><a href="17860">躖</a></li>
                                        <li><a href="22630">䠬</a></li>
                                        <li><a href="4296">躓</a></li>
                                        <li><a href="4297">躑</a></li>
                                        <li><a href="4301">躔</a></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts23">
                                   <h3 class="ttl_while"><a href="kakusu23">２３画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="8457">躛</a></li>
                                        <li><a href="8458">躘</a></li>
                                        <li><a href="17862">躠</a></li>
                                        <li><a href="22631">䠭</a></li>
                                        <li><a href="22632">䠮</a></li>
                                        <li><a href="4299">躙</a></li>
                                        <li><a href="26864">躗</a></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts24">
                                   <h3 class="ttl_while"><a href="kakusu24">２４画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="8460">躞</a></li>
                                        <li><a href="8461">躝</a></li>
                                        <li><a href="17861">躟</a></li>
                                        <li><a href="17864">躤</a></li>
                                        <li><a href="22633">䠯</a></li>
                                        <li><a href="22634">䠰</a></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts25">
                                   <h3 class="ttl_while"><a href="kakusu25">２５画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="8422">躢</a></li>
                                        <li><a href="17863">躣</a></li>
                                        <li><a href="17865">躥</a></li>
                                        <li><a href="4300">躡</a></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts26">
                                   <h3 class="ttl_while"><a href="kakusu26">２６画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="8462">躧</a></li>
                                        <li><a href="17866">躦</a></li>
                                        <li><a href="4298">躪</a></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts27">
                                   <h3 class="ttl_while"><a href="kakusu27">２７画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="8463">躩</a></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts28">
                                   <h3 class="ttl_while"><a href="kakusu28">２８画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="8448">䠱</a></li>
                                        <li><a href="17867">躨</a></li>
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
                                             <option value="radical157">English</option>
                                             <option value="bushu07005">Japanese</option>
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

<!-- Mirrored from bushu07005 by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Nov 2023 00:41:21 GMT -->

</html>