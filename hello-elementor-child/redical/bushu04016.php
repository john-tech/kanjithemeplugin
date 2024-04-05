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
                    <h1 class="ttl_main">部首：心部（こころ・したごころ・りっしんべん）の漢字</h1>

                    <div class="bushu_about">
                         <div class="bushu_about_box">
                              <h2>心部とは？</h2>
                              <p><strong>心部（しんぶ）は、<span
                                             class="marker">意志や感情など、心の作用に関する字</span>が多く属します。</strong>「心」は「こころ」、偏になった形「忄」を「りっしんべん」、脚（あし）になった形「㣺」を「したごころ」と呼びます。
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
                                        <option value="bushu07007">言 訁（げん）</option>
                                        <option value="bushu03001">子（こ）</option>
                                        <option value="bushu03004">工（こう）</option>
                                        <option value="bushu04032">爻（こう）</option>
                                        <option value="bushu07001">貝（こがい）</option>
                                        <option value="#" selected>心 忄（こころ）</option>
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
                                        <option value="#" selected>心 忄（したごころ）</option>
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
                                        <option value="#" selected>心 忄（りっしんべん）</option>
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
                                   <li><a href="bbushu04016">漢検級順</a></li>
                                   <li><a href="cbushu04016">読み順</a></li>
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
                                   <li><a href="#parts25">25画</a></li>
                                   <li><a href="#parts27">27画</a></li>
                                   <li><a href="#parts28">28画</a></li>
                              </ul>
                         </div><!--search_data-->
                        
                         <h2 class="left_border">部首：心部（こころ・したごころ・りっしんべん）の漢字一覧</h2>
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
                                        <li><a href="11023">忄</a></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts04">
                                   <h3 class="ttl_while"><a href="kakusu04">４画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="kanjiy/25231">忆</a></li>
                                        <li><a href="10950">㣺</a></li>
                                        <li><a class="color1" href="kanji/165">心</a></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts05">
                                   <h3 class="ttl_while"><a href="kakusu05">５画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="kanjiy/14798">忊</a></li>
                                        <li><a class="color1" href="595">必</a></li>
                                        <li><a href="11024">忉</a></li>
                                        <li><a href="11025">忇</a></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts06">
                                   <h3 class="ttl_while"><a href="kakusu06">６画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="kanjiy/25232">忛</a></li>
                                        <li><a href="10954">㣼</a></li>
                                        <li><a href="kanjiy/14797">忈</a></li>
                                        <li><a href="kanjiy/14800">忏</a></li>
                                        <li><a href="kanjiy/14801">忚</a></li>
                                        <li><a class="color1" href="1271">忙</a>
                                        </li>
                                        <li><a href="11026">忋</a></li>
                                        <li><a href="11027">忓</a></li>
                                        <li><a href="11028">忔</a></li>
                                        <li><a href="11029">忕</a></li>
                                        <li><a href="kanjiy/19614">㣻</a></li>
                                        <li><a href="kanjiy/19616">㣾</a></li>
                                        <li><a href="kanjiy/19617">㣿</a></li>
                                        <li><a href="3538">忖</a></li>
                                   </ul>
                              </div>
                         
                              <div class="parts_box" id="parts07">
                                   <h3 class="ttl_while"><a href="kakusu07">７画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="11184">㤇</a></li>
                                        <li><a href="kanjiy/25235">怃</a></li>
                                        <li><a href="kanjiy/25236">怄</a></li>
                                        <li><a href="kanjiy/25237">怆</a></li>
                                        <li><a href="10951">忐</a></li>
                                        <li><a href="10952">忑</a></li>
                                        <li><a href="10953">忒</a></li>
                                        <li><a href="10955">㤀</a></li>
                                        <li><a href="10958">忟</a></li>
                                        <li><a href="kanjiy/14799">忎</a></li>
                                        <li><a href="kanjiy/14803">忦</a></li>
                                        <li><a href="kanjiy/14804">忧</a></li>
                                        <li><a href="kanjiy/14805">忴</a></li>
                                        <li><a href="kanjiy/14806">忹</a></li>
                                        <li><a href="kanjiy/14807">忾</a></li>
                                        <li><a href="kanjiy/14808">怀</a></li>
                                        <li><a class="color1" href="651">応</a></li>
                                        <li><a class="color1" href="661">快</a></li>
                                        <li><a class="color1" href="719">志</a></li>
                                        <li><a class="color1" href="983">忘</a></li>
                                        <li><a class="color1" href="1361">忌</a>
                                        </li>
                                        <li><a href="11030">忨</a></li>
                                        <li><a href="11031">忯</a></li>
                                        <li><a href="11032">忣</a></li>
                                        <li><a href="11033">忺</a></li>
                                        <li><a href="11034">忼</a></li>
                                        <li><a href="11035">忶</a></li>
                                        <li><a href="11036">忮</a></li>
                                        <li><a href="11037">忪</a></li>
                                        <li><a href="11038">忲</a></li>
                                        <li><a href="11039">忡</a></li>
                                        <li><a href="11040">忳</a></li>
                                        <li><a href="11041">忭</a></li>
                                        <li><a href="11042">忬</a></li>
                                        <li><a class="color1" href="1850">忍</a>
                                        </li>
                                        <li><a href="kanjiy/19615">㣽</a></li>
                                        <li><a href="kanjiy/19618">㤃</a></li>
                                        <li><a href="kanjiy/19619">㤄</a></li>
                                        <li><a href="kanjiy/19620">㤆</a></li>
                                        <li><a href="kanjiy/19621">㤈</a></li>
                                        <li><a href="kanjiy/19622">㤉</a></li>
                                        <li><a href="11068">忷</a></li>
                                        <li><a href="kanjiy/19623">㤊</a></li>
                                        <li><a href="kanjiy/19624">㤋</a></li>
                                        <li><a href="3539">忻</a></li>
                                        <li><a href="3540">忤</a></li>
                                        <li><a href="3541">忸</a></li>
                                        <li><a href="3542">忱</a></li>
                                        <li><a href="3581">忰</a></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts08">
                                   <h3 class="ttl_while"><a href="kakusu08">８画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="5960">怐</a></li>
                                        <li><a href="kanjiy/25233">态</a></li>
                                        <li><a href="kanjiy/25234">怂</a></li>
                                        <li><a href="kanjiy/25240">怽</a></li>
                                        <li><a href="kanjiy/25241">怾</a></li>
                                        <li><a href="10956">㤁</a></li>
                                        <li><a href="kanjiy/27100">㤘</a></li>
                                        <li><a href="10957">忞</a></li>
                                        <li><a href="10959">㤂</a></li>
                                        <li><a href="10962">忩</a></li>
                                        <li><a href="kanjiy/14802">忥</a></li>
                                        <li><a href="kanjiy/14809">怈</a></li>
                                        <li><a href="kanjiy/27794">𪫧</a></li>
                                        <li><a href="kanjiy/14810">怉</a></li>
                                        <li><a href="kanjiy/14811">怋</a></li>
                                        <li><a href="kanjiy/14812">怌</a></li>
                                        <li><a href="kanjiy/14813">怑</a></li>
                                        <li><a href="kanjiy/14815">怬</a></li>
                                        <li><a href="kanjiy/14816">怮</a></li>
                                        <li><a href="kanjiy/14817">怰</a></li>
                                        <li><a href="kanjiy/14818">怶</a></li>
                                        <li><a href="10982">㤅</a></li>
                                        <li><a class="color1" href="588">念</a></li>
                                        <li><a class="color1" href="745">性</a></li>
                                        <li><a class="color1" href="946">忠</a></li>
                                        <li><a class="color1" href="1251">怖</a>
                                        </li>
                                        <li><a class="color1" href="1337">怪</a>
                                        </li>
                                        <li><a href="11043">怴</a></li>
                                        <li><a href="11044">怇</a></li>
                                        <li><a href="11045">怳</a></li>
                                        <li><a href="11046">怍</a></li>
                                        <li><a href="11048">怵</a></li>
                                        <li><a href="11049">怚</a></li>
                                        <li><a href="11050">怔</a></li>
                                        <li><a href="11051">怊</a></li>
                                        <li><a href="11052">怗</a></li>
                                        <li><a href="11054">怟</a></li>
                                        <li><a href="11055">怓</a></li>
                                        <li><a href="11056">怢</a></li>
                                        <li><a href="11057">怭</a></li>
                                        <li><a href="11059">怲</a></li>
                                        <li><a href="11060">怞</a></li>
                                        <li><a href="2321">怯</a></li>
                                        <li><a class="color2" href="2424">忽</a>
                                        </li>
                                        <li><a href="kanjiy/19625">㤌</a></li>
                                        <li><a href="kanjiy/19628">㤏</a></li>
                                        <li><a href="kanjiy/19629">㤑</a></li>
                                        <li><a href="kanjiy/19630">㤒</a></li>
                                        <li><a href="kanjiy/19631">㤓</a></li>
                                        <li><a href="kanjiy/19632">㤔</a></li>
                                        <li><a href="kanjiy/19633">㤕</a></li>
                                        <li><a href="kanjiy/19634">㤖</a></li>
                                        <li><a class="color2" href="2998">怜</a>
                                        </li>
                                        <li><a href="11085">忢</a></li>
                                        <li><a href="3543">忝</a></li>
                                        <li><a href="3544">忿</a></li>
                                        <li><a href="3545">怡</a></li>
                                        <li><a href="3546">怙</a></li>
                                        <li><a href="3547">怩</a></li>
                                        <li><a href="3549">怛</a></li>
                                        <li><a href="3550">怕</a></li>
                                        <li><a href="3551">怫</a></li>
                                        <li><a href="3552">怦</a></li>
                                        <li><a href="3553">怏</a></li>
                                        <li><a href="3555">怺</a></li>
                                   </ul>
                              </div>
                         
                              <div class="parts_box" id="parts09">
                                   <h3 class="ttl_while"><a href="kakusu09">９画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="5959">恠</a></li>
                                        <li><a class="color2" href="5962">恆</a>
                                        </li>
                                        <li><a href="kanjiy/25238">总</a></li>
                                        <li><a href="kanjiy/25239">怼</a></li>
                                        <li><a href="kanjiy/25244">恸</a></li>
                                        <li><a href="kanjiy/25245">恹</a></li>
                                        <li><a href="kanjiy/25246">恺</a></li>
                                        <li><a href="kanjiy/25247">恼</a></li>
                                        <li><a href="kanjiy/27102">㤭</a></li>
                                        <li><a href="10960">怘</a></li>
                                        <li><a href="10963">怤</a></li>
                                        <li><a href="10964">㤗</a></li>
                                        <li><a href="10965">㤬</a></li>
                                        <li><a href="kanjiy/27724">𢘑</a></li>
                                        <li><a href="kanjiy/14814">怣</a></li>
                                        <li><a href="kanjiy/14819">怷</a></li>
                                        <li><a href="kanjiy/14820">怸</a></li>
                                        <li><a href="kanjiy/14821">怹</a></li>
                                        <li><a href="kanjiy/14822">恄</a></li>
                                        <li><a href="kanjiy/14823">恎</a></li>
                                        <li><a href="kanjiy/14825">恘</a></li>
                                        <li><a href="kanjiy/14826">恜</a></li>
                                        <li><a href="kanjiy/14827">恞</a></li>
                                        <li><a class="color1" href="kanji/269">急</a></li>
                                        <li><a href="kanjiy/14828">恦</a></li>
                                        <li><a href="kanjiy/14829">恮</a></li>
                                        <li><a class="color1" href="1100">恒</a>
                                        </li>
                                        <li><a class="color1" href="1205">怒</a>
                                        </li>
                                        <li><a class="color1" href="1338">悔</a>
                                        </li>
                                        <li><a class="color1" href="1413">恨</a>
                                        </li>
                                        <li><a class="color1" href="1488">怠</a>
                                        </li>
                                        <li><a href="11053">㤐</a></li>
                                        <li><a class="color1" href="1951">怨</a>
                                        </li>
                                        <li><a href="11061">恗</a></li>
                                        <li><a href="11062">恛</a></li>
                                        <li><a class="color1" href="2134">思</a>
                                        </li>
                                        <li><a href="11063">㤥</a></li>
                                        <li><a class="color2" href="2224">恢</a>
                                        </li>
                                        <li><a class="color2" href="2248">恰</a>
                                        </li>
                                        <li><a href="11067">恑</a></li>
                                        <li><a href="11069">恇</a></li>
                                        <li><a href="11070">㤚</a></li>
                                        <li><a href="11071">恔</a></li>
                                        <li><a href="kanjiy/19626">㤍</a></li>
                                        <li><a href="11072">恀</a></li>
                                        <li><a href="kanjiy/19627">㤎</a></li>
                                        <li><a href="11073">恉</a></li>
                                        <li><a href="11075">㤞</a></li>
                                        <li><a href="11076">恌</a></li>
                                        <li><a href="11077">恈</a></li>
                                        <li><a href="11078">恅</a></li>
                                        <li><a href="11080">恱</a></li>
                                        <li><a href="kanjiy/19635">㤙</a></li>
                                        <li><a href="kanjiy/19636">㤛</a></li>
                                        <li><a href="kanjiy/19637">㤜</a></li>
                                        <li><a href="kanjiy/19638">㤝</a></li>
                                        <li><a href="kanjiy/19641">㤡</a></li>
                                        <li><a href="kanjiy/19642">㤢</a></li>
                                        <li><a href="kanjiy/19643">㤤</a></li>
                                        <li><a href="11091">恾</a></li>
                                        <li><a href="kanjiy/19644">㤦</a></li>
                                        <li><a href="kanjiy/19645">㤧</a></li>
                                        <li><a href="kanjiy/19646">㤨</a></li>
                                        <li><a href="3548">怎</a></li>
                                        <li><a href="11097">恡</a></li>
                                        <li><a href="3554">怱</a></li>
                                        <li><a href="3558">恪</a></li>
                                        <li><a href="3559">恟</a></li>
                                        <li><a href="3560">恊</a></li>
                                        <li><a href="3561">恍</a></li>
                                        <li><a href="11107">恓</a></li>
                                        <li><a href="3562">恃</a></li>
                                        <li><a href="3563">恤</a></li>
                                        <li><a href="3564">恂</a></li>
                                        <li><a href="3565">恬</a></li>
                                        <li><a href="3566">恫</a></li>
                                        <li><a href="11123">恲</a></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts10">
                                   <h3 class="ttl_while"><a href="kakusu10">１０画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="kanjiy/24216">㤺</a></li>
                                        <li><a href="5961">恷</a></li>
                                        <li><a href="5963">悗</a></li>
                                        <li><a class="color2" href="6382">悔</a>
                                        </li>
                                        <li><a href="kanjiy/12476">悓</a></li>
                                        <li><a href="kanjiy/27105">㤼</a></li>
                                        <li><a href="kanjiy/27106">㤽</a></li>
                                        <li><a href="10961">恖</a></li>
                                        <li><a href="10967">恝</a></li>
                                        <li><a href="10968">恧</a></li>
                                        <li><a href="kanjiy/14824">恏</a></li>
                                        <li><a class="color1" href="kanji/350">息</a></li>
                                        <li><a href="kanjiy/14830">恳</a></li>
                                        <li><a href="kanjiy/14831">恴</a></li>
                                        <li><a href="kanjiy/14832">悏</a></li>
                                        <li><a href="kanjiy/14833">悙</a></li>
                                        <li><a href="kanjiy/14834">悜</a></li>
                                        <li><a class="color1" href="653">恩</a></li>
                                        <li><a href="kanjiy/14836">悮</a></li>
                                        <li><a class="color1" href="1066">恐</a>
                                        </li>
                                        <li><a class="color1" href="1078">恵</a>
                                        </li>
                                        <li><a class="color1" href="1185">恥</a>
                                        </li>
                                        <li><a class="color1" href="1223">悩</a>
                                        </li>
                                        <li><a class="color1" href="1314">恋</a>
                                        </li>
                                        <li><a class="color1" href="1323">悦</a>
                                        </li>
                                        <li><a class="color1" href="1395">悟</a>
                                        </li>
                                        <li><a class="color1" href="1659">恭</a>
                                        </li>
                                        <li><a href="11058">悑</a></li>
                                        <li><a class="color1" href="2015">恣</a>
                                        </li>
                                        <li><a href="11065">㤩</a></li>
                                        <li><a class="color2" href="2539">恕</a>
                                        </li>
                                        <li><a class="color2" href="2698">悌</a>
                                        </li>
                                        <li><a href="11079">悅</a></li>
                                        <li><a href="11081">悈</a></li>
                                        <li><a href="11083">悕</a></li>
                                        <li><a href="11084">㤯</a></li>
                                        <li><a href="11086">悞</a></li>
                                        <li><a href="kanjiy/19639">㤟</a></li>
                                        <li><a href="11087">悎</a></li>
                                        <li><a href="kanjiy/19640">㤠</a></li>
                                        <li><a href="11088">悇</a></li>
                                        <li><a href="11090">悂</a></li>
                                        <li><a href="11092">悀</a></li>
                                        <li><a href="kanjiy/19647">㤪</a></li>
                                        <li><a href="11095">悝</a></li>
                                        <li><a href="kanjiy/19648">㤫</a></li>
                                        <li><a href="11096">悢</a></li>
                                        <li><a href="kanjiy/19650">㤱</a></li>
                                        <li><a href="kanjiy/19652">㤳</a></li>
                                        <li><a href="kanjiy/19653">㤴</a></li>
                                        <li><a href="kanjiy/19654">㤶</a></li>
                                        <li><a href="3556">恚</a></li>
                                        <li><a href="kanjiy/19655">㤷</a></li>
                                        <li><a href="3557">恁</a></li>
                                        <li><a href="kanjiy/19656">㤸</a></li>
                                        <li><a href="kanjiy/19657">㤹</a></li>
                                        <li><a href="3567">恙</a></li>
                                        <li><a href="3568">悁</a></li>
                                        <li><a href="3569">悍</a></li>
                                        <li><a href="3570">悃</a></li>
                                        <li><a href="3571">悚</a></li>
                                        <li><a href="3572">悄</a></li>
                                        <li><a href="3573">悛</a></li>
                                        <li><a href="3574">悖</a></li>
                                        <li><a href="3575">悒</a></li>
                                        <li><a href="3576">悧</a></li>
                                        <li><a href="3577">悋</a></li>
                                        <li><a href="11124">㤣</a></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts11">
                                   <h3 class="ttl_while"><a href="kakusu11">１１画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="6541">悤</a></li>
                                        <li><a href="kanjiy/25248">悫</a></li>
                                        <li><a href="kanjiy/25249">悬</a></li>
                                        <li><a href="kanjiy/25252">惬</a></li>
                                        <li><a href="kanjiy/27110">㥗</a></li>
                                        <li><a href="kanjiy/27112">㥘</a></li>
                                        <li><a href="kanjiy/27115">㥙</a></li>
                                        <li><a href="10970">悘</a></li>
                                        <li><a href="10971">您</a></li>
                                        <li><a href="10972">悊</a></li>
                                        <li><a href="10973">悆</a></li>
                                        <li><a href="10974">恿</a></li>
                                        <li><a href="10976">悺</a></li>
                                        <li><a href="10981">㥃</a></li>
                                        <li><a href="10985">㤵</a></li>
                                        <li><a class="color1" href="kanji/240">悪</a></li>
                                        <li><a href="kanjiy/14835">悡</a></li>
                                        <li><a href="kanjiy/14837">悿</a></li>
                                        <li><a href="kanjiy/14839">惃</a></li>
                                        <li><a class="color1" href="740">情</a></li>
                                        <li><a href="kanjiy/14841">惍</a></li>
                                        <li><a href="11007">悥</a></li>
                                        <li><a href="kanjiy/14844">惗</a></li>
                                        <li><a href="kanjiy/14845">惤</a></li>
                                        <li><a href="kanjiy/14846">惦</a></li>
                                        <li><a class="color1" href="1111">惨</a>
                                        </li>
                                        <li><a href="kanjiy/14854">愥</a></li>
                                        <li><a class="color1" href="1468">惜</a>
                                        </li>
                                        <li><a class="color1" href="1637">患</a>
                                        </li>
                                        <li><a href="11047">㤰</a></li>
                                        <li><a class="color1" href="1840">悼</a>
                                        </li>
                                        <li><a class="color1" href="1914">悠</a>
                                        </li>
                                        <li><a class="color1" href="1983">惧</a>
                                        </li>
                                        <li><a class="color2" href="2151">惟</a>
                                        </li>
                                        <li><a class="color2" href="2425">惚</a>
                                        </li>
                                        <li><a class="color2" href="2486">悉</a>
                                        </li>
                                        <li><a class="color2" href="2535">惇</a>
                                        </li>
                                        <li><a href="kanjiy/19649">㤮</a></li>
                                        <li><a href="11098">惐</a></li>
                                        <li><a href="kanjiy/19651">㤲</a></li>
                                        <li><a href="11099">惈</a></li>
                                        <li><a href="11100">惂</a></li>
                                        <li><a href="11101">㥛</a></li>
                                        <li><a href="11102">悾</a></li>
                                        <li><a href="11103">悻</a></li>
                                        <li><a href="11104">惛</a></li>
                                        <li><a href="kanjiy/19658">㤻</a></li>
                                        <li><a href="11106">惝</a></li>
                                        <li><a href="kanjiy/19659">㤾</a></li>
                                        <li><a href="kanjiy/19660">㤿</a></li>
                                        <li><a href="11108">悰</a></li>
                                        <li><a href="kanjiy/19661">㥀</a></li>
                                        <li><a href="11109">惔</a></li>
                                        <li><a href="11110">惕</a></li>
                                        <li><a href="kanjiy/19663">㥂</a></li>
                                        <li><a href="11111">悐</a></li>
                                        <li><a href="kanjiy/19664">㥅</a></li>
                                        <li><a href="11112">惙</a></li>
                                        <li><a href="kanjiy/19665">㥆</a></li>
                                        <li><a href="11113">㥏</a></li>
                                        <li><a href="kanjiy/19666">㥇</a></li>
                                        <li><a href="11115">悱</a></li>
                                        <li><a href="kanjiy/19668">㥉</a></li>
                                        <li><a href="kanjiy/19669">㥊</a></li>
                                        <li><a href="11117">惏</a></li>
                                        <li><a href="11118">惊</a></li>
                                        <li><a href="kanjiy/19671">㥌</a></li>
                                        <li><a href="11119">㥄</a></li>
                                        <li><a href="kanjiy/19672">㥍</a></li>
                                        <li><a href="11120">惀</a></li>
                                        <li><a href="11121">悷</a></li>
                                        <li><a href="11122">惋</a></li>
                                        <li><a href="kanjiy/19676">㥒</a></li>
                                        <li><a href="3578">悸</a></li>
                                        <li><a href="kanjiy/19677">㥓</a></li>
                                        <li><a href="3579">惓</a></li>
                                        <li><a href="kanjiy/19678">㥔</a></li>
                                        <li><a href="3580">悴</a></li>
                                        <li><a href="3582">悽</a></li>
                                        <li><a href="3583">惆</a></li>
                                        <li><a href="3584">悵</a></li>
                                        <li><a href="3585">惘</a></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts12">
                                   <h3 class="ttl_while"><a href="kakusu12">１２画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="11181">惮</a></li>
                                        <li><a class="color2" href="5790">惠</a>
                                        </li>
                                        <li><a href="5827">悳</a></li>
                                        <li><a class="color2" href="5964">惡</a>
                                        </li>
                                        <li><a href="5965">愡</a></li>
                                        <li><a href="6087">惱</a></li>
                                        <li><a href="kanjiy/25251">惫</a></li>
                                        <li><a href="kanjiy/27116">㥪</a></li>
                                        <li><a href="kanjiy/27834">𢛳</a></li>
                                        <li><a href="10975">悹</a></li>
                                        <li><a href="10977">惎</a></li>
                                        <li><a href="10978">惢</a></li>
                                        <li><a href="10979">惉</a></li>
                                        <li><a href="10980">惄</a></li>
                                        <li><a href="10990">惥</a></li>
                                        <li><a class="color1" href="kanji/395">悲</a></li>
                                        <li><a href="kanjiy/14838">惁</a></li>
                                        <li><a href="kanjiy/14840">惌</a></li>
                                        <li><a href="kanjiy/14842">惒</a></li>
                                        <li><a href="kanjiy/14843">惖</a></li>
                                        <li><a href="kanjiy/14847">惩</a></li>
                                        <li><a href="kanjiy/14848">惪</a></li>
                                        <li><a href="kanjiy/14849">惿</a></li>
                                        <li><a href="kanjiy/14850">愄</a></li>
                                        <li><a href="kanjiy/14851">愋</a></li>
                                        <li><a href="kanjiy/14852">愝</a></li>
                                        <li><a href="kanjiy/14853">愣</a></li>
                                        <li><a class="color1" href="1318">惑</a>
                                        </li>
                                        <li><a class="color1" href="1406">慌</a>
                                        </li>
                                        <li><a class="color1" href="1806">惰</a>
                                        </li>
                                        <li><a class="color1" href="1912">愉</a>
                                        </li>
                                        <li><a href="11066">愘</a></li>
                                        <li><a class="color2" href="2492">惹</a>
                                        </li>
                                        <li><a class="color2" href="2657">惣</a>
                                        </li>
                                        <li><a href="2938">悶</a></li>
                                        <li><a href="11093">愑</a></li>
                                        <li><a href="11105">惽</a></li>
                                        <li><a href="kanjiy/19662">㥁</a></li>
                                        <li><a href="11114">㥫</a></li>
                                        <li><a href="kanjiy/19667">㥈</a></li>
                                        <li><a href="kanjiy/19670">㥋</a></li>
                                        <li><a href="kanjiy/19673">㥎</a></li>
                                        <li><a href="kanjiy/19674">㥐</a></li>
                                        <li><a href="kanjiy/19675">㥑</a></li>
                                        <li><a href="11126">愔</a></li>
                                        <li><a href="kanjiy/19679">㥕</a></li>
                                        <li><a href="11127">惲</a></li>
                                        <li><a href="kanjiy/19680">㥖</a></li>
                                        <li><a href="11128">愅</a></li>
                                        <li><a href="kanjiy/19681">㥚</a></li>
                                        <li><a href="kanjiy/19682">㥜</a></li>
                                        <li><a href="11130">愒</a></li>
                                        <li><a href="kanjiy/19683">㥝</a></li>
                                        <li><a href="11131">愌</a></li>
                                        <li><a href="kanjiy/19684">㥞</a></li>
                                        <li><a href="3586">愕</a></li>
                                        <li><a href="11132">愜</a></li>
                                        <li><a href="kanjiy/19685">㥟</a></li>
                                        <li><a href="kanjiy/19686">㥠</a></li>
                                        <li><a href="3588">惶</a></li>
                                        <li><a href="11134">㥥</a></li>
                                        <li><a href="kanjiy/19687">㥡</a></li>
                                        <li><a href="11135">惸</a></li>
                                        <li><a href="kanjiy/19688">㥢</a></li>
                                        <li><a href="3590">愀</a></li>
                                        <li><a href="11136">愢</a></li>
                                        <li><a href="3591">惴</a></li>
                                        <li><a href="11137">愖</a></li>
                                        <li><a class="color2" href="3592">惺</a>
                                        </li>
                                        <li><a href="11138">愞</a></li>
                                        <li><a href="kanjiy/19691">㥧</a></li>
                                        <li><a href="3593">愃</a></li>
                                        <li><a href="3594">惻</a></li>
                                        <li><a href="11140">惾</a></li>
                                        <li><a href="kanjiy/19693">㥩</a></li>
                                        <li><a href="3596">愎</a></li>
                                        <li><a href="11142">惵</a></li>
                                        <li><a href="11143">愓</a></li>
                                        <li><a href="11144">愊</a></li>
                                        <li><a href="11145">惼</a></li>
                                        <li><a href="11146">愐</a></li>
                                        <li><a href="11147">愠</a></li>
                                        <li><a href="11158">愺</a></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts13">
                                   <h3 class="ttl_while"><a href="kakusu13">１３画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="kanjiy/21760">䏋</a></li>
                                        <li><a href="5877">愽</a></li>
                                        <li><a class="color2" href="6088">愼</a>
                                        </li>
                                        <li><a href="11217">愯</a></li>
                                        <li><a href="kanjiy/25255">慑</a></li>
                                        <li><a href="10986">愗</a></li>
                                        <li><a class="color1" href="kanji/243">意</a></li>
                                        <li><a class="color1" href="kanji/262">感</a></li>
                                        <li><a class="color1" href="kanji/347">想</a></li>
                                        <li><a class="color1" href="kanji/440">愛</a></li>
                                        <li><a class="color1" href="1150">慎</a>
                                        </li>
                                        <li><a href="kanjiy/14855">愩</a></li>
                                        <li><a href="kanjiy/14856">愭</a></li>
                                        <li><a href="kanjiy/14857">愮</a></li>
                                        <li><a href="kanjiy/14858">愱</a></li>
                                        <li><a href="kanjiy/14861">慀</a></li>
                                        <li><a href="kanjiy/14862">慃</a></li>
                                        <li><a href="kanjiy/14863">慏</a></li>
                                        <li><a class="color1" href="1341">慨</a>
                                        </li>
                                        <li><a href="kanjiy/14865">慔</a></li>
                                        <li><a class="color1" href="1377">愚</a>
                                        </li>
                                        <li><a class="color1" href="1427">慈</a>
                                        </li>
                                        <li><a class="color1" href="1724">愁</a>
                                        </li>
                                        <li><a class="color1" href="2124">慄</a>
                                        </li>
                                        <li><a href="11064">愙</a></li>
                                        <li><a href="2943">愈</a></li>
                                        <li><a href="11089">愂</a></li>
                                        <li><a href="11094">愹</a></li>
                                        <li><a href="11116">㥱</a></li>
                                        <li><a href="11125">愇</a></li>
                                        <li><a href="3587">愆</a></li>
                                        <li><a href="11133">㥦</a></li>
                                        <li><a href="3589">惷</a></li>
                                        <li><a href="kanjiy/19689">㥣</a></li>
                                        <li><a href="kanjiy/19690">㥤</a></li>
                                        <li><a href="kanjiy/19692">㥨</a></li>
                                        <li><a href="3595">愍</a></li>
                                        <li><a href="kanjiy/19694">㥬</a></li>
                                        <li><a href="kanjiy/19695">㥭</a></li>
                                        <li><a href="3597">慍</a></li>
                                        <li><a href="kanjiy/19696">㥰</a></li>
                                        <li><a href="3599">愾</a></li>
                                        <li><a href="kanjiy/19698">㥳</a></li>
                                        <li><a href="kanjiy/19699">㥴</a></li>
                                        <li><a href="3601">愧</a></li>
                                        <li><a href="kanjiy/19700">㥵</a></li>
                                        <li><a href="3602">慊</a></li>
                                        <li><a href="11148">愪</a></li>
                                        <li><a href="11150">愷</a></li>
                                        <li><a href="3605">愴</a></li>
                                        <li><a href="11152">慉</a></li>
                                        <li><a href="11153">愶</a></li>
                                        <li><a href="kanjiy/19705">㥺</a></li>
                                        <li><a href="11154">愰</a></li>
                                        <li><a href="11155">愲</a></li>
                                        <li><a href="11157">愫</a></li>
                                        <li><a href="kanjiy/19708">㥾</a></li>
                                        <li><a href="11159">慅</a></li>
                                        <li><a href="11160">㥮</a></li>
                                        <li><a href="11161">愵</a></li>
                                        <li><a href="11162">慆</a></li>
                                        <li><a href="kanjiy/19718">㦊</a></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts14">
                                   <h3 class="ttl_while"><a href="kakusu14">１４画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="5876">慘</a></li>
                                        <li><a href="5878">慱</a></li>
                                        <li><a href="5879">慯</a></li>
                                        <li><a href="11216">愳</a></li>
                                        <li><a href="kanjiy/25254">慐</a></li>
                                        <li><a href="kanjiy/27120">㥻</a></li>
                                        <li><a href="kanjiy/27122">㦈</a></li>
                                        <li><a href="10987">㥯</a></li>
                                        <li><a href="10989">慁</a></li>
                                        <li><a href="10993">慽</a></li>
                                        <li><a href="10995">㦅</a></li>
                                        <li><a class="color1" href="665">慣</a></li>
                                        <li><a class="color1" href="769">態</a></li>
                                        <li><a class="color1" href="1278">慢</a>
                                        </li>
                                        <li><a href="kanjiy/14859">愸</a></li>
                                        <li><a href="kanjiy/14860">愻</a></li>
                                        <li><a href="kanjiy/14864">慒</a></li>
                                        <li><a href="kanjiy/14866">慖</a></li>
                                        <li><a href="kanjiy/14868">慛</a></li>
                                        <li><a href="kanjiy/14869">慡</a></li>
                                        <li><a href="kanjiy/14871">慩</a></li>
                                        <li><a href="kanjiy/14872">慪</a></li>
                                        <li><a class="color1" href="1483">憎</a>
                                        </li>
                                        <li><a href="kanjiy/14875">憆</a></li>
                                        <li><a class="color1" href="1551">慕</a>
                                        </li>
                                        <li><a href="11139">憁</a></li>
                                        <li><a href="3598">慇</a></li>
                                        <li><a href="kanjiy/19697">㥲</a></li>
                                        <li><a href="3600">愨</a></li>
                                        <li><a href="kanjiy/19701">㥶</a></li>
                                        <li><a href="3603">愿</a></li>
                                        <li><a href="kanjiy/19702">㥷</a></li>
                                        <li><a href="3604">愬</a></li>
                                        <li><a href="kanjiy/19703">㥸</a></li>
                                        <li><a href="kanjiy/19704">㥹</a></li>
                                        <li><a href="3606">慂</a></li>
                                        <li><a href="kanjiy/19706">㥼</a></li>
                                        <li><a href="3608">慷</a></li>
                                        <li><a href="kanjiy/19707">㥽</a></li>
                                        <li><a href="3610">慚</a></li>
                                        <li><a href="kanjiy/19710">㦀</a></li>
                                        <li><a href="3612">慴</a></li>
                                        <li><a href="3613">慥</a></li>
                                        <li><a href="3614">慟</a></li>
                                        <li><a href="kanjiy/19713">㦃</a></li>
                                        <li><a href="3615">慝</a></li>
                                        <li><a href="11163">慬</a></li>
                                        <li><a href="3616">慓</a></li>
                                        <li><a href="11164">慻</a></li>
                                        <li><a href="kanjiy/19715">㦆</a></li>
                                        <li><a href="3617">慵</a></li>
                                        <li><a href="11165">慠</a></li>
                                        <li><a href="kanjiy/19716">㦇</a></li>
                                        <li><a href="11166">慞</a></li>
                                        <li><a href="11167">憏</a></li>
                                        <li><a href="11168">慲</a></li>
                                        <li><a href="11169">憀</a></li>
                                        <li><a href="11170">慺</a></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts15">
                                   <h3 class="ttl_while"><a href="kakusu15">１５画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="3623">憫</a></li>
                                        <li><a href="11171">憒</a></li>
                                        <li><a href="kanjiy/19722">㦏</a></li>
                                        <li><a href="3624">憮</a></li>
                                        <li><a href="11172">憪</a></li>
                                        <li><a href="kanjiy/19723">㦐</a></li>
                                        <li><a href="11173">憍</a></li>
                                        <li><a href="kanjiy/19724">㦑</a></li>
                                        <li><a href="11174">憢</a></li>
                                        <li><a href="kanjiy/19725">㦒</a></li>
                                        <li><a href="11175">憓</a></li>
                                        <li><a href="kanjiy/19726">㦓</a></li>
                                        <li><a href="11176">憰</a></li>
                                        <li><a href="kanjiy/19727">㦕</a></li>
                                        <li><a href="kanjiy/19728">㦖</a></li>
                                        <li><a href="11179">憱</a></li>
                                        <li><a href="11180">憟</a></li>
                                        <li><a href="11182">憛</a></li>
                                        <li><a href="11183">憭</a></li>
                                        <li><a href="11193">懂</a></li>
                                        <li><a href="6090">憇</a></li>
                                        <li><a class="color2" href="6383">憎</a>
                                        </li>
                                        <li><a href="10988">慤</a></li>
                                        <li><a href="10991">慹</a></li>
                                        <li><a href="10992">慼</a></li>
                                        <li><a href="10994">慸</a></li>
                                        <li><a href="10996">憄</a></li>
                                        <li><a href="10997">憃</a></li>
                                        <li><a href="10998">慜</a></li>
                                        <li><a href="11000">憘</a></li>
                                        <li><a href="11004">憞</a></li>
                                        <li><a href="11005">慿</a></li>
                                        <li><a class="color1" href="1304">慮</a>
                                        </li>
                                        <li><a class="color1" href="1321">慰</a>
                                        </li>
                                        <li><a href="kanjiy/14867">慗</a></li>
                                        <li><a href="kanjiy/14870">慦</a></li>
                                        <li><a href="kanjiy/14873">慭</a></li>
                                        <li><a href="kanjiy/14874">憅</a></li>
                                        <li><a href="kanjiy/14876">憈</a></li>
                                        <li><a class="color1" href="1578">憂</a>
                                        </li>
                                        <li><a href="kanjiy/14877">憉</a></li>
                                        <li><a href="kanjiy/14879">憕</a></li>
                                        <li><a href="kanjiy/14880">憡</a></li>
                                        <li><a href="kanjiy/14881">憣</a></li>
                                        <li><a class="color1" href="1672">慶</a>
                                        </li>
                                        <li><a href="kanjiy/14882">憦</a></li>
                                        <li><a href="kanjiy/14883">憳</a></li>
                                        <li><a href="kanjiy/14886">憽</a></li>
                                        <li><a class="color1" href="1881">憤</a>
                                        </li>
                                        <li><a class="color1" href="1988">憬</a>
                                        </li>
                                        <li><a class="color1" href="2026">憧</a>
                                        </li>
                                        <li><a class="color2" href="2173">慧</a>
                                        </li>
                                        <li><a href="2961">慾</a></li>
                                        <li><a href="11129">㦍</a></li>
                                        <li><a href="11141">憜</a></li>
                                        <li><a href="11149">慨</a></li>
                                        <li><a href="3607">慳</a></li>
                                        <li><a href="3609">慙</a></li>
                                        <li><a href="kanjiy/19709">㥿</a></li>
                                        <li><a href="3611">慫</a></li>
                                        <li><a href="kanjiy/19711">㦁</a></li>
                                        <li><a href="kanjiy/19712">㦂</a></li>
                                        <li><a href="kanjiy/19714">㦄</a></li>
                                        <li><a href="kanjiy/19717">㦉</a></li>
                                        <li><a href="3619">憔</a></li>
                                        <li><a href="3620">憚</a></li>
                                        <li><a href="kanjiy/19719">㦋</a></li>
                                        <li><a href="kanjiy/19721">㦎</a></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts16">
                                   <h3 class="ttl_while"><a href="kakusu16">１６画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="3625">懌</a></li>
                                        <li><a href="3626">懊</a></li>
                                        <li><a href="3627">懈</a></li>
                                        <li><a href="3629">懆</a></li>
                                        <li><a href="3630">憺</a></li>
                                        <li><a href="kanjiy/19729">㦗</a></li>
                                        <li><a href="3632">懍</a></li>
                                        <li><a href="11185">懅</a></li>
                                        <li><a href="11186">憿</a></li>
                                        <li><a href="11187">懁</a></li>
                                        <li><a href="11188">懏</a></li>
                                        <li><a href="11189">憴</a></li>
                                        <li><a href="11190">憸</a></li>
                                        <li><a href="11191">憷</a></li>
                                        <li><a href="11192">懎</a></li>
                                        <li><a href="11194">憹</a></li>
                                        <li><a href="11195">懔</a></li>
                                        <li><a href="11196">懀</a></li>
                                        <li><a href="11198">㦜</a></li>
                                        <li><a href="11204">懞</a></li>
                                        <li><a href="6089">憙</a></li>
                                        <li><a href="kanjiy/27123">㦙</a></li>
                                        <li><a href="kanjiy/27835">𢡛</a></li>
                                        <li><a href="10999">憨</a></li>
                                        <li><a href="11001">憗</a></li>
                                        <li><a href="11002">憠</a></li>
                                        <li><a href="11003">憝</a></li>
                                        <li><a href="11006">憋</a></li>
                                        <li><a class="color1" href="860">憲</a></li>
                                        <li><a href="11008">憥</a></li>
                                        <li><a href="11009">憼</a></li>
                                        <li><a class="color1" href="1026">憶</a>
                                        </li>
                                        <li><a href="11011">㦔</a></li>
                                        <li><a href="11016">懙</a></li>
                                        <li><a class="color1" href="1385">憩</a>
                                        </li>
                                        <li><a class="color1" href="1623">懐</a>
                                        </li>
                                        <li><a href="kanjiy/14878">憌</a></li>
                                        <li><a class="color1" href="1647">憾</a>
                                        </li>
                                        <li><a href="kanjiy/14885">憻</a></li>
                                        <li><a href="kanjiy/14887">懄</a></li>
                                        <li><a href="kanjiy/14888">懓</a></li>
                                        <li><a class="color2" href="3004">憐</a>
                                        </li>
                                        <li><a href="3618">憖</a></li>
                                        <li><a href="3621">憊</a></li>
                                        <li><a href="kanjiy/19720">㦌</a></li>
                                        <li><a href="3622">憑</a></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts17">
                                   <h3 class="ttl_while"><a href="kakusu17">１７画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="3628">懃</a></li>
                                        <li><a href="11177">憯</a></li>
                                        <li><a href="3631">懋</a></li>
                                        <li><a href="kanjiy/19730">㦘</a></li>
                                        <li><a href="3633">懦</a></li>
                                        <li><a class="color2" href="5791">應</a>
                                        </li>
                                        <li><a href="11197">懝</a></li>
                                        <li><a href="11199">懠</a></li>
                                        <li><a href="11200">懧</a></li>
                                        <li><a href="11201">懤</a></li>
                                        <li><a href="11202">懡</a></li>
                                        <li><a href="11203">懜</a></li>
                                        <li><a href="11208">懱</a></li>
                                        <li><a href="kanjiy/27124">㦠</a></li>
                                        <li><a href="kanjiy/27836">𢢫</a></li>
                                        <li><a href="11012">懨</a></li>
                                        <li><a href="11015">㦛</a></li>
                                        <li><a class="color1" href="1695">懇</a>
                                        </li>
                                        <li><a href="kanjiy/14884">憵</a></li>
                                        <li><a href="kanjiy/14890">懗</a></li>
                                        <li><a href="kanjiy/14891">懚</a></li>
                                        <li><a href="kanjiy/14892">懛</a></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts18">
                                   <h3 class="ttl_while"><a href="kakusu18">１８画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="kanjiy/19731">㦚</a></li>
                                        <li><a href="kanjiy/19732">㦝</a></li>
                                        <li><a href="3634">懣</a></li>
                                        <li><a href="kanjiy/19733">㦞</a></li>
                                        <li><a href="kanjiy/19734">㦟</a></li>
                                        <li><a href="kanjiy/19735">㦡</a></li>
                                        <li><a href="3637">懴</a></li>
                                        <li><a href="kanjiy/24217">㦢</a></li>
                                        <li><a href="11205">懭</a></li>
                                        <li><a href="11206">懥</a></li>
                                        <li><a href="11207">懪</a></li>
                                        <li><a href="11209">懮</a></li>
                                        <li><a href="11210">懩</a></li>
                                        <li><a href="11211">懢</a></li>
                                        <li><a href="11212">懰</a></li>
                                        <li><a href="11213">懵</a></li>
                                        <li><a href="kanjiy/25258">懳</a></li>
                                        <li><a href="11010">懕</a></li>
                                        <li><a href="11013">懘</a></li>
                                        <li><a href="11014">懟</a></li>
                                        <li><a class="color1" href="1819">懲</a>
                                        </li>
                                        <li><a href="kanjiy/14889">懖</a></li>
                                        <li><a href="kanjiy/14893">懫</a></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts19">
                                   <h3 class="ttl_while"><a href="kakusu19">１９画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="11178">㦧</a></li>
                                        <li><a href="3635">懶</a></li>
                                        <li><a href="kanjiy/19737">㦥</a></li>
                                        <li><a href="kanjiy/19738">㦦</a></li>
                                        <li><a class="color2" href="6091">懷</a>
                                        </li>
                                        <li><a class="color2" href="6384">懲</a>
                                        </li>
                                        <li><a href="11214">懻</a></li>
                                        <li><a href="11017">懬</a></li>
                                        <li><a href="11018">懯</a></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts20">
                                   <h3 class="ttl_while"><a href="kakusu20">２０画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="3636">懺</a></li>
                                        <li><a href="kanjiy/19736">㦣</a></li>
                                        <li><a href="3639">懽</a></li>
                                        <li><a href="kanjiy/19739">㦨</a></li>
                                        <li><a href="kanjiy/19740">㦩</a></li>
                                        <li><a href="kanjiy/19741">㦪</a></li>
                                        <li><a href="11215">懹</a></li>
                                        <li><a href="11019">㦤</a></li>
                                        <li><a class="color1" href="1678">懸</a>
                                        </li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts21">
                                   <h3 class="ttl_while"><a href="kakusu21">２１画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="3640">懾</a></li>
                                        <li><a href="3641">懼</a></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts22">
                                   <h3 class="ttl_while"><a href="kakusu22">２２画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="3638">懿</a></li>
                                        <li><a href="kanjiy/19742">㦫</a></li>
                                        <li><a href="kanjiy/19743">㦬</a></li>
                                        <li><a href="kanjiy/14894">戂</a></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts23">
                                   <h3 class="ttl_while"><a href="kakusu23">２３画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="5828">戀</a></li>
                                        <li><a href="11218">戄</a></li>
                                        <li><a href="11219">戃</a></li>
                                        <li><a href="11020">戁</a></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts25">
                                   <h3 class="ttl_while"><a href="kakusu25">２５画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="kanjiy/23851">戆</a></li>
                                        <li><a href="11022">戅</a></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts27">
                                   <h3 class="ttl_while"><a href="kakusu27">２７画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="kanjiy/19744">㦭</a></li>
                                   </ul>
                              </div>
                              <div class="parts_box" id="parts28">
                                   <h3 class="ttl_while"><a href="kakusu28">２８画</a></h3>
                                   <ul class="search_parts">
                                        <li><a href="11021">戇</a></li>
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
                                             <option value="radical61">English</option>
                                             <option value="bushu04016">Japanese</option>
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

<!-- Mirrored from bushu04016 by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Nov 2023 00:40:15 GMT -->

</html>