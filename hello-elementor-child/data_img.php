<?php
/*
 * Template Name: view_rec
 * */

get_header();


// require_once('../../../../wp-load.php');
global $wpdb;
global $table_prefix;
$gen_user_info = $table_prefix . "transimage";

$edit_id = $_GET['edit_id'];
$query = "SELECT * FROM $gen_user_info where id= '$edit_id'";
$data = $wpdb->get_results($query);
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
    <style>
        .flex-parent {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .box {
            background-color: #d4d4d4;
            margin: 10px;
            padding: 10px;
            text-align: center;
        }
    </style>
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
        </div>
    </header>
    <div id="wrapper" class="cf" style="height: auto !important; min-height: 0px !important;">
        <div id="content" style="height: auto !important;">
            <article style="height: auto !important; width: 900px;">
                <h1 class="ttl_main"><ruby class="ruby_switch">漢字<rt style="display: none;">かんじ</rt></ruby>「四」について</h1>
                <aside>
                    <div class="ads_wrapin">
                        <style>
                            .ads_responsive_1 {
                                width: 320px;
                                height: 100px;
                            }

                            @media(min-width: 500px) {
                                .ads_responsive_1 {
                                    width: 468px;
                                    height: 60px;
                                }
                            }

                            @media(min-width: 800px) {
                                .ads_responsive_1 {
                                    width: 728px;
                                    height: 90px;
                                }
                            }
                        </style>
                        <script async="" src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                        <!-- レスポンシブ0 -->
                        <ins class="adsbygoogle ads_responsive_1" style="display: inline-block; width: 728px; height: 90px;" data-ad-client="ca-pub-3664445671894613" data-ad-slot="1691216613" data-adsbygoogle-status="done" data-ad-status="unfilled">
                            <div id="aswift_1_host" tabindex="0" title="Advertisement" aria-label="Advertisement" style="border: none; height: 90px; width: 728px; margin: 0px; padding: 0px; position: relative; visibility: visible; background-color: transparent; display: inline-block;"><iframe id="aswift_1" name="aswift_1" browsingtopics="true" style="left:0;position:absolute;top:0;border:0;width:728px;height:90px;" sandbox="allow-forms allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts allow-top-navigation-by-user-activation" width="728" height="90" frameborder="0" marginwidth="0" marginheight="0" vspace="0" hspace="0" allowtransparency="true" scrolling="no" allow="attribution-reporting" src="https://googleads.g.doubleclick.net/pagead/ads?client=ca-pub-3664445671894613&amp;output=html&amp;h=90&amp;slotname=1691216613&amp;adk=2713110297&amp;adf=942372635&amp;pi=t.ma~as.1691216613&amp;w=728&amp;lmt=1704322872&amp;rafmt=12&amp;format=728x90&amp;url=https%3A%2F%2Fkanji.jitenon.jp%2Fkanji%2F026.html&amp;ea=0&amp;wgl=1&amp;uach=WyJXaW5kb3dzIiwiMTAuMC4wIiwieDg2IiwiIiwiMTIwLjAuNjA5OS4xMzAiLG51bGwsMCxudWxsLCI2NCIsW1siTm90X0EgQnJhbmQiLCI4LjAuMC4wIl0sWyJDaHJvbWl1bSIsIjEyMC4wLjYwOTkuMTMwIl0sWyJHb29nbGUgQ2hyb21lIiwiMTIwLjAuNjA5OS4xMzAiXV0sMF0.&amp;dt=1704322871751&amp;bpp=8&amp;bdt=324&amp;idt=592&amp;shv=r20231207&amp;mjsv=m202312070101&amp;ptt=9&amp;saldr=aa&amp;abxe=1&amp;cookie=ID%3D9b92f58440bd1c1e%3AT%3D1704239110%3ART%3D1704322976%3AS%3DALNI_MYJAX242FRAeRsKqJPzvdnO4uclvg&amp;gpic=UID%3D00000ced288e021f%3AT%3D1704239110%3ART%3D1704322976%3AS%3DALNI_MZjwgmNjSTEle3JFABm6RMjRTCqcg&amp;prev_fmts=0x0&amp;nras=1&amp;correlator=1491027765398&amp;frm=20&amp;pv=1&amp;ga_vid=1689326059.1704239002&amp;ga_sid=1704322872&amp;ga_hid=1584514128&amp;ga_fc=1&amp;u_tz=300&amp;u_his=9&amp;u_h=1080&amp;u_w=1920&amp;u_ah=1040&amp;u_aw=1920&amp;u_cd=24&amp;u_sd=1&amp;dmc=8&amp;adx=421&amp;ady=276&amp;biw=1920&amp;bih=603&amp;scr_x=0&amp;scr_y=0&amp;eid=44759875%2C44759926%2C31080114%2C95320378%2C95320869%2C31078663%2C31078665%2C31078668%2C31078670&amp;oid=2&amp;pvsid=3227678805786966&amp;tmod=1339777418&amp;uas=0&amp;nvt=1&amp;ref=https%3A%2F%2Fkanji.jitenon.jp%2Fcat%2Fkakusu05.html&amp;fc=1920&amp;brdim=0%2C0%2C0%2C0%2C1920%2C0%2C1920%2C1040%2C1920%2C603&amp;vis=1&amp;rsz=%7C%7CeE%7C&amp;abl=CS&amp;pfx=0&amp;fu=256&amp;bc=31&amp;td=1&amp;psd=W251bGwsbnVsbCxudWxsLDNd&amp;nt=1&amp;ifi=2&amp;uci=a!2&amp;fsb=1&amp;dtd=597" data-google-container-id="a!2" data-google-query-id="CILP7-2pwoMDFXpoQQIdcZALIA" data-load-complete="true"></iframe></div>
                        </ins>
                        <script>
                            (adsbygoogle = window.adsbygoogle || []).push({});
                        </script>
                    </div>
                </aside>
                <div class="switch-ruby">
                    <div class="switch-container">
                        <div class="ruby_name"><span>ふりがな<ruby class="ruby_switch">表示</ruby></span></div>
                        <div class="ruby_type">
                            <input type="radio" name="ruby-switch" id="ruby-on" value="on">
                            <label for="ruby-on" class="switch-on">ON</label>
                            <input type="radio" name="ruby-switch" id="ruby-off" value="off">
                            <label for="ruby-off" class="switch-off">OFF</label>
                        </div>
                    </div>
                </div>
                <div class="search_data" style="height: auto !important;">
                    <div class="search_words" style="height: auto !important;">
                        <div class="kanji_wrap">


                            <div class="kanji_right">

                                <div class="kan_top">
                                    <section>
                                        <h2>「四」の<ruby class="ruby_switch">部首<rt style="display: none;">ぶしゅ</rt></ruby>・<ruby class="ruby_switch">画数<rt style="display: none;">かくすう</rt></ruby>・<ruby class="ruby_switch">読<rt style="display: none;">よ</rt></ruby>み<ruby class="ruby_switch">方<rt style="display: none;">かた</rt></ruby>・<ruby class="ruby_switch">意味<rt style="display: none;">いみ</rt></ruby>など</h2>
                                        <table class="kanjirighttb">
                                            <tbody>
                                                <tr>
                                                    <th id="m_kihon"><ruby class="ruby_switch">部首<rt style="display: none;">ぶしゅ</rt></ruby></th>
                                                    <td><a href="#">囗部（くにがまえ）</a></td>
                                                </tr>
                                                <tr>
                                                    <th><ruby class="ruby_switch">画数<rt style="display: none;">かくすう</rt></ruby></th>
                                                    <td><a href="$">５<ruby class="ruby_switch">画<rt style="display: none;">かく</rt></ruby></a><span class="kaku_num">（囗３＋２）</span></td>
                                                </tr>
                                                <tr>
                                                    <th><ruby class="ruby_switch">音<rt style="display: none;">おん</rt></ruby><ruby class="ruby_switch">読<rt style="display: none;">よ</rt></ruby>み</th>
                                                    <td><span class="yomi_icon"><img src="https://kanji.jitenon.jp/images/yomi_icon1.svg" alt="小学校で習う読み"></span><a href="https://kanji.jitenon.jp/yomi/41.html">シ</a></td>
                                                </tr>
                                                <tr>
                                                    <th rowspan="4"><ruby class="ruby_switch">訓<rt style="display: none;">くん</rt></ruby><ruby class="ruby_switch">読<rt style="display: none;">よ</rt></ruby>み</th>
                                                    <td><span class="yomi_icon"><img src="https://kanji.jitenon.jp/images/yomi_icon1.svg" alt="小学校で習う読み"></span><a href="https://kanji.jitenon.jp/yomi/a2.html">よ</a></td>
                                                </tr>
                                                <tr>
                                                    <td><span class="yomi_icon"><img src="https://kanji.jitenon.jp/images/yomi_icon1.svg" alt="小学校で習う読み"></span><a href="https://kanji.jitenon.jp/yomi/a252.html">よ（つ）</a></td>
                                                </tr>
                                                <tr>
                                                    <td><span class="yomi_icon"><img src="https://kanji.jitenon.jp/images/yomi_icon1.svg" alt="小学校で習う読み"></span><a href="https://kanji.jitenon.jp/yomi/a2d152.html">よっ（つ）</a></td>
                                                </tr>
                                                <tr>
                                                    <td><span class="yomi_icon"><img src="https://kanji.jitenon.jp/images/yomi_icon1.svg" alt="小学校で習う読み"></span><a href="https://kanji.jitenon.jp/yomi/a2d2.html">よん</a></td>
                                                </tr>
                                                <tr>
                                                    <th rowspan="4"><ruby class="ruby_switch">意味<rt style="display: none;">いみ</rt></ruby></th>
                                                    <td>よ。よつ。よっつ。よん。<ruby class="ruby_switch">数<rt style="display: none;">かず</rt></ruby>の<ruby class="ruby_switch">名<rt style="display: none;">な</rt></ruby>。</td>
                                                </tr>
                                                <tr>
                                                    <td>よたび。<ruby class="ruby_switch">四回<rt style="display: none;">よんかい</rt></ruby>。<ruby class="ruby_switch">四度<rt style="display: none;">よんど</rt></ruby>。</td>
                                                </tr>
                                                <tr>
                                                    <td>よも。しほう。<ruby class="ruby_switch">四方<rt style="display: none;">しほう</rt></ruby>の<ruby class="ruby_switch">方角<rt style="display: none;">ほうがく</rt></ruby>。</td>
                                                </tr>
                                                <tr>
                                                    <td><span class="jp_icon3"><img src="https://kanji.jitenon.jp/images/jp_icon.svg" alt="日本"></span>よつ。<ruby class="ruby_switch">昔<rt style="display: none;">むかし</rt></ruby>の<ruby class="ruby_switch">時刻<rt style="display: none;">じこく</rt></ruby>の<ruby class="ruby_switch">呼<rt style="display: none;">よ</rt></ruby>び<ruby class="ruby_switch">方<rt style="display: none;">かた</rt></ruby>で<ruby class="ruby_switch">午前<rt style="display: none;">ごぜん</rt></ruby><ruby class="ruby_switch">十時<rt style="display: none;">じゅうじ</rt></ruby>（<ruby class="ruby_switch">巳<rt style="display: none;">み</rt></ruby>の<ruby class="ruby_switch">刻<rt style="display: none;">こく</rt></ruby>）、または<ruby class="ruby_switch">午後<rt style="display: none;">ごご</rt></ruby><ruby class="ruby_switch">十時<rt style="display: none;">じゅうじ</rt></ruby>（<ruby class="ruby_switch">亥<rt style="display: none;">い</rt></ruby>の<ruby class="ruby_switch">刻<rt style="display: none;">こく</rt></ruby>）のこと。</td>
                                                </tr>
                                                <tr>
                                                    <th><ruby class="ruby_switch">種別<rt style="display: none;">しゅべつ</rt></ruby></th>
                                                    <td><a href="#"><ruby class="ruby_switch">教育<rt style="display: none;">きょういく</rt></ruby><ruby class="ruby_switch">漢字<rt style="display: none;">かんじ</rt></ruby></a> / <a href="https://kanji.jitenon.jp/cat/joyo.html"><ruby class="ruby_switch">常用<rt style="display: none;">じょうよう</rt></ruby><ruby class="ruby_switch">漢字<rt style="display: none;">かんじ</rt></ruby></a> / <a href="https://kanji.jitenon.jp/cat/namae.html"><ruby class="ruby_switch">名前<rt style="display: none;">なまえ</rt></ruby>に<ruby class="ruby_switch">使<rt style="display: none;">つか</rt></ruby>える<ruby class="ruby_switch">漢字<rt style="display: none;">かんじ</rt></ruby></a></td>
                                                </tr>
                                                <tr>
                                                    <th><ruby class="ruby_switch">分類<rt style="display: none;">ぶんるい</rt></ruby></th>
                                                    <td><a href="#"><ruby class="ruby_switch">漢数字<rt style="display: none;">かんすうじ</rt></ruby></a></td>
                                                </tr>
                                                <tr>
                                                    <th><ruby class="ruby_switch">学年<rt style="display: none;">がくねん</rt></ruby></th>
                                                    <td><a href="#"><ruby class="ruby_switch">小学校<rt style="display: none;">しょうがっこう</rt></ruby>１<ruby class="ruby_switch">年生<rt style="display: none;">ねんせい</rt></ruby></a></td>
                                                </tr>
                                                <tr>
                                                    <th><ruby class="ruby_switch">漢字<rt style="display: none;">かんじ</rt></ruby><ruby class="ruby_switch">検定<rt style="display: none;">けんてい</rt></ruby></th>
                                                    <td><a href="#">１０<ruby class="ruby_switch">級<rt style="display: none;">きゅう</rt></ruby></a></td>
                                                </tr>
                                                <tr>
                                                    <th>JIS<ruby class="ruby_switch">水準<rt style="display: none;">すいじゅん</rt></ruby></th>
                                                    <td><a href="#"><ruby class="ruby_switch">第<rt style="display: none;">だい</rt></ruby>１<ruby class="ruby_switch">水準<rt style="display: none;">すいじゅん</rt></ruby></a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <p class="code_at">※Unicodeは<a href="#m_mojicode"><ruby class="ruby_switch">文字<rt style="display: none;">もじ</rt></ruby>コード<ruby class="ruby_switch">欄<rt style="display: none;">らん</rt></ruby></a>に<ruby class="ruby_switch">移動<rt style="display: none;">いどう</rt></ruby>しました。</p>
                                    </section>
                                </div>

                            </div><!--kanji_right-->
                            <div class="kanji_left">
                                <section>
                                    <?php foreach ($data as $row) : ?>
                                        <h2 id="m_syotai" class="left_border">「四」の<ruby class="ruby_switch">書体<rt style="display: none;">しょたい</rt></ruby></h2>
                                        <div class="kanji_main ChangeElem_Panel" style="display:block"><a href="#" data-lightbox="bigimg" data-title="教"><img width="40px" src="<?= home_url('/wp-admin/uploads/' . $row->image); ?>" alt=""></a></div>
                                        <ul class="ChangeElem_Btn_Content">
                                            <li class="ChangeElem_Btn"><ruby class="ruby_switch">明朝<rt style="display: none;">みんちょう</rt></ruby><ruby class="ruby_switch">体<rt style="display: none;">たい</rt></ruby></li>
                                            <li class="ChangeElem_Btn"><ruby class="ruby_switch">教科書<rt style="display: none;">きょうかしょ</rt></ruby><ruby class="ruby_switch">体<rt style="display: none;">たい</rt></ruby></li>
                                            <li class="ChangeElem_Btn is-active"><ruby class="ruby_switch">教科書<rt style="display: none;">きょうかしょ</rt></ruby><ruby class="ruby_switch">体<rt style="display: none;">たい</rt></ruby><span class="hbr">（<ruby class="ruby_switch">筆順<rt style="display: none;">ひつじゅん</rt></ruby>）</span></li>
                                            <li class="ChangeElem_Btn"><span class="gothic">ゴシック<ruby class="ruby_switch">体<rt style="display: none;">たい</rt></ruby></span></li>
                                            <li class="ChangeElem_Btn"><ruby class="ruby_switch">楷書<rt style="display: none;">かいしょ</rt></ruby><ruby class="ruby_switch">体<rt style="display: none;">たい</rt></ruby></li>
                                            <li class="ChangeElem_Btn"><ruby class="ruby_switch">行書<rt style="display: none;">ぎょうしょ</rt></ruby><ruby class="ruby_switch">体<rt style="display: none;">たい</rt></ruby></li>
                                            <li class="ChangeElem_Btn"><ruby class="ruby_switch">草書<rt style="display: none;">そうしょ</rt></ruby><ruby class="ruby_switch">体<rt style="display: none;">たい</rt></ruby></li>
                                            <li class="ChangeElem_Btn"><ruby class="ruby_switch">隷書<rt style="display: none;">れいしょ</rt></ruby><ruby class="ruby_switch">体<rt style="display: none;">たい</rt></ruby></li>
                                            <li class="ChangeElem_Btn"><ruby class="ruby_switch">篆書<rt style="display: none;">てんしょ</rt></ruby><ruby class="ruby_switch">体<rt style="display: none;">たい</rt></ruby></li>
                                        </ul>
                                    <?php endforeach; ?>
                                </section>
                            </div><!--kanji_left-->
                        </div><!--kanji_wrap-->
                        <div class="it_ttl">
                            <h2 id="m_itaiji" class="left_border"><ruby class="ruby_switch">異体<rt style="display: none;">いたい</rt></ruby><ruby class="ruby_switch">字<rt style="display: none;">じ</rt></ruby></h2>
                            <div class="ie_none slide_hosoku"><span class="hosoku_click"></span></div>
                            <!-- <div class="ie_none hosoku" style="display: none;">
                                <h3><ruby class="ruby_switch">異体<rt style="display: none;">いたい</rt></ruby><ruby class="ruby_switch">字<rt style="display: none;">じ</rt></ruby>とは</h3>
                                <p><ruby class="ruby_switch">異体<rt style="display: none;">いたい</rt></ruby><ruby class="ruby_switch">字<rt style="display: none;">じ</rt></ruby>とは<ruby class="ruby_switch">同<rt style="display: none;">おな</rt></ruby>じ<ruby class="ruby_switch">意味<rt style="display: none;">いみ</rt></ruby>・<ruby class="ruby_switch">読<rt style="display: none;">よ</rt></ruby>み<ruby class="ruby_switch">方<rt style="display: none;">かた</rt></ruby>を<ruby class="ruby_switch">持<rt style="display: none;">も</rt></ruby>つ<ruby class="ruby_switch">字体<rt style="display: none;">じたい</rt></ruby>の<ruby class="ruby_switch">異<rt style="display: none;">こと</rt></ruby>なる<ruby class="ruby_switch">字<rt style="display: none;">じ</rt></ruby>のことです。<br>
                                    ※　「万」-「萬」　「竜」-「龍」　「国」-「國」　など<br>
                                    <a href="https://kanji.jitenon.jp/cat/itaiji.html">→<ruby class="ruby_switch">異体<rt style="display: none;">いたい</rt></ruby><ruby class="ruby_switch">字<rt style="display: none;">じ</rt></ruby>とは</a>
                                </p>
                            </div> -->
                        </div>



                    </div><!--search_words-->
                </div><!--search_data-->
            </article>
        </div><!--content-->

    </div><!--wrapper-->
    <?php wp_footer() ?>