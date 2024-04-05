<?php
/*
 * Template Name: Stroke
 * */

get_header();

?>


<link rel="stylesheet" type="text/css" href="<?= get_stylesheet_directory_uri(); ?>/assest/css/html5reset.css" media="screen" />
<link rel="stylesheet" type="text/css" href="<?= get_stylesheet_directory_uri(); ?>/assest/css/styleed06.css?20231023" media="screen" />
<link rel="stylesheet" type="text/css" href="<?= get_stylesheet_directory_uri(); ?>/assest/css/style_kanjied06.css?20231023" media="screen" />
<script src="<?= get_stylesheet_directory_uri(); ?>/assest/js/jquery-3.4.1.min.js"></script>
<script src="<?= get_stylesheet_directory_uri(); ?>/assest/js/jquery.cookie.js"></script>
<script type="text/javascript" src="<?= get_stylesheet_directory_uri(); ?>/assest/js/main/main0598.js?20231008">
</script>
<script type="text/javascript" src="<?= get_stylesheet_directory_uri(); ?>/assest/js/kanji/main0598.js?20231008">
</script>
<title>漢字を画数から検索</title>

<div id="all">
    <header>
        <div class="nosnippet" data-nosnippet>
            <div class="header_search" data-nosnippet>
                <div class="search_inner">
                    <form id="head_form" class="search_form" name="head_form" onsubmit="return false" accept-charset="utf-8" method="post">
                        <span id="select_search" class="select_search">すべて</span>
                        <input type="hidden" id="slide2">
                        <input type="hidden" id="head_how" class="how" value="すべて">
                        <input type="text" id="head_value" name="value" placeholder="例）にんべん 車車車 5画" class="value input_search" value="">
                        <input type="submit" id="head_submit" value="" class="search_btn">
                    </form>
                    <div id="target2" class="search_target search_other">
                        <ul id="select01" class="cf">
                            <li><a href="#" class="sel1 head-active" id="sel11">すべて</a></li>
                            <li><a href="#" class="sel1" id="sel12">漢字</a></li>
                            <li><a href="#" class="sel1" id="sel15">意味</a></li>
                            <li><a href="#" class="sel01" id="sel13">部首</a></li>
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
            <div class="contents_bnr link_sp">
                <a href="#"><img src="../images/2023_sp_bnr.jpg" alt="今年の漢字"></a>
            </div>
        </div>
    </header>
    <div id="wrapper" class="cf">
        <div id="content">
            <h1 class="ttl_main">漢字を画数から検索</h1>

            <div class="data_cont">
                <p>漢字を画数から検索することができます。</p>
                <div class="kakusu_area">
                    <ul>
                    <li><a href="<?php echo home_url() . "/kakusu01"; ?>" data-value="1" class="sett">1<span class=" small">画</span></a></li>
 
                        <li><a href="<?php echo home_url() . "/kakusu02"; ?>">2<span class="small">画</span></a></li>
                        <li><a href="<?php echo home_url() . "/kakusu03"; ?>">3<span class="small">画</span></a></li>
                        <li><a href="<?php echo home_url() . "/kakusu04"; ?>">4<span class="small">画</span></a></li>
                        <li><a href="<?php echo home_url() . "/kakusu05"; ?>">5<span class="small">画</span></a></li>
                        <li><a href="<?php echo home_url() . "/kakusu06"; ?>">6<span class="small">画</span></a></li>
                        <li><a href="<?php echo home_url() . "/kakusu07"; ?>">7<span class="small">画</span></a></li>
                        <li><a href="<?php echo home_url() . "/kakusu08"; ?>">8<span class="small">画</span></a></li>
                        <li><a href="<?php echo home_url() . "/kakusu09"; ?>">9<span class="small">画</span></a></li>
                        <li><a href="<?php echo home_url() . "/kakusu10"; ?>">10<span class="small">画</span></a></li>
                        <li><a href="<?php echo home_url() . "/kakusu11"; ?>">11<span class="small">画</span></a></li>
                        <li><a href="<?php echo home_url() . "/kakusu12"; ?>">12<span class="small">画</span></a></li>
                        <li><a href="<?php echo home_url() . "/kakusu13"; ?>">13<span class="small">画</span></a></li>
                        <li><a href="<?php echo home_url() . "/kakusu14"; ?>">14<span class="small">画</span></a></li>
                        <li><a href="<?php echo home_url() . "/kakusu15"; ?>">15<span class="small">画</span></a></li>
                        <li><a href="<?php echo home_url() . "/kakusu16"; ?>">16<span class="small">画</span></a></li>
                        <li><a href="<?php echo home_url() . "/kakusu17"; ?>">17<span class="small">画</span></a></li>
                        <li><a href="<?php echo home_url() . "/kakusu18"; ?>">18<span class="small">画</span></a></li>
                        <li><a href="<?php echo home_url() . "/kakusu19"; ?>">19<span class="small">画</span></a></li>
                        <li><a href="<?php echo home_url() . "/kakusu20"; ?>">20<span class="small">画</span></a></li>
                        <li><a href="<?php echo home_url() . "/kakusu21"; ?>">21<span class="small">画</span></a></li>
                        <li><a href="<?php echo home_url() . "/kakusu22"; ?>">22<span class="small">画</span></a></li>
                        <li><a href="<?php echo home_url() . "/kakusu23"; ?>">23<span class="small">画</span></a></li>
                        <li><a href="<?php echo home_url() . "/kakusu24"; ?>">24<span class="small">画</span></a></li>
                        <li><a href="<?php echo home_url() . "/kakusu25"; ?>">25<span class="small">画</span></a></li>
                        <li><a href="<?php echo home_url() . "/kakusu26"; ?>">26<span class="small">画</span></a></li>
                        <li><a href="<?php echo home_url() . "/kakusu27"; ?>">27<span class="small">画</span></a></li>
                        <li><a href="<?php echo home_url() . "/kakusu28"; ?>">28<span class="small">画</span></a></li>
                        <li><a href="<?php echo home_url() . "/kakusu29"; ?>">29<span class="small">画</span></a></li>
                        <li><a href="<?php echo home_url() . "/kakusu30"; ?>">30<span class="small">画</span></a></li>
                        <li><a href="<?php echo home_url() . "/kakusu31"; ?>">31<span class="small">画</span></a></li>
                        <li><a href="<?php echo home_url() . "/kakusu32"; ?>">32<span class="small">画</span></a></li>
                        <li><a href="<?php echo home_url() . "/kakusu33"; ?>">33<span class="small">画</span></a></li>
                        <li><a href="<?php echo home_url() . "/kakusu34"; ?>">34<span class="small">画</span></a></li>
                        <li><a href="<?php echo home_url() . "/kakusu35"; ?>">35<span class="small">画</span></a></li>
                        <li><a href="<?php echo home_url() . "/kakusu36"; ?>">36<span class="small">画</span></a></li>
                        <li><a href="<?php echo home_url() . "/kakusu43"; ?>">39<span class="small">画</span></a></li>
                        <li><a href="<?php echo home_url() . "/kakusu44"; ?>">44<span class="small">画</span></a></li>
                        <li><a href="<?php echo home_url() . "/kakusu48"; ?>">48<span class="small">画</span></a></li>
                        <li><a href="<?php echo home_url() . "/kakusu52"; ?>">52<span class="small">画</span></a></li>
                    </ul>
                </div>
            </div>
            <!--data_cont-->
        </div>
        <!--content-->
        <?php get_template_part( 'part' ); ?>
    </div>
    <!--wrapper-->
    <div class="page_top"><a href="#"><img src="../../jitenon.jp/images/top.png" alt="ページ先頭に戻る"></a></div>
</div>
<!--all-->
 
<?php get_footer(); ?>