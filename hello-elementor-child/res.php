<?php
/*
 * Template Name: Result
 * */
// API endpoint
$kanji = $_GET['word'];
$apiUrl = "https://kanjiapi.dev/v1/kanji/$kanji";

// Make the request to the API
$response = file_get_contents($apiUrl);
// echo $response;
// Check if the request was successful
if ($response !== false) {
    // Parse the JSON response
    $data = json_decode($response, true);

    // Check if the JSON decoding was successful
    if ($data !== null) {
        // Print the JSON data
        // json_encode($data, JSON_PRETTY_PRINT);
        echo "kanji  = " . $data['kanji'] . "</br>";
        echo  "Readings  = " . $data['kun_readings'][0] . "</br>";
        echo  "Meanings  = " .  $data['meanings'][0] . "</br>";
        echo  "On Readings  = " . $data['on_readings'][0] . "</br>";
    } else {
        echo "Error: Unable to decode JSON response.";
    }
} else {
    echo "Error: Unable to fetch data from the API.";
}



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

            </div>
        </div>
    </header>

    <div id="wrapper" class="cf">
        <div id="content">
            <h1 class="ttl_main">音訓検索「<?= $kanji; ?>」</h1>


            <div class="parts_box parts_box_select" id="parts1">
                <h3 class="ttl_while">あ</h3>
                <ul class="search_parts yomi_parts">
                    <li class="others_kanji onyomi"><a href="6606">丫<span class="small">ア</span></a></li>
                    <li class="others_kanji onyomi"><a href="6034">襾<span class="small">ア</span></a></li>
                    <li class="others_kanji onyomi"><a href="10103">覀<span class="small">ア</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/24779">吖<span class="small">ア</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1605">亜<span class="small">ア</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="2141">阿<span class="small">ア</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="5705">亞<span class="small">ア</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13980">妸<span class="small">ア</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13984">妿<span class="small">ア</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/19138">㚳<span class="small">ア</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="2138">娃<span class="small">ア</span></a></li>
                    <li class="others_kanji onyomi"><a href="3245">哇<span class="small">ア</span></a></li>
                    <li class="others_kanji onyomi"><a href="2137">唖<span class="small">ア</span></a></li>
                    <li class="others_kanji onyomi"><a href="10355">疴<span class="small">ア</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13070">俹<span class="small">ア</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/16722">砨<span class="small">ア</span></a></li>
                    <li class="others_kanji onyomi"><a href="3343">堊<span class="small">ア</span></a></li>
                    <li class="others_kanji onyomi"><a href="3390">婀<span class="small">ア</span></a></li>
                    <li class="others_kanji onyomi"><a href="5113">猗<span class="small">ア</span></a></li>
                    <li class="others_kanji onyomi"><a href="6471">啞<span class="small">ア</span></a></li>
                    <li class="others_kanji onyomi"><a href="11362">掗<span class="small">ア</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13392">啊<span class="small">ア</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14066">娿<span class="small">ア</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14101">婭<span class="small">ア</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14278">孲<span class="small">ア</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14366">屙<span class="small">ア</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/19281">㝞<span class="small">ア</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/19531">㢊<span class="small">ア</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/19951">㫊<span class="small">ア</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21549">䋍<span class="small">ア</span></a></li>
                    <li class="others_kanji onyomi"><a href="2140">蛙<span class="small">ア</span></a></li>
                    <li class="others_kanji onyomi"><a href="4130">椏<span class="small">ア</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15406">氬<span class="small">ア</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20194">㰳<span class="small">ア</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22717">䢝<span class="small">ア</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1030">雅<span class="small">ア</span></a></li>
                    <li class="others_kanji onyomi"><a href="5230">痾<span class="small">ア</span></a></li>
                    <li class="others_kanji onyomi"><a href="7565">鈳<span class="small">ア</span></a></li>
                    <li class="others_kanji onyomi"><a href="10380">瘂<span class="small">ア</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/16827">稏<span class="small">ア</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/18170">閜<span class="small">ア</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20886">㾨<span class="small">ア</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21109">䃁<span class="small">ア</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="2139">窪<span class="small">ア</span></a></li>
                    <li class="others_kanji onyomi"><a href="10924">漥<span class="small">ア</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/18988">㗨<span class="small">ア</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21572">䋪<span class="small">ア</span></a></li>
                    <li class="others_kanji onyomi"><a href="3799">鴉<span class="small">ア</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21234">䅬<span class="small">ア</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22456">䝝<span class="small">ア</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22998">䧽<span class="small">ア</span></a></li>
                    <li class="others_kanji onyomi"><a href="3960">閼<span class="small">ア</span></a></li>
                    <li class="others_kanji onyomi"><a href="4704">錏<span class="small">ア</span></a></li>
                    <li class="others_kanji onyomi"><a href="7683">錒<span class="small">ア</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20903">㿄<span class="small">ア</span></a></li>
                    <li class="others_kanji onyomi"><a href="6567">鼃<span class="small">ア</span></a></li>
                    <li class="others_kanji onyomi"><a href="6568">䵷<span class="small">ア</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/18508">鵶<span class="small">ア</span></a></li>
                    <li class="others_kanji onyomi"><a href="4726">鐚<span class="small">ア</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts2">
                <h3 class="ttl_while">ああ</h3>
                <ul class="search_parts yomi_parts">
                    <li class="others_kanji kunyomi"><a href="3060">于<span class="small">ああ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6703">亏<span class="small">ああ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6704">亐<span class="small">ああ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3222">吁<span class="small">ああ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3252">咨<span class="small">ああ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="2137">唖<span class="small">ああ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4562">欸<span class="small">ああ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5113">猗<span class="small">ああ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="6471">啞<span class="small">ああ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/16096">焈<span class="small">ああ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4564">欹<span class="small">ああ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5263">粤<span class="small">ああ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3286">嗚<span class="small">ああ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3288">嗟<span class="small">ああ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/24946">嗳<span class="small">ああ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/25986">粵<span class="small">ああ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4925">煕<span class="small">ああ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/22475">䝴<span class="small">ああ</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="4924">熙<span class="small">ああ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="4926">熈<span class="small">ああ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/22456">䝝<span class="small">ああ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3303">噫<span class="small">ああ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/12340">噯<span class="small">ああ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3949">齎<span class="small">ああ</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts3">
                <h3 class="ttl_while">あい</h3>
                <ul class="search_parts yomi_parts">
                    <li class="others_kanji onyomi"><a href="kanjiy/12380">伌<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/27774">𦣝<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5181">阨<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/12961">毐<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13256">呃<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20252">㱼<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7919">阸<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10982">㤅<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/12828">劸<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13266">呝<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/18857">㕈<span class="small">アイ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1320">哀<span class="small">アイ</span></a></li>
                    <li class="jimmei onyomi"><a class="color2" href="2138">娃<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3245">哇<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="11643">昹<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14775">徍<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15551">洼<span class="small">アイ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1938">挨<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3340">埃<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10983">爱<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/12846">欬<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13355">唉<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14055">娭<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/16722">砨<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20185">㰪<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4562">欸<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13377">唲<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17249">菋<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/19531">㢊<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20494">㶼<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/25927">秽<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13789">堨<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/16110">焥<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/16992">絠<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/26617">㗒<span class="small">アイ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="440">愛<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="4977">矮<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5195">隘<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13452">嗌<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/13821">塧<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15753">溾<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20886">㾨<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/23656">䵝<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/24946">嗳<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/25063">嫒<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/18988">㗨<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/24762">叆<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/25363">暧<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/25795">瑷<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5089">鞋<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/12626">僾<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17869">躷<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21234">䅬<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/22034">䔽<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/23257">䬵<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/24247">㵧<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3303">噫<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="9658">薆<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/12340">噯<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/14237">嬡<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/15922">濭<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/20903">㿄<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/23935">壒<span class="small">アイ</span></a></li>
                    <li class="joyo onyomi"><a class="color1" href="1939">曖<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7716">鎄<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10232">璦<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/17770">賹<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/21855">䑂<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/23029">䨠<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5561">穢<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5714">瞹<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7485">餲<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="10484">皧<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/18328">馤<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="5442">藹<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7297">鞵<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/18442">鯦<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/24141">譪<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/24157">醷<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="kanjiy/27171">鑀<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3998">靄<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="7061">鱫<span class="small">アイ</span></a></li>
                    <li class="others_kanji onyomi"><a href="3991">靉<span class="small">アイ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/25528">际<span class="small">あい</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="348">相<span class="small">あい</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="100">間<span class="small">あい</span></a></li>
                    <li class="others_kanji kunyomi"><a href="7868">閒<span class="small">あい</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="708">際<span class="small">あい</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="2122">藍<span class="small">あい</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="100">間<span class="small">あいだ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="7868">閒<span class="small">あいだ</span></a></li>
                </ul>
            </div>
            <!--parts_box-->
            <div class="parts_box parts_box_select" id="parts4">
                <h3 class="ttl_while">あう</h3>
                <ul class="search_parts yomi_parts">
                    <li class="others_kanji onyomi"><a href="kanjiy/18259">鞥<span class="small">アウ</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/19338">㞧<span class="small">あ（う）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="092">会<span class="small">あ（う）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="135">合<span class="small">あ（う）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/12437">佸<span class="small">あ（う）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="10504">盇<span class="small">あ（う）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="944">値<span class="small">あ（う）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5505">逅<span class="small">あ（う）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5564">盍<span class="small">あ（う）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/24589">值<span class="small">あ（う）</span></a></li>
                    <li class="jimmei kunyomi"><a class="color2" href="2914">逢<span class="small">あ（う）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="3917">晤<span class="small">あ（う）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5508">逑<span class="small">あ（う）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1379">遇<span class="small">あ（う）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="kanjiy/26404">㑹<span class="small">あ（う）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5757">會<span class="small">あ（う）</span></a></li>
                    <li class="joyo kunyomi"><a class="color1" href="1482">遭<span class="small">あ（う）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5526">遘<span class="small">あ（う）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5461">覯<span class="small">あ（う）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5531">邂<span class="small">あ（う）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5463">覲<span class="small">あ（う）</span></a></li>
                    <li class="others_kanji kunyomi"><a href="5464">覿<span class="small">あ（う）</span></a></li>
                </ul>
            </div>

            <!--parts_box-->
            <p id="noDisplayMessage2" style="display:none;">※<span class="marker">「常用漢字」「人名用漢字」「その他の漢字」のいずれかにチェックをつけてください。</span></p>
            <p id="noDisplayMessage" style="display:none;">
                ※条件に該当する字がありません。<br>表示条件の漢字の種別「常用漢字」「人名用漢字」「その他の漢字」、または読みの種別の「全ての読み」「音読み」「訓読み」などを変更してください。</p>
            <div id="nodisplay_ads2">
                <aside>
                    <div class="ads_wrapin link_pc">

                        <!-- レスポンシブ個別 -->
                        <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-3664445671894613" data-ad-slot="3470994118" data-ad-format="auto" data-full-width-responsive="true"></ins>
                        "
                    </div>
                </aside>
            </div>
        </div>

    </div>
    <!--wrapper-->

    <?php wp_footer() ?>