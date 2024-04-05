<?php
/*
 * Template Name: Detailpage
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
          <style>
               element.style {}

               .parts_box li {
                    width: auto !important;
                    height: auto !important;
               }
               article {
    width: 800px !important;
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
                                   <a href="searchdetail.html">さらに詳しい条件で検索<span>▶</span></a>
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
               <article>
                    <h1 class="ttl_main"><ruby class="ruby_switch">漢字<rt>かんじ</rt></ruby>「七」について</h1>
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

                         </div>
                    </aside>
                    
                    <?php
                    global $wpdb;
                    global $table_prefix;
                    $gen_user_info = $table_prefix . "translatepro";

                    $edit_id = $_GET['figure'];
                    $query = "SELECT * FROM $gen_user_info where id= '$edit_id'";
                    $data = $wpdb->get_results($query);

                    ?>
                    <?php foreach ($data as $row) : ?>
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
                    <div class="search_data">
                         <div class="search_words">
                              <div class="kanji_wrap">
                                   <img class="link_sp" src="../eyecatch/031.png" alt="漢字「七」">
                                   <div class="mokuji">
                                        <p><ruby class="ruby_switch">目次<rt>もくじ</rt></ruby></p><span class="mokuji_parts">【</span><span class="mokuji_toggle"></span><span class="mokuji_parts">】</span>
                                        <ul class="mokuji_contents">
                                             <li><a href="#m_kihon"><span class="moc_number">1</span><ruby class="ruby_switch">部首<rt>ぶしゅ</rt></ruby>・<ruby class="ruby_switch">画数<rt>かくすう</rt></ruby>・<ruby class="ruby_switch">読<rt>よ</rt></ruby>み<ruby class="ruby_switch">方<rt>かた</rt></ruby>・<ruby class="ruby_switch">意味<rt>いみ</rt></ruby>・<ruby class="ruby_switch">成<rt>な</rt></ruby>り<ruby class="ruby_switch">立<rt>た</rt></ruby>ち・<ruby class="ruby_switch">学年<rt>がくねん</rt></ruby>・<ruby class="ruby_switch">漢検級<rt>かんけんきゅう</rt></ruby>など</a></li>
                                             <li><a href="#m_syotai"><span class="moc_number">2</span><ruby class="ruby_switch">書体<rt>しょたい</rt></ruby>（<ruby class="ruby_switch">筆順<rt>ひつじゅん</rt></ruby>）</a></li>
                                             <li><a href="#m_mojicode"><span class="moc_number">3</span><ruby class="ruby_switch">文字<rt>もじ</rt></ruby>コード</a></li>
                                             <li><a href="#m_kenjino"><span class="moc_number">4</span><ruby class="ruby_switch">検字<rt>けんじ</rt></ruby><ruby class="ruby_switch">番号<rt>ばんごう</rt></ruby></a></li>
                                             <li><a href="#m_kousei"><span class="moc_number">5</span><ruby class="ruby_switch">漢字<rt>かんじ</rt></ruby><ruby class="ruby_switch">構成<rt>こうせい</rt></ruby></a></li>
                                             <li><a href="#m_include"><span class="moc_number">6</span>「七」を<ruby class="ruby_switch">含<rt>ふく</rt></ruby>む<ruby class="ruby_switch">漢字<rt>かんじ</rt></ruby></a></li>
                                             <li><a href="#m_name"><span class="moc_number">7</span><ruby class="ruby_switch">人名<rt>じんめい</rt></ruby><ruby class="ruby_switch">読<rt>よ</rt></ruby>み・<ruby class="ruby_switch">名<rt>な</rt></ruby>のり（<ruby class="ruby_switch">名前<rt>なまえ</rt></ruby>での<ruby class="ruby_switch">読<rt>よ</rt></ruby>み）</a></li>
                                             <li><a href="#m_joyohuhyo"><span class="moc_number">8</span><ruby class="ruby_switch">常用<rt>じょうよう</rt></ruby><ruby class="ruby_switch">漢字表<rt>かんじひょう</rt></ruby><ruby class="ruby_switch">付表<rt>ふひょう</rt></ruby>の<ruby class="ruby_switch">語<rt>ご</rt></ruby></a></li>
                                             <li><a href="#m_nandoku"><span class="moc_number">9</span><ruby class="ruby_switch">難読<rt>なんどく</rt></ruby><ruby class="ruby_switch">読<rt>よ</rt></ruby>み</a></li>
                                             <li><a href="#m_chimei"><span class="moc_number">10</span><ruby class="ruby_switch">地名<rt>ちめい</rt></ruby>での<ruby class="ruby_switch">読<rt>よ</rt></ruby>み</a></li>
                                             <li><a href="#m_myoji"><span class="moc_number">11</span>「七」を<ruby class="ruby_switch">含<rt>ふく</rt></ruby>む<ruby class="ruby_switch">名字<rt>みょうじ</rt></ruby></a></li>
                                             <li><a href="#m_word"><span class="moc_number">12</span>「七」を<ruby class="ruby_switch">含<rt>ふく</rt></ruby>む<ruby class="ruby_switch">言葉<rt>ことば</rt></ruby>・<ruby class="ruby_switch">熟語<rt>じゅくご</rt></ruby></a></li>
                                             <li><a href="#m_yoji"><span class="moc_number">13</span>「七」を<ruby class="ruby_switch">含<rt>ふく</rt></ruby>む<ruby class="ruby_switch">四字熟語<rt>よじじゅくご</rt></ruby></a></li>
                                             <li><a href="#m_kotowaza"><span class="moc_number">14</span>「七」を<ruby class="ruby_switch">含<rt>ふく</rt></ruby>むことわざ</a></li>
                                        </ul>
                                   </div>
                                   <div class="kanji_about">
                                        <div class="kanji_about_box">
                                             <h2>七とは？</h2>
                                             <p><strong>七は、<span class="marker">ななつ / <ruby class="ruby_switch">七回<rt>ななかい</rt></ruby> / <ruby class="ruby_switch">七<rt>なな</rt></ruby>つ<ruby class="ruby_switch">目<rt>め</rt></ruby></span>などの<ruby class="ruby_switch">意味<rt>いみ</rt></ruby>を<ruby class="ruby_switch">持<rt>も</rt></ruby>つ<ruby class="ruby_switch">漢字<rt>かんじ</rt></ruby></strong>です。</p>
                                             <p><ruby class="ruby_switch">部首<rt>ぶしゅ</rt></ruby>は<ruby class="ruby_switch">一部<rt>いちぶ</rt></ruby>に<ruby class="ruby_switch">属<rt>ぞく</rt></ruby>し、<ruby class="ruby_switch">画数<rt>かくすう</rt></ruby>は２<ruby class="ruby_switch">画<rt>かく</rt></ruby>、<ruby class="ruby_switch">習<rt>なら</rt></ruby>う<ruby class="ruby_switch">学年<rt>がくねん</rt></ruby>は<ruby class="ruby_switch">小学校<rt>しょうがっこう</rt></ruby>１<ruby class="ruby_switch">年生<rt>ねんせい</rt></ruby>、<ruby class="ruby_switch">漢字<rt>かんじ</rt></ruby><ruby class="ruby_switch">検定<rt>けんてい</rt></ruby>の<ruby class="ruby_switch">級<rt>きゅう</rt></ruby>は１０<ruby class="ruby_switch">級<rt>きゅう</rt></ruby>です。</p>
                                             <p><ruby class="ruby_switch">読<rt>よ</rt></ruby>み<ruby class="ruby_switch">方<rt>かた</rt></ruby>には、シチ / シツ / なな / なな（つ） / なのなどがあります。</p>
                                        </div>
                                   </div>
                                   <div class="kanji_right">

                                        <div class="kan_top">
                                             <section>
                                                  <!-- <h2>「七」の<ruby class="ruby_switch">部首<rt>ぶしゅ</rt></ruby>・<ruby class="ruby_switch">画数<rt>かくすう</rt></ruby>・<ruby class="ruby_switch">読<rt>よ</rt></ruby>み<ruby class="ruby_switch">方<rt>かた</rt></ruby>・<ruby class="ruby_switch">意味<rt>いみ</rt></ruby>など</h2> -->
                                                  <table class="kanjirighttb">
                                                       <tbody>
                                                            <tr>
                                                                 <th id="m_kihon"><ruby class="ruby_switch">NO</ruby></th>
                                                                 <td><a href="https://kanji.jitenon.jp/cat/bushu01001.html"><?= $row->no; ?><</a></td>
                                                            </tr>
                                                            <tr>
                                                                 <th><ruby class="ruby_switch">  漢字 </ruby></th>
                                                                  <td><?= $row->far; ?></td>
                                                            </tr>
                                                            <tr>
                                                                 <th rowspan="2"><ruby class="ruby_switch"> 旧字体  </th>
                                                                 <td><?= $row->old_font; ?></td>
                                                            </tr>
                                                            <tr>
                                                                 <!-- <td><span class="yomi_icon"><img src="https://kanji.jitenon.jp/images/yomi_icon4.svg" alt="表外読み"></span><a href="https://kanji.jitenon.jp/yomi/4157.html">シツ</a></td> -->
                                                            </tr>
                                                            <tr>
                                                                 <th rowspan="3"><ruby class="ruby_switch"> 画数 </ruby></th>
                                                                 <td><?= $row->number_of_strokes; ?></td>                                                            </tr>
                                                            <tr>
                                                                 <!-- <td><spa  n class="yomi_icon"><img src="https://kanji.jitenon.jp/images/yomi_icon1.svg" alt="小学校で習う読み"></span><a href="https://kanji.jitenon.jp/yomi/656552.html">なな（つ）</a></td> -->
                                                            </tr>
                                                            <tr>
                                                                 <!-- <td><span class="yomi_icon"><img src="https://kanji.jitenon.jp/images/yomi_icon1.svg" alt="小学校で習う読み"></span><a href="https://kanji.jitenon.jp/yomi/6569.html">なの</a></td> -->
                                                            </tr>
                                                            <tr>
                                                                 <th rowspan="2">部首   </th>
                                                                 <td><?= $row->radical; ?></td>                                                            </tr>

                                                                 <!-- <td>ななつ。<ruby class="ruby_switch">七番目<rt>ななばんめ</rt></ruby>。<ruby class="ruby_switch">七<rt>なな</rt></ruby>つ<ruby class="ruby_switch">目<rt>め</rt></ruby>。</td> -->
                                                            </tr>
                                                            <tr>
                                                                 <!-- <td>abcc<ruby class="ruby_switch">何度<rt>なんど</rt></ruby>も。<ruby class="ruby_switch">何回<rt>なんかい</rt></ruby>も。</td> -->
                                                            </tr>
                                                            <tr>
                                                                 <th><ruby class="ruby_switch">音読み </th>
                                                                 <td><?= $row->reading_aloud; ?></td>                                                  
                                                            </tr>
                                                            <tr>
                                                                 <th><ruby class="ruby_switch">訓読み </th>
                                                                 <td><?= $row->kun_reading; ?></td>                                                                                               </tr>
                                                            <tr>
                                                                 <th><ruby class="ruby_switch">解説 </th>
                                                                 <td><?= $row->explanation; ?></td>                     
                                                            </tr>
                                                          
                                                       </tbody>
                                                  </table>

                                                  <!-- <p class="code_at">※Unicodeは<a href="#m_mojicode"><ruby class="ruby_switch">文字<rt>もじ</rt></ruby>コード<ruby class="ruby_switch">欄<rt>らん</rt></ruby></a>に<ruby class="ruby_switch">移動<rt>いどう</rt></ruby>しました。</p> -->
                                             </section>
                                             <aside>
                                                  <ul class="tag">
                                                       <!-- <li><span class="yomi_icon"><img src="https://kanji.jitenon.jp/images/yomi_icon1.svg" alt="小学校で習う読み"></span>…<a href="https://kanji.jitenon.jp/cat/school1"><ruby class="ruby_switch">小学校<rt>しょうがっこう</rt></ruby>で<ruby class="ruby_switch">習<rt>なら</rt></ruby>う<ruby class="ruby_switch">読<rt>よ</rt></ruby>み</a></li>
                                                       <li><span class="yomi_icon"><img src="https://kanji.jitenon.jp/images/yomi_icon4.svg" alt="表外読み"></span>…<a href="https://kanji.jitenon.jp/cat/hyogai.html"><ruby class="ruby_switch">表外<rt>ひょうがい</rt></ruby><ruby class="ruby_switch">読<rt>よ</rt></ruby>み</a></li> -->
                                                  </ul>
                                             </aside>
                                        </div>

                                   </div><!--kanji_right-->
                                   <div class="kanji_left">
                                        <section>

                                             <h2 id="m_syotai" class="left_border">「七」の<ruby class="ruby_switch">書体<rt>しょたい</rt></ruby></h2>
                                             <div class="kanji_main ChangeElem_Panel" style="display:block"><?= $row->far; ?></div>
                                                  <ul class="ChangeElem_Btn_Content">
                                                  <li class="ChangeElem_Btn"><ruby class="ruby_switch">明朝<rt>みんちょう</rt></ruby><ruby class="ruby_switch">体<rt>たい</rt></ruby></li>
                                                  <li class="ChangeElem_Btn"><ruby class="ruby_switch">教科書<rt>きょうかしょ</rt></ruby><ruby class="ruby_switch">体<rt>たい</rt></ruby></li>
                                                  <li class="ChangeElem_Btn is-active"><ruby class="ruby_switch">教科書<rt>きょうかしょ</rt></ruby><ruby class="ruby_switch">体<rt>たい</rt></ruby><span class="hbr">（<ruby class="ruby_switch">筆順<rt>ひつじゅん</rt></ruby>）</span></li>
                                                  <li class="ChangeElem_Btn"><span class="gothic">ゴシック<ruby class="ruby_switch">体<rt>たい</rt></ruby></span></li>
                                                  <li class="ChangeElem_Btn"><ruby class="ruby_switch">楷書<rt>かいしょ</rt></ruby><ruby class="ruby_switch">体<rt>たい</rt></ruby></li>
                                                  <li class="ChangeElem_Btn"><ruby class="ruby_switch">行書<rt>ぎょうしょ</rt></ruby><ruby class="ruby_switch">体<rt>たい</rt></ruby></li>
                                                  <li class="ChangeElem_Btn"><ruby class="ruby_switch">草書<rt>そうしょ</rt></ruby><ruby class="ruby_switch">体<rt>たい</rt></ruby></li>
                                                  <li class="ChangeElem_Btn"><ruby class="ruby_switch">隷書<rt>れいしょ</rt></ruby><ruby class="ruby_switch">体<rt>たい</rt></ruby></li>
                                                  <li class="ChangeElem_Btn"><ruby class="ruby_switch">篆書<rt>てんしょ</rt></ruby><ruby class="ruby_switch">体<rt>たい</rt></ruby></li>
                                             </ul>
                                             
                                             
                                        </section>
                                   </div><!--kanji_left-->
                              </div><!--kanji_wrap-->

                         </div><!--preview_wrap-->
                         <?php endforeach; ?>
                    </div><!-- nosnippet -->
          </div><!--search_words-->
     </div><!--search_data-->
     </article>
</div><!--content-->


<?php get_template_part( 'part' ); ?>
</div><!--wrapper-->
<?php wp_footer() ?>