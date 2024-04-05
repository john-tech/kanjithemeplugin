<?php
/*
//  * Template Name: redical1
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
<!-- <div class="contents_bnr link_sp">
<a href="#"><img src="../images/2023_sp_bnr.jpg" alt="今年の漢字"></a>
</div> -->
</div>
</header>
    <script type="text/javascript">$('#target2 #select02').hide();</script>
    <div id="wrapper" class="cf">
      <div id="content">
        <h1 class="ttl_main">部首の画数から検索</h1>

        <div class="bushu_list">
          <div class="search_data bushu_menu">
            <ul class="search_menu two_menu">
              <li>部首の画数から検索</li>
              <li><a href="bushuyomi">部首の読み方から検索</a></li>
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
          </div><!--search_data-->
          <div class="cat_data">
            <h2 class="ttl_sub" id="parts01"><span class="orange">１画</span></h2>
            <ul class="cat_list">
              <li><a href="<?php echo home_url()."/bushu"; ?>"><span class="bold">一</span><span class="normal">いち</span></a></li>
              <li><a href="bushu01002"><span class="bold">乙 乚</span><span class="normal">おつ・おつにょう・つりばり</span></a>
              </li>
              <li><a href="bushu01003"><span class="bold">丨</span><span class="normal">たてぼう・ぼう</span></a></li>
              <li><a href="bushu01004"><span class="bold">丶</span><span class="normal">てん・ちょぼ</span></a></li>
              <li><a href="bushu01005"><span class="bold">亅</span><span class="normal">はねぼう・かぎ</span></a></li>
              <li><a href="bushu01006"><span class="bold">丿</span><span class="normal">の・はらいぼう</span></a></li>
            </ul>
           
            <h2 class="ttl_sub" id="parts02"><span class="orange">２画</span></h2>
            <ul class="cat_list">
              <li><a href="bushu02001"><span class="bold">冂</span><span
                    class="normal">けいがまえ・まきがまえ・えんがまえ・どうがまえ</span></a></li>
              <li><a href="bushu02002"><span class="bold">人 亻</span><span
                    class="normal">ひと・にんべん・ひとがしら・ひとやね</span></a></li>
              <li><a href="bushu02003"><span class="bold">二</span><span class="normal">に</span></a></li>
              <li><a href="bushu02004"><span class="bold">十</span><span class="normal">じゅう</span></a></li>
              <li><a href="bushu02005"><span class="bold">凵</span><span class="normal">かんにょう・うけばこ・かんがまえ</span></a>
              </li>
              <li><a href="bushu02006"><span class="bold">儿</span><span class="normal">にんにょう・ひとあし</span></a></li>
              <li><a href="bushu02007"><span class="bold">入</span><span class="normal">いる・にゅう・いりがしら・いりやね</span></a>
              </li>
              <li><a href="bushu02008"><span class="bold">八</span><span class="normal">はち・はちがしら・は</span></a></li>
              <li><a href="bushu02009"><span class="bold">力</span><span class="normal">ちから</span></a></li>
              <li><a href="bushu02010"><span class="bold">亠</span><span class="normal">なべぶた・けいさんかんむり</span></a>
              </li>
              <li><a href="bushu02011"><span class="bold">厂</span><span class="normal">がんだれ</span></a></li>
              <li><a href="bushu02012"><span class="bold">刀 刂</span><span class="normal">かたな・りっとう</span></a></li>
              <li><a href="bushu02013"><span class="bold">冫</span><span class="normal">にすい</span></a></li>
              <li><a href="bushu02014"><span class="bold">匕</span><span class="normal">ひ・さじ・さじのひ</span></a></li>
              <li><a href="bushu02015"><span class="bold">又</span><span class="normal">また</span></a></li>
              <li><a href="bushu02016"><span class="bold">匸</span><span class="normal">かくしがまえ</span></a></li>
              <li><a href="bushu02017"><span class="bold">厶</span><span class="normal">む</span></a></li>
              <li><a href="bushu02018"><span class="bold">冖</span><span
                    class="normal">わかんむり・ひらかんむり・べきかんむり</span></a></li>
              <li><a href="bushu02019"><span class="bold">卩 㔾</span><span class="normal">ふしづくり・わりふ</span></a></li>
              <li><a href="bushu02020"><span class="bold">勹</span><span class="normal">つつみがまえ</span></a></li>
              <li><a href="bushu02021"><span class="bold">几</span><span
                    class="normal">つくえ・きにょう・かぜかんむり・かぜがまえ・かざがまえ</span></a></li>
              <li><a href="bushu02022"><span class="bold">卜</span><span class="normal">ぼく・ぼくのと・と・うらない</span></a>
              </li>
              <li><a href="bushu02023"><span class="bold">匚</span><span class="normal">はこがまえ</span></a></li>
            </ul>
           
            <h2 class="ttl_sub" id="parts03"><span class="orange">３画</span></h2>
            <ul class="cat_list">
              <li><a href="bushu03001"><span class="bold">子</span><span class="normal">こ・こへん・こども・こどもへん</span></a>
              </li>
              <li><a href="bushu03002"><span class="bold">士</span><span class="normal">さむらい</span></a></li>
              <li><a href="bushu03003"><span class="bold">口</span><span class="normal">くち・くちへん</span></a></li>
              <li><a href="bushu03004"><span class="bold">工</span><span class="normal">え・たくみ・たくみへん・こう</span></a>
              </li>
              <li><a href="bushu03005"><span class="bold">山</span><span class="normal">やま・やまへん・やまかんむり</span></a>
              </li>
              <li><a href="bushu03006"><span class="bold">囗</span><span class="normal">くにがまえ</span></a></li>
              <li><a href="bushu03007"><span class="bold">女</span><span class="normal">おんな・おんなへん</span></a></li>
              <li><a href="bushu03008"><span class="bold">小</span><span class="normal">しょう・しょうがしら・なおがしら</span></a>
              </li>
              <li><a href="bushu03009"><span class="bold">夕</span><span class="normal">ゆうべ・ゆう・た</span></a></li>
              <li><a href="bushu03010"><span class="bold">巛 川</span><span class="normal">かわ・まげかわ・まがりがわ</span></a>
              </li>
              <li><a href="bushu03011"><span class="bold">大</span><span class="normal">だい</span></a></li>
              <li><a href="bushu03012"><span class="bold">土</span><span class="normal">つち・つちへん・どへん</span></a></li>
              <li><a href="bushu03013"><span class="bold">干</span><span class="normal">かん・いちじゅう・ほす</span></a></li>
              <li><a href="bushu03014"><span class="bold">弓</span><span class="normal">ゆみ・ゆみへん</span></a></li>
              <li><a href="bushu03015"><span class="bold">辵 辶</span><span class="normal">しんにょう・しんにゅう</span></a>
              </li>
              <li><a href="bushu03016"><span class="bold">宀</span><span class="normal">うかんむり</span></a></li>
              <li><a href="bushu03017"><span class="bold">夂 夊</span><span
                    class="normal">ふゆがしら・ち・すいにょう・なつあし</span></a></li>
              <li><a href="bushu03019"><span class="bold">巾</span><span class="normal">はば・はばへん・きんべん</span></a></li>
              <li><a href="bushu03020"><span class="bold">彡</span><span class="normal">さんづくり</span></a></li>
              <li><a href="bushu03021"><span class="bold">彳</span><span class="normal">ぎょうにんべん</span></a></li>
              <li><a href="bushu03022"><span class="bold">广</span><span class="normal">まだれ</span></a></li>
              <li><a href="bushu03023"><span class="bold">寸</span><span class="normal">すん・すんづくり</span></a></li>
              <li><a href="bushu03024"><span class="bold">阜 阝</span><span class="normal">こざと・こざとへん・おか</span></a>
              </li>
              <li><a href="bushu03025"><span class="bold">尸</span><span
                    class="normal">しかばね・かばね・しかばねだれ・しかばねかんむり・かばねだれ</span></a></li>
              <li><a href="bushu03026"><span class="bold">弋</span><span class="normal">しきがまえ・よく</span></a></li>
              <li><a href="bushu03027"><span class="bold">邑 阝</span><span class="normal">おおざと・むら</span></a></li>
              <li><a href="bushu03028"><span class="bold">廴</span><span class="normal">えんにょう・いんにょう</span></a></li>
              <li><a href="bushu03029"><span class="bold">⺍</span><span class="normal">つ・つかんむり</span></a></li>
              <li><a href="bushu03030"><span class="bold">廾</span><span class="normal">にじゅうあし・こまぬき</span></a></li>
              <li><a href="bushu03031"><span class="bold">己 巳 已</span><span class="normal">おのれ</span></a></li>
              <li><a href="bushu03032"><span class="bold">尢 尣</span><span
                    class="normal">だいのまげあし・まげあし・おうにょう</span></a></li>
              <li><a href="bushu03033"><span class="bold">幺</span><span class="normal">いとがしら・よう</span></a></li>
              <li><a href="bushu03034"><span class="bold">屮</span><span class="normal">てつ・めばえ・くさのめ</span></a></li>
              <li><a href="bushu03035"><span class="bold">彑 彐</span><span class="normal">けいがしら・いのこがしら</span></a>
              </li>
              <li><a href="bushu04003"><span class="bold">犬 犭</span><span class="normal">いぬ・けものへん</span></a></li>
              <li><a href="bushu04005"><span class="bold">手 扌</span><span class="normal">て・てへん</span></a></li>
              <li><a href="bushu04007"><span class="bold">水 氵 氺</span><span class="normal">みず・さんずい・したみず</span></a>
              </li>
              <li><a href="bushu04016"><span class="bold">心 忄</span><span
                    class="normal">こころ・したごころ・りっしんべん</span></a></li>
              <li><a href="bushu06001"><span class="bold">艸 艹</span><span class="normal">くさ・くさかんむり・そうこう</span></a>
              </li>
            </ul>
            <h2 class="ttl_sub" id="parts04"><span class="orange">４画</span></h2>
            <ul class="cat_list">
              <li><a href="bushu03015"><span class="bold">辵 辶</span><span class="normal">しんにょう・しんにゅう</span></a>
              </li>
              <li><a href="bushu03032"><span class="bold">尢 尣</span><span
                    class="normal">だいのまげあし・まげあし・おうにょう</span></a></li>
              <li><a href="bushu04001"><span class="bold">火 灬</span><span class="normal">ひ・ひへん・れっか・れんが</span></a>
              </li>
              <li><a href="bushu04002"><span class="bold">气</span><span class="normal">きがまえ</span></a></li>
              <li><a href="bushu04003"><span class="bold">犬 犭</span><span class="normal">いぬ・けものへん</span></a></li>
              <li><a href="bushu04004"><span class="bold">木</span><span class="normal">き・きへん</span></a></li>
              <li><a href="bushu04005"><span class="bold">手 扌</span><span class="normal">て・てへん</span></a></li>
              <li><a href="bushu04006"><span class="bold">止</span><span class="normal">とめる・とめへん</span></a></li>
              <li><a href="bushu04007"><span class="bold">水 氵 氺</span><span class="normal">みず・さんずい・したみず</span></a>
              </li>
              <li><a href="bushu04008"><span class="bold">日</span><span class="normal">ひ・ひへん・にち・にちへん</span></a>
              </li>
              <li><a href="bushu04009"><span class="bold">文</span><span class="normal">ぶん・ぶんにょう</span></a></li>
              <li><a href="bushu04010"><span class="bold">欠</span><span class="normal">あくび・かける・けんづくり</span></a>
              </li>
              <li><a href="bushu04011"><span class="bold">牛 牜</span><span class="normal">うし・うしへん</span></a></li>
              <li><a href="bushu04012"><span class="bold">攴 攵</span><span
                    class="normal">ぼくにょう・ぼくづくり・とまた・のぶん</span></a></li>
              <li><a href="bushu04013"><span class="bold">戶 戸</span><span
                    class="normal">と・とだれ・とかんむり・とびらのと</span></a></li>
              <li><a href="bushu04014"><span class="bold">曰</span><span class="normal">いわく・ひらび</span></a></li>
              <li><a href="bushu04015"><span class="bold">斤</span><span class="normal">おのづくり・おの・きん</span></a></li>
              <li><a href="bushu04016"><span class="bold">心 忄</span><span
                    class="normal">こころ・したごころ・りっしんべん</span></a></li>
              <li><a href="bushu04017"><span class="bold">月</span><span class="normal">つき・つきへん</span></a></li>
              <li><a href="bushu04018"><span class="bold">父</span><span class="normal">ちち</span></a></li>
              <li><a href="bushu04019"><span class="bold">毋 母</span><span class="normal">なかれ・ははのかん・はは</span></a>
              </li>
              <li><a href="bushu04020"><span class="bold">方</span><span class="normal">ほう・ほうへん・かたへん</span></a></li>
              <li><a href="bushu04021"><span class="bold">毛</span><span class="normal">け</span></a></li>
              <li><a href="bushu04022"><span class="bold">歹 歺</span><span
                    class="normal">がつ・がつへん・いちたへん・かばねへん</span></a></li>
              <li><a href="bushu04023"><span class="bold">殳</span><span class="normal">ほこづくり・るまた</span></a></li>
              <li><a href="bushu04024"><span class="bold">氏</span><span class="normal">うじ</span></a></li>
              <li><a href="bushu04025"><span class="bold">戈</span><span
                    class="normal">ほこづくり・ほこがまえ・ほこ・かのほこ</span></a></li>
              <li><a href="bushu04026"><span class="bold">斗</span><span class="normal">とます・と</span></a></li>
              <li><a href="bushu04027"><span class="bold">支</span><span
                    class="normal">し・しにょう・えだにょう・じゅうまた</span></a></li>
              <li><a href="bushu04028"><span class="bold">片</span><span class="normal">かた・かたへん</span></a></li>
              <li><a href="bushu04029"><span class="bold">比</span><span class="normal">くらべる・ならびひ</span></a></li>
              <li><a href="bushu04030"><span class="bold">爪 爫</span><span
                    class="normal">つめ・つめかんむり・つめがしら・そうにょう・のつ</span></a></li>
              <li><a href="bushu04031"><span class="bold">牙</span><span class="normal">きば・きばへん</span></a></li>
              <li><a href="bushu04032"><span class="bold">爻</span><span class="normal">こう・まじわる・めめ</span></a></li>
              <li><a href="bushu04033"><span class="bold">爿</span><span class="normal">しょうへん</span></a></li>
              <li><a href="bushu05001"><span class="bold">玉 王 ⺩</span><span class="normal">たま・たまへん・おうへん</span></a>
              </li>
              <li><a href="bushu05011"><span class="bold">示 礻</span><span class="normal">しめす・しめすへん・ねへん</span></a>
              </li>
              <li><a href="bushu05021"><span class="bold">无 旡</span><span
                    class="normal">む・むにょう・ぶ・なし・すでのつくり</span></a></li>
              <li><a href="bushu06001"><span class="bold">艸 艹</span><span class="normal">くさ・くさかんむり・そうこう</span></a>
              </li>
              <li><a href="bushu06007"><span class="bold">老 耂</span><span class="normal">おいかんむり・おいがしら・おい</span></a>
              </li>
              <li><a href="bushu06013"><span class="bold">肉 月</span><span class="normal">にく・にくづき</span></a></li>
              <li><a href="bushu06018"><span class="bold">网 罒 㓁</span><span class="normal">あみがしら・あみめ</span></a>
              </li>
            </ul>
            <h2 class="ttl_sub" id="parts05"><span class="orange">５画</span></h2>
            <ul class="cat_list">
              <li><a href="bushu04007"><span class="bold">水 氵 氺</span><span class="normal">みず・さんずい・したみず</span></a>
              </li>
              <li><a href="bushu04019"><span class="bold">毋 母</span><span class="normal">なかれ・ははのかん・はは</span></a>
              </li>
              <li><a href="bushu04022"><span class="bold">歹 歺</span><span
                    class="normal">がつ・がつへん・いちたへん・かばねへん</span></a></li>
              <li><a href="bushu04031"><span class="bold">牙</span><span class="normal">きば・きばへん</span></a></li>
              <li><a href="bushu05001"><span class="bold">玉 王 ⺩</span><span class="normal">たま・たまへん・おうへん</span></a>
              </li>
              <li><a href="bushu05002"><span class="bold">穴</span><span class="normal">あな・あなかんむり</span></a></li>
              <li><a href="bushu05003"><span class="bold">生</span><span class="normal">いきる・うまれる</span></a></li>
              <li><a href="bushu05004"><span class="bold">石</span><span class="normal">いし・いしへん</span></a></li>
              <li><a href="bushu05005"><span class="bold">田</span><span class="normal">た・たへん</span></a></li>
              <li><a href="bushu05006"><span class="bold">白</span><span class="normal">しろ・しろへん</span></a></li>
              <li><a href="bushu05007"><span class="bold">目 罒</span><span class="normal">め・めへん</span></a></li>
              <li><a href="bushu05008"><span class="bold">立</span><span class="normal">たつ・たつへん</span></a></li>
              <li><a href="bushu05009"><span class="bold">禾</span><span class="normal">のぎ・のぎへん</span></a></li>
              <li><a href="bushu05010"><span class="bold">矢</span><span class="normal">や・やへん</span></a></li>
              <li><a href="bushu05011"><span class="bold">示 礻</span><span class="normal">しめす・しめすへん・ねへん</span></a>
              </li>
              <li><a href="bushu05012"><span class="bold">用</span><span class="normal">もちいる</span></a></li>
              <li><a href="bushu05013"><span class="bold">皿</span><span class="normal">さら</span></a></li>
              <li><a href="bushu05014"><span class="bold">癶</span><span class="normal">はつがしら</span></a></li>
              <li><a href="bushu05015"><span class="bold">皮</span><span class="normal">けがわ・ひのかわ</span></a></li>
              <li><a href="bushu05016"><span class="bold">疒</span><span class="normal">やまいだれ</span></a></li>
              <li><a href="bushu05017"><span class="bold">玄</span><span class="normal">げん</span></a></li>
              <li><a href="bushu05018"><span class="bold">疋</span><span class="normal">ひき・ひきへん</span></a></li>
              <li><a href="bushu05019"><span class="bold">甘</span><span class="normal">あまい・かん</span></a></li>
              <li><a href="bushu05020"><span class="bold">矛</span><span class="normal">ほこ・ほこへん・むのほこ</span></a></li>
              <li><a href="bushu05021"><span class="bold">无 旡</span><span
                    class="normal">む・むにょう・ぶ・なし・すでのつくり</span></a></li>
              <li><a href="bushu05022"><span class="bold">瓦</span><span class="normal">かわら</span></a></li>
              <li><a href="bushu05023"><span class="bold">禸</span><span class="normal">ぐうのあし・じゅう・じゅうのあし</span></a>
              </li>
              <li><a href="bushu06017"><span class="bold">衣 衤</span><span class="normal">ころも・ころもへん</span></a></li>
              <li><a href="bushu06018"><span class="bold">网 罒 㓁</span><span class="normal">あみがしら・あみめ</span></a>
              </li>
              <li><a href="bushu06028"><span class="bold">瓜</span><span class="normal">うり</span></a></li>
            </ul>
            <h2 class="ttl_sub" id="parts06"><span class="orange">６画</span></h2>
            <ul class="cat_list">
              <li><a href="bushu06001"><span class="bold">艸 艹</span><span class="normal">くさ・くさかんむり・そうこう</span></a>
              </li>
              <li><a href="bushu06002"><span class="bold">糸</span><span class="normal">いと・いとへん</span></a></li>
              <li><a href="bushu06003"><span class="bold">耳</span><span class="normal">みみ・みみへん</span></a></li>
              <li><a href="bushu06004"><span class="bold">竹</span><span class="normal">たけ・たけかんむり</span></a></li>
              <li><a href="bushu06005"><span class="bold">虫</span><span class="normal">むし・むしへん</span></a></li>
              <li><a href="bushu06006"><span class="bold">羽 羽</span><span class="normal">はね</span></a></li>
              <li><a href="bushu06007"><span class="bold">老 耂</span><span class="normal">おいかんむり・おいがしら・おい</span></a>
              </li>
              <li><a href="bushu06008"><span class="bold">行</span><span class="normal">ぎょう・ぎょうがまえ・ゆきがまえ</span></a>
              </li>
              <li><a href="bushu06009"><span class="bold">自</span><span class="normal">みずから</span></a></li>
              <li><a href="bushu06010"><span class="bold">色</span><span class="normal">いろ</span></a></li>
              <li><a href="bushu06011"><span class="bold">襾 西 覀</span><span
                    class="normal">おおいかんむり・にし・かなめのかしら</span></a></li>
              <li><a href="bushu06012"><span class="bold">舟</span><span class="normal">ふね・ふねへん</span></a></li>
              <li><a href="bushu06013"><span class="bold">肉 月</span><span class="normal">にく・にくづき</span></a></li>
              <li><a href="bushu06014"><span class="bold">米</span><span class="normal">こめ・こめへん</span></a></li>
              <li><a href="bushu06015"><span class="bold">血</span><span class="normal">ち・ちへん</span></a></li>
              <li><a href="bushu06016"><span class="bold">羊 ⺷</span><span class="normal">ひつじ・ひつじへん</span></a></li>
              <li><a href="bushu06017"><span class="bold">衣 衤</span><span class="normal">ころも・ころもへん</span></a></li>
              <li><a href="bushu06018"><span class="bold">网 罒 㓁</span><span class="normal">あみがしら・あみめ</span></a>
              </li>
              <li><a href="bushu06019"><span class="bold">艮</span><span
                    class="normal">うしとら・こん・こんづくり・ねづくり</span></a></li>
              <li><a href="bushu06020"><span class="bold">耒</span><span class="normal">らいすき・すきへん</span></a></li>
              <li><a href="bushu06021"><span class="bold">臼</span><span class="normal">うす</span></a></li>
              <li><a href="bushu06022"><span class="bold">舌</span><span class="normal">した・したへん</span></a></li>
              <li><a href="bushu06023"><span class="bold">至</span><span class="normal">いたる・いたるへん</span></a></li>
              <li><a href="bushu06024"><span class="bold">而</span><span class="normal">しこうして・しかして</span></a></li>
              <li><a href="bushu06025"><span class="bold">虍</span><span class="normal">とらかんむり・とらがしら・とら</span></a>
              </li>
              <li><a href="bushu06026"><span class="bold">缶</span><span class="normal">ほとぎ・ほとぎへん</span></a></li>
              <li><a href="bushu06027"><span class="bold">聿</span><span class="normal">ふで・ふでづくり</span></a></li>
              <li><a href="bushu06028"><span class="bold">瓜</span><span class="normal">うり</span></a></li>
              <li><a href="bushu07017"><span class="bold">臣</span><span class="normal">しん</span></a></li>
              <li><a href="bushu07019"><span class="bold">舛</span><span class="normal">まいあし・ます</span></a></li>
              <li><a href="bushu09002"><span class="bold">頁</span><span class="normal">おおがい・いちのかい</span></a></li>
            </ul>
            <h2 class="ttl_sub" id="parts07"><span class="orange">７画</span></h2>
            <ul class="cat_list">
              <li><a href="bushu03015"><span class="bold">辵 辶</span><span class="normal">しんにょう・しんにゅう</span></a>
              </li>
              <li><a href="bushu03027"><span class="bold">邑 阝</span><span class="normal">おおざと・むら</span></a></li>
              <li><a href="bushu06021"><span class="bold">臼</span><span class="normal">うす</span></a></li>
              <li><a href="bushu07001"><span class="bold">貝</span><span class="normal">かい・かいへん・こがい</span></a></li>
              <li><a href="bushu07002"><span class="bold">見</span><span class="normal">みる</span></a></li>
              <li><a href="bushu07003"><span class="bold">車</span><span class="normal">くるま・くるまへん</span></a></li>
              <li><a href="bushu07004"><span class="bold">赤</span><span class="normal">あか・あかへん</span></a></li>
              <li><a href="bushu07005"><span class="bold">足</span><span class="normal">あし・あしへん</span></a></li>
              <li><a href="bushu07006"><span class="bold">角</span><span class="normal">つの・つのへん・かく</span></a></li>
              <li><a href="bushu07007"><span class="bold">言 訁</span><span class="normal">げん・ごんべん・ことば</span></a>
              </li>
              <li><a href="bushu07008"><span class="bold">谷</span><span class="normal">たに・たにへん</span></a></li>
              <li><a href="bushu07009"><span class="bold">走</span><span class="normal">はしる・そうにょう</span></a></li>
              <li><a href="bushu07010"><span class="bold">里</span><span class="normal">さと・さとへん</span></a></li>
              <li><a href="bushu07011"><span class="bold">酉</span><span
                    class="normal">ひよみのとり・とりへん・さけのとり・こよみのとり</span></a></li>
              <li><a href="bushu07012"><span class="bold">身</span><span class="normal">み・みへん</span></a></li>
              <li><a href="bushu07013"><span class="bold">豆</span><span class="normal">まめ・まめへん</span></a></li>
              <li><a href="bushu07014"><span class="bold">辰</span><span class="normal">たつ・しんのたつ</span></a></li>
              <li><a href="bushu07015"><span class="bold">辛</span><span class="normal">しん・からい</span></a></li>
              <li><a href="bushu07016"><span class="bold">豕</span><span class="normal">いのこ・いのこへん・ぶた</span></a></li>
              <li><a href="bushu07017"><span class="bold">臣</span><span class="normal">しん</span></a></li>
              <li><a href="bushu07018"><span class="bold">釆</span><span class="normal">のごめ・のごめへん</span></a></li>
              <li><a href="bushu07019"><span class="bold">舛</span><span class="normal">まいあし・ます</span></a></li>
              <li><a href="bushu07020"><span class="bold">豸</span><span class="normal">むじな・むじなへん</span></a></li>
              <li><a href="bushu11005"><span class="bold">麥 麦</span><span class="normal">むぎ・むぎへん・ばくにょう</span></a>
              </li>
            </ul>
            <h2 class="ttl_sub" id="parts08"><span class="orange">８画</span></h2>
            <ul class="cat_list">
              <li><a href="bushu03024"><span class="bold">阜 阝</span><span class="normal">こざと・こざとへん・おか</span></a>
              </li>
              <li><a href="bushu08001"><span class="bold">雨</span><span class="normal">あめ・あめかんむり・あまかんむり</span></a>
              </li>
              <li><a href="bushu08002"><span class="bold">金 釒</span><span class="normal">かね・かねへん</span></a></li>
              <li><a href="bushu08003"><span class="bold">靑 青</span><span class="normal">あお・あおへん</span></a></li>
              <li><a href="bushu08004"><span class="bold">門</span><span class="normal">もん・もんがまえ・かどがまえ</span></a>
              </li>
              <li><a href="bushu08005"><span class="bold">長</span><span class="normal">ながい</span></a></li>
              <li><a href="bushu08006"><span class="bold">隹</span><span class="normal">ふるとり</span></a></li>
              <li><a href="bushu08007"><span class="bold">非</span><span class="normal">あらず・ひ</span></a></li>
              <li><a href="bushu08008"><span class="bold">隶</span><span class="normal">たい・れいづくり</span></a></li>
              <li><a href="bushu08009"><span class="bold">齊 斉</span><span class="normal">せい</span></a></li>
              <li><a href="bushu09004"><span class="bold">食 飠</span><span class="normal">しょく・しょくへん</span></a></li>
            </ul>
            <h2 class="ttl_sub" id="parts09"><span class="orange">９画</span></h2>
            <ul class="cat_list">
              <li><a href="bushu09001"><span class="bold">音</span><span class="normal">おと・おとへん</span></a></li>
              <li><a href="bushu09002"><span class="bold">頁</span><span class="normal">おおがい・いちのかい</span></a></li>
              <li><a href="bushu09003"><span class="bold">首</span><span class="normal">くび</span></a></li>
              <li><a href="bushu09004"><span class="bold">食 飠</span><span class="normal">しょく・しょくへん</span></a></li>
              <li><a href="bushu09005"><span class="bold">風</span><span class="normal">かぜ</span></a></li>
              <li><a href="bushu09006"><span class="bold">面</span><span class="normal">めん・おもて</span></a></li>
              <li><a href="bushu09007"><span class="bold">飛</span><span class="normal">とぶ</span></a></li>
              <li><a href="bushu09008"><span class="bold">革</span><span class="normal">かわへん・かくのかわ・つくりがわ</span></a>
              </li>
              <li><a href="bushu09009"><span class="bold">香</span><span class="normal">かおり・か</span></a></li>
              <li><a href="bushu09010"><span class="bold">韭</span><span class="normal">にら</span></a></li>
              <li><a href="bushu10007"><span class="bold">韋</span><span class="normal">なめしがわ</span></a></li>
            </ul>
            <h2 class="ttl_sub" id="parts10"><span class="orange">１０画</span></h2>
            <ul class="cat_list">
              <li><a href="bushu10001"><span class="bold">高</span><span class="normal">たかい</span></a></li>
              <li><a href="bushu10002"><span class="bold">馬</span><span class="normal">うま・うまへん</span></a></li>
              <li><a href="bushu10003"><span class="bold">骨</span><span class="normal">ほね・ほねへん</span></a></li>
              <li><a href="bushu10004"><span class="bold">鬼</span><span class="normal">おに・きにょう</span></a></li>
              <li><a href="bushu10005"><span class="bold">髟</span><span class="normal">かみがしら・かみかんむり</span></a></li>
              <li><a href="bushu10006"><span class="bold">鬯</span><span class="normal">ちょう・においざけ</span></a></li>
              <li><a href="bushu10007"><span class="bold">韋</span><span class="normal">なめしがわ</span></a></li>
              <li><a href="bushu10008"><span class="bold">鬥</span><span class="normal">とうがまえ・たたかいがまえ</span></a>
              </li>
              <li><a href="bushu10009"><span class="bold">鬲</span><span class="normal">かなえ・れき</span></a></li>
              <li><a href="bushu16001"><span class="bold">龍 竜</span><span class="normal">りゅう・たつ</span></a></li>
            </ul>
            <h2 class="ttl_sub" id="parts11"><span class="orange">１１画</span></h2>
            <ul class="cat_list">
              <li><a href="bushu11001"><span class="bold">魚</span><span class="normal">うお・うおへん・さかなへん</span></a>
              </li>
              <li><a href="bushu11002"><span class="bold">黃 黄</span><span class="normal">き・きいろ</span></a></li>
              <li><a href="bushu11003"><span class="bold">黑 黒</span><span class="normal">くろ・くろへん</span></a></li>
              <li><a href="bushu11004"><span class="bold">鳥</span><span class="normal">とり・とりへん</span></a></li>
              <li><a href="bushu11005"><span class="bold">麥 麦</span><span class="normal">むぎ・むぎへん・ばくにょう</span></a>
              </li>
              <li><a href="bushu11006"><span class="bold">鹿</span><span class="normal">しか・しかへん</span></a></li>
              <li><a href="bushu11007"><span class="bold">麻</span><span class="normal">あさ・あさかんむり</span></a></li>
              <li><a href="bushu11008"><span class="bold">鹵</span><span class="normal">ろ・しお・しおへん</span></a></li>
              <li><a href="bushu16002"><span class="bold">龜 亀</span><span class="normal">かめ</span></a></li>
            </ul>
            <h2 class="ttl_sub" id="parts12"><span class="orange">１２画</span></h2>
            <ul class="cat_list">
              <li><a href="bushu11002"><span class="bold">黃 黄</span><span class="normal">き・きいろ</span></a></li>
              <li><a href="bushu11003"><span class="bold">黑 黒</span><span class="normal">くろ・くろへん</span></a></li>
              <li><a href="bushu12001"><span class="bold">齒 歯</span><span class="normal">は・はへん</span></a></li>
              <li><a href="bushu12002"><span class="bold">黍</span><span class="normal">きび</span></a></li>
              <li><a href="bushu12003"><span class="bold">黹</span><span class="normal">ち・ぬいとり・ふつへん</span></a></li>
            </ul>
            <h2 class="ttl_sub" id="parts13"><span class="orange">１３画</span></h2>
            <ul class="cat_list">
              <li><a href="bushu13001"><span class="bold">鼓</span><span class="normal">つづみ</span></a></li>
              <li><a href="bushu13002"><span class="bold">鼠</span><span class="normal">ねずみ・ねずみへん</span></a></li>
              <li><a href="bushu13003"><span class="bold">鼎</span><span class="normal">かなえ</span></a></li>
              <li><a href="bushu13004"><span class="bold">黽</span><span class="normal">べん・かえるべんあし</span></a></li>
            </ul>
            <h2 class="ttl_sub" id="parts14"><span class="orange">１４画</span></h2>
            <ul class="cat_list">
              <li><a href="bushu08009"><span class="bold">齊 斉</span><span class="normal">せい</span></a></li>
              <li><a href="bushu14001"><span class="bold">鼻</span><span class="normal">はな・はなへん</span></a></li>
            </ul>
            <h2 class="ttl_sub" id="parts15"><span class="orange">１５画</span></h2>
            <ul class="cat_list">
              <li><a href="bushu12001"><span class="bold">齒 歯</span><span class="normal">は・はへん</span></a></li>
            </ul>
            <h2 class="ttl_sub" id="parts16"><span class="orange">１６画</span></h2>
            <ul class="cat_list">
              <li><a href="bushu16001"><span class="bold">龍 竜</span><span class="normal">りゅう・たつ</span></a></li>
              <li><a href="bushu16002"><span class="bold">龜 亀</span><span class="normal">かめ</span></a></li>
            </ul>
            <h2 class="ttl_sub" id="parts17"><span class="orange">１７画</span></h2>
            <ul class="cat_list">
              <li><a href="bushu17001"><span class="bold">龠</span><span class="normal">やく・やくのふえ</span></a></li>
            </ul>
          </div><!--data_cont-->
        </div><!--bushu_list-->
      </div><!--content-->
      <aside>
        <div id="sidebar" data-nosnippet>

        
          <div class="side_bnr link_pc">
            <a href="#"><img src="../images/2023_side_bnr.jpg"
                alt="今年の漢字"></a>
          </div>
          <div class="side_bnr link_sp">
            <a href="#"><img src="../images/2023_sp_bnr.jpg"
                alt="今年の漢字"></a>
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
                  <li><a href="kanji/059" title="漢字「中」のページ"><span
                        class="rank">1</span><span class="jp">中</span></a></li>
                  <li><a href="kanji/190" title="漢字「長」のページ"><span
                        class="rank">6</span><span class="jp">長</span></a></li>
                  <li><a href="kanji/136" title="漢字「国」のページ"><span
                        class="rank">2</span><span class="jp">国</span></a></li>
                  <li><a href="kanji/252" title="漢字「駅」のページ"><span
                        class="rank">7</span><span class="jp">駅</span></a></li>
                  <li><a href="kanji/071" title="漢字「本」のページ"><span
                        class="rank">3</span><span class="jp">本</span></a></li>
                  <li><a href="671" title="漢字「寄」のページ"><span
                        class="rank">8</span><span class="jp">寄</span></a></li>
                  <li><a href="kanji/086" title="漢字「家」のページ"><span
                        class="rank">4</span><span class="jp">家</span></a></li>
                  <li><a href="kanji/114" title="漢字「兄」のページ"><span
                        class="rank">9</span><span class="jp">兄</span></a></li>
                  <li><a href="775" title="漢字「提」のページ"><span
                        class="rank">5</span><span class="jp">提</span></a></li>
                  <li><a href="kanjiy/12934" title="漢字「殺」のページ"><span
                        class="rank">10</span><span class="jp">殺</span></a></li>
                </ul>
              </div><!--ChangeElem_Panel2-->
              <div class="ChangeElem_Panel2">
                <ul class="side_rank">
                  <li><a href="kanji/059" title="漢字「中」のページ"><span
                        class="rank">1</span><span class="jp">中</span></a></li>
                  <li><a href="kanji/163" title="漢字「新」のページ"><span
                        class="rank">6</span><span class="jp">新</span></a></li>
                  <li><a href="kanji/423" title="漢字「有」のページ"><span
                        class="rank">2</span><span class="jp">有</span></a></li>
                  <li><a href="602" title="漢字「無」のページ"><span
                        class="rank">7</span><span class="jp">無</span></a></li>
                  <li><a href="kanji/071" title="漢字「本」のページ"><span
                        class="rank">3</span><span class="jp">本</span></a></li>
                  <li><a href="911" title="漢字「将」のページ"><span
                        class="rank">8</span><span class="jp">将</span></a></li>
                  <li><a href="kanji/086" title="漢字「家」のページ"><span
                        class="rank">4</span><span class="jp">家</span></a></li>
                  <li><a href="kanji/190" title="漢字「長」のページ"><span
                        class="rank">9</span><span class="jp">長</span></a></li>
                  <li><a href="kanji/136" title="漢字「国」のページ"><span
                        class="rank">5</span><span class="jp">国</span></a></li>
                  <li><a href="kanji/094" title="漢字「海」のページ"><span
                        class="rank">10</span><span class="jp">海</span></a></li>
                </ul>
              </div><!--ChangeElem_Panel2-->
              <div class="ChangeElem_Panel2">
                <ul class="side_rank">
                  <li><a href="kanji/059" title="漢字「中」のページ"><span
                        class="rank">1</span><span class="jp">中</span></a></li>
                  <li><a href="kanji/086" title="漢字「家」のページ"><span
                        class="rank">6</span><span class="jp">家</span></a></li>
                  <li><a href="991" title="漢字「優」のページ"><span
                        class="rank">2</span><span class="jp">優</span></a></li>
                  <li><a href="kanji/398" title="漢字「美」のページ"><span
                        class="rank">7</span><span class="jp">美</span></a></li>
                  <li><a href="602" title="漢字「無」のページ"><span
                        class="rank">3</span><span class="jp">無</span></a></li>
                  <li><a href="kanji/423" title="漢字「有」のページ"><span
                        class="rank">8</span><span class="jp">有</span></a></li>
                  <li><a href="kanji/439" title="漢字「和」のページ"><span
                        class="rank">4</span><span class="jp">和</span></a></li>
                  <li><a href="kanji/071" title="漢字「本」のページ"><span
                        class="rank">9</span><span class="jp">本</span></a></li>
                  <li><a href="kanji/440" title="漢字「愛」のページ"><span
                        class="rank">5</span><span class="jp">愛</span></a></li>
                  <li><a href="kanji/027" title="漢字「子」のページ"><span
                        class="rank">10</span><span class="jp">子</span></a></li>
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
                <li><a href="#kr1">カスタム練習帳</a></li>
                <li><a href="#kr2">漢検級別（学年別）練習帳</a></li>
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
          <div class="side_box">
            <p class="ttl_main_s togglemenu">漢字情報</p>
            <div class="togglebox">
              <ul class="other_site">
                <li><a href="">偏旁（偏旁冠脚）</a></li>
                <li><a href="kotoshi/">今年の漢字</a></li>
                <li><a href="kotoshi/rekidai">歴代の今年の漢字</a></li>
                <li><a href="osusume">おすすめの漢字辞典・漢和辞典</a></li>
              </ul>
            </div><!--togglebox-->
          </div><!--side_box-->
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
    <?php wp_footer() ?>
