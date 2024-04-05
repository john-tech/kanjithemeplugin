<?php
/*
 * Template Name: kakusu33
 * */

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
<script>
jQuery(document).ready(function ($) {
    console.log("ssss")
 $('#wrapper a').attr('href','#');  
})
		</script>
</script>
<div id="all">
    <header>
        <style>
            .bushu_about_box {
                display: none;
            }

            div#sidebar {
                display: none;
            }
        </style>
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
            <h1 class="ttl_main">３３画の漢字一覧（漢検級順）</h1>

            <p>総画数３３画の漢字の一覧です。<br>
                漢字検定の配当級順（習う学年順）に表示しています。</p>
            <div class="parts_data">
                <div class="search_narrowdown">
                    <script>
                        (function() {
                            var html = document.getElementsByTagName('html') || [];
                            html[0].classList.add('enable-javascript');
                        })();
                    </script>
                    <div class="narrowdown_select">
                        <select name="select" onChange="location.href=value;" class="select1">
                            <option value="kakusu01">１画</option>
                            <option value="kakusu02">２画</option>
                            <option value="kakusu03">３画</option>
                            <option value="kakusu04">４画</option>
                            <option value="kakusu05">５画</option>
                            <option value="kakusu06">６画</option>
                            <option value="kakusu07">７画</option>
                            <option value="kakusu08">８画</option>
                            <option value="kakusu09">９画</option>
                            <option value="kakusu10">１０画</option>
                            <option value="kakusu11">１１画</option>
                            <option value="kakusu12">１２画</option>
                            <option value="kakusu13">１３画</option>
                            <option value="kakusu14">１４画</option>
                            <option value="kakusu15">１５画</option>
                            <option value="kakusu16">１６画</option>
                            <option value="kakusu17">１７画</option>
                            <option value="kakusu18">１８画</option>
                            <option value="kakusu19">１９画</option>
                            <option value="kakusu20">２０画</option>
                            <option value="kakusu21">２１画</option>
                            <option value="kakusu22">２２画</option>
                            <option value="kakusu23">２３画</option>
                            <option value="kakusu24">２４画</option>
                            <option value="kakusu25">２５画</option>
                            <option value="kakusu26">２６画</option>
                            <option value="kakusu27">２７画</option>
                            <option value="kakusu28">２８画</option>
                            <option value="kakusu29">２９画</option>
                            <option value="kakusu30">３０画</option>
                            <option value="kakusu31">３１画</option>
                            <option value="kakusu32">３２画</option>
                            <option value="#" selected>３３画</option>
                            <option value="kakusu34">３４画</option>
                            <option value="kakusu35">３５画</option>
                            <option value="kakusu36">３６画</option>
                            <option value="kakusu39">３９画</option>
                            <option value="kakusu44">４４画</option>
                            <option value="kakusu48">４８画</option>
                            <option value="kakusu52">５２画</option>
                        </select>
                    </div>
                </div>
                <!--search_narrowdown-->
                <div class="search_data bbushu_menu">
                    <ul class="search_menu">
                        <li>漢検級順</li>
                        <li><a href="bkakusu33">部首別順</a></li>
                        <li><a href="ckakusu33">読み順</a></li>
                    </ul>
                    <ul class="search_menu2">
                        <li><a href="#parts01">１級</a></li>
                        <li><a href="#parts">対象外</a></li>
                    </ul>
                </div>
                <!--search_data-->
                <aside>
                    <div class="ads_wraptop2 link_sp">

                    </div>
                </aside>
                <div class="bushu_wrap">
                    <div class="color_info">
                        <ul>
                            <li><span>常用漢字の背景色＝</span><span class="color1"></span></li>
                            <li><span>人名用漢字の背景色＝</span><span class="color2"></span></li>
                        </ul>
                    </div>
                    <div class="parts_box" id="parts01">
                        <h3 class="ttl_while"><a href="kyu01">漢字検定１級</a></h3>
                        <ul class="search_parts">
                            <li><a href="6502">麤</a></li>
                        </ul>
                    </div>
                    <div class="parts_box" id="parts">
                        <h3 class="ttl_while">漢字検定対象外</h3>
                        <ul class="search_parts">
                            <li><a href="6686">龗</a></li>
                            <li><a href="7083">鱻</a></li>
                            <li><a href="16275">爩</a></li>
                            <li><a href="23009">䨊</a></li>
                        </ul>
                    </div>
                    <aside>
                        <div class="ads_wrapin">

                            <!-- レスポンシブ３ -->
                            <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-3664445671894613" data-ad-slot="5260091654" data-ad-format="auto" data-full-width-responsive="true"></ins>
                            <script>
                                (adsbygoogle = window.adsbygoogle || []).push({});
                            </script>
                        </div>
                    </aside>
                </div>
                <!--parts_data-->
                <div class="kakusu_menu">
                    <h2 class="left_border">漢字の画数から検索（画数検索）</h2>
                    <ul>
                        <li><a href="kakusu01">1<span class="small">画</span></a></li>
                        <li><a href="kakusu02">2<span class="small">画</span></a></li>
                        <li><a href="kakusu03">3<span class="small">画</span></a></li>
                        <li><a href="kakusu04">4<span class="small">画</span></a></li>
                        <li><a href="kakusu05">5<span class="small">画</span></a></li>
                        <li><a href="kakusu06">6<span class="small">画</span></a></li>
                        <li><a href="kakusu07">7<span class="small">画</span></a></li>
                        <li><a href="kakusu08">8<span class="small">画</span></a></li>
                        <li><a href="kakusu09">9<span class="small">画</span></a></li>
                        <li><a href="kakusu10">10<span class="small">画</span></a></li>
                        <li><a href="kakusu11">11<span class="small">画</span></a></li>
                        <li><a href="kakusu12">12<span class="small">画</span></a></li>
                        <li><a href="kakusu13">13<span class="small">画</span></a></li>
                        <li><a href="kakusu14">14<span class="small">画</span></a></li>
                        <li><a href="kakusu15">15<span class="small">画</span></a></li>
                        <li><a href="kakusu16">16<span class="small">画</span></a></li>
                        <li><a href="kakusu17">17<span class="small">画</span></a></li>
                        <li><a href="kakusu18">18<span class="small">画</span></a></li>
                        <li><a href="kakusu19">19<span class="small">画</span></a></li>
                        <li><a href="kakusu20">20<span class="small">画</span></a></li>
                        <li><a href="kakusu21">21<span class="small">画</span></a></li>
                        <li><a href="kakusu22">22<span class="small">画</span></a></li>
                        <li><a href="kakusu23">23<span class="small">画</span></a></li>
                        <li><a href="kakusu24">24<span class="small">画</span></a></li>
                        <li><a href="kakusu25">25<span class="small">画</span></a></li>
                        <li><a href="kakusu26">26<span class="small">画</span></a></li>
                        <li><a href="kakusu27">27<span class="small">画</span></a></li>
                        <li><a href="kakusu28">28<span class="small">画</span></a></li>
                        <li><a href="kakusu29">29<span class="small">画</span></a></li>
                        <li><a href="kakusu30">30<span class="small">画</span></a></li>
                        <li><a href="kakusu31">31<span class="small">画</span></a></li>
                        <li><a href="kakusu32">32<span class="small">画</span></a></li>
                        <li><a href="kakusu33">33<span class="small">画</span></a></li>
                        <li><a href="kakusu34">34<span class="small">画</span></a></li>
                        <li><a href="kakusu35">35<span class="small">画</span></a></li>
                        <li><a href="kakusu36">36<span class="small">画</span></a></li>
                        <li><a href="kakusu39">39<span class="small">画</span></a></li>
                        <li><a href="kakusu44">44<span class="small">画</span></a></li>
                        <li><a href="kakusu48">48<span class="small">画</span></a></li>
                        <li><a href="kakusu52">52<span class="small">画</span></a></li>
                    </ul>
                </div>
            </div>
            <!--bushu_wrap-->
        </div>
        <!--content-->
        <aside>
            <div id="sidebar" data-nosnippet>

                <div class="ads_wrap side_pc">
                    <style>
                        .ads_responsive_2 {
                            display: none;
                        }

                        @media(min-width: 1095px) {
                            .ads_responsive_2 {
                                width: 300px;
                                height: 600px;
                            }
                        }
                    </style>

                    <!-- 漢字辞典レスポンシブ２ -->

                    <div class="side_ranking">
                        <script>
                            $(function() {
                                var sel_index = localStorage.getItem("sel_Elem2");
                                if (sel_index == null) {
                                    sel_index = 0;
                                }
                                $('.ChangeElem_Btn2').eq(sel_index).addClass('is-active');
                                $('.ChangeElem_Panel2').eq(sel_index).show();
                                $('.ChangeElem_Btn2').each(function() {
                                    $(this).on('click', function() {
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
                            <p class="ttl_normal_s"><span class="rank_update">11/17更新</span></p>
                            <ul class="ChangeElem_Btn_Content2 rank_menu">
                                <li class="ChangeElem_Btn2">デイリー</li>
                                <li class="ChangeElem_Btn2">週間</li>
                                <li class="ChangeElem_Btn2">月間</li>
                            </ul>
                            <div class="ChangeElem_Panel2">
                                <ul class="side_rank sr_01">
                                    <li><a href="kanji/059" title="漢字「中」のページ"><span class="rank">1</span><span class="jp">中</span></a></li>
                                    <li><a href="kanji/190" title="漢字「長」のページ"><span class="rank">6</span><span class="jp">長</span></a></li>
                                    <li><a href="kanji/136" title="漢字「国」のページ"><span class="rank">2</span><span class="jp">国</span></a></li>
                                    <li><a href="kanji/252" title="漢字「駅」のページ"><span class="rank">7</span><span class="jp">駅</span></a></li>
                                    <li><a href="kanji/071" title="漢字「本」のページ"><span class="rank">3</span><span class="jp">本</span></a></li>
                                    <li><a href="671" title="漢字「寄」のページ"><span class="rank">8</span><span class="jp">寄</span></a></li>
                                    <li><a href="kanji/086" title="漢字「家」のページ"><span class="rank">4</span><span class="jp">家</span></a></li>
                                    <li><a href="kanji/114" title="漢字「兄」のページ"><span class="rank">9</span><span class="jp">兄</span></a></li>
                                    <li><a href="775" title="漢字「提」のページ"><span class="rank">5</span><span class="jp">提</span></a></li>
                                    <li><a href="12934" title="漢字「殺」のページ"><span class="rank">10</span><span class="jp">殺</span></a></li>
                                </ul>
                            </div>
                            <!--ChangeElem_Panel2-->
                            <div class="ChangeElem_Panel2">
                                <ul class="side_rank">
                                    <li><a href="kanji/059" title="漢字「中」のページ"><span class="rank">1</span><span class="jp">中</span></a></li>
                                    <li><a href="kanji/163" title="漢字「新」のページ"><span class="rank">6</span><span class="jp">新</span></a></li>
                                    <li><a href="kanji/423" title="漢字「有」のページ"><span class="rank">2</span><span class="jp">有</span></a></li>
                                    <li><a href="602" title="漢字「無」のページ"><span class="rank">7</span><span class="jp">無</span></a></li>
                                    <li><a href="kanji/071" title="漢字「本」のページ"><span class="rank">3</span><span class="jp">本</span></a></li>
                                    <li><a href="911" title="漢字「将」のページ"><span class="rank">8</span><span class="jp">将</span></a></li>
                                    <li><a href="kanji/086" title="漢字「家」のページ"><span class="rank">4</span><span class="jp">家</span></a></li>
                                    <li><a href="kanji/190" title="漢字「長」のページ"><span class="rank">9</span><span class="jp">長</span></a></li>
                                    <li><a href="kanji/136" title="漢字「国」のページ"><span class="rank">5</span><span class="jp">国</span></a></li>
                                    <li><a href="kanji/094" title="漢字「海」のページ"><span class="rank">10</span><span class="jp">海</span></a></li>
                                </ul>
                            </div>
                            <!--ChangeElem_Panel2-->
                            <div class="ChangeElem_Panel2">
                                <ul class="side_rank">
                                    <li><a href="kanji/059" title="漢字「中」のページ"><span class="rank">1</span><span class="jp">中</span></a></li>
                                    <li><a href="kanji/086" title="漢字「家」のページ"><span class="rank">6</span><span class="jp">家</span></a></li>
                                    <li><a href="991" title="漢字「優」のページ"><span class="rank">2</span><span class="jp">優</span></a></li>
                                    <li><a href="kanji/398" title="漢字「美」のページ"><span class="rank">7</span><span class="jp">美</span></a></li>
                                    <li><a href="602" title="漢字「無」のページ"><span class="rank">3</span><span class="jp">無</span></a></li>
                                    <li><a href="kanji/423" title="漢字「有」のページ"><span class="rank">8</span><span class="jp">有</span></a></li>
                                    <li><a href="kanji/439" title="漢字「和」のページ"><span class="rank">4</span><span class="jp">和</span></a></li>
                                    <li><a href="kanji/071" title="漢字「本」のページ"><span class="rank">9</span><span class="jp">本</span></a></li>
                                    <li><a href="kanji/440" title="漢字「愛」のページ"><span class="rank">5</span><span class="jp">愛</span></a></li>
                                    <li><a href="kanji/027" title="漢字「子」のページ"><span class="rank">10</span><span class="jp">子</span></a></li>
                                </ul>
                            </div>
                            <!--ChangeElem_Panel2-->
                        </div>
                    </div>
                    <script>
                        $(function() {
                            $('.togglemenu').click(function() {
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
                        </div>
                        <!--togglebox-->
                    </div>
                    <!--side_box-->
                    <div class="side_box">
                        <p class="ttl_main_s togglemenu">練習帳</p>
                        <div class="togglebox">

                        </div>
                        <!--togglebox-->
                    </div>
                    <!--side_box-->
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
                        </div>
                        <!--togglebox-->
                    </div>
                    <!--side_box-->
                    <div class="side_box">
                        <p class="ttl_main_s togglemenu">漢字の分類・漢字表記</p>
                        <div class="togglebox">
                            <ul class="other_site">
                                <li><a href="sakuin1">漢字の分類・漢字表記索引</a></li>
                            </ul>
                        </div>
                        <!--togglebox-->
                    </div>
                    <!--side_box-->
                    <div class="side_box">
                        <p class="ttl_main_s togglemenu">漢字情報</p>
                        <div class="togglebox">
                            <ul class="other_site">
                                <li><a href="">偏旁（偏旁冠脚）</a></li>
                                <li><a href="kotoshi/">今年の漢字</a></li>
                                <li><a href="kotoshi/rekidai">歴代の今年の漢字</a></li>
                                <li><a href="osusume">おすすめの漢字辞典・漢和辞典</a></li>
                            </ul>
                        </div>
                        <!--togglebox-->
                    </div>
                    <!--side_box-->
                </div>
                <!--sidebar-->
        </aside>
    </div>
    <!--wrapper-->
   <script>
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