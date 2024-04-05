<?php
/*
 * Template Name: Dictionary
 * */
// API endpoint
// $kanji = $_GET['getdata'];
// $apiUrl = "https://kanjiapi.dev/v1/kanji/$kanji";

// // Make the request to the API
// $response = file_get_contents($apiUrl);
// // echo $response;
// // Check if the request was successful
// if ($response !== false) {
//     // Parse the JSON response
//     $data = json_decode($response, true);

//     // Check if the JSON decoding was successful
//     if ($data !== null) {
//         // Print the JSON data
//         // json_encode($data, JSON_PRETTY_PRINT);
//         echo "kanji  = " . $data['kanji'] . "</br>";
//         echo  "Readings  = " . $data['kun_readings'][0] . "</br>";
//         echo  "Meanings  = " .  $data['meanings'][0] . "</br>";
//         echo  "On Readings  = " . $data['on_readings'][0] . "</br>";
//     } else {
//         echo "Error: Unable to decode JSON response.";
//     }
// } else {
//     echo "Error: Unable to fetch data from the API.";
// }



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

            </div>
            <!--parts_box-->

        </div>

    </div>
    <!--wrapper-->

    <?php wp_footer() ?>