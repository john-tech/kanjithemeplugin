<?php
  /*
  * Template Name: Reading
  * */

  get_header();

  ?>


<link rel="stylesheet" type="text/css" href="<?= get_stylesheet_directory_uri(); ?>/assest/css/html5reset.css"
    media="screen" />
<link rel="stylesheet" type="text/css" href="<?= get_stylesheet_directory_uri(); ?>/assest/css/styleed06.css?20231023"
    media="screen" />
<link rel="stylesheet" type="text/css"
    href="<?= get_stylesheet_directory_uri(); ?>/assest/css/style_kanjied06.css?20231023" media="screen" />
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
            <!-- <div class="center">
  <div class="header_logo">
  <div class="logo"><a href="https://kanji.jitenon.jp/"><img src="https://kanji.jitenon.jp/images/top-logo.svg" alt="漢字辞典"></a></div>
  <div class="header_menu">
  <div class="toggle_wrap">
  <div class="toggle_switch">
  <div class="menu-trigger">
  <span></span>
  <span></span>
  <span></span>
  </div>
  </div>
  <div class="toggle_contents">
  <ul>
  <li><a href="yomi.html">読み検索</a></li>
  <li><a href="kakusu.html">画数検索</a></li>
  <li><a href="bushu.html">部首検索</a></li>
  <li><a href="https://kanji.jitenon.jp/kousei/">構成検索</a></li>
  <li><a href="kyu.html">漢検級検索</a></li>
  <li><a href="searchdetail.html">詳細検索</a></li>
  </ul>
  </div>
  </div>
  </div>
  </div>
  </div> -->
            <div class="header_search" data-nosnippet>
                <div class="search_inner">
                    <form id="head_form" class="search_form" name="head_form" accept-charset="utf-8" method="post">
                        <span id="select_search" class="select_search">すべて</span>
                        <input type="hidden" id="slide2">
                        <input type="hidden" id="head_how" class="how" value="すべて">
                        <input type="text" id="head_value" name="value" placeholder="例）にんべん 車車車 5画"
                            class="value input_search" value="">
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
            <h1 class="ttl_main">漢字を読みから検索（音訓検索）</h1>

            <div class="data_cont">
                <p>漢字を読みから検索することができます。</p>
                <div class="kana_area">
                    <ul>
                        <li><a href="<?php echo home_url() . "/yomi1"; ?>" data-value="あ" class="se">あ<span class="small">a</span></a></li>
                        <li><a href="<?php echo home_url() . "/yomi2"; ?>" data-value="い" class="se">い<span class="small">i</span></a></li>
                        <li><a href="<?php echo home_url() . "/yomi3"; ?>" data-value="う" class="se">う<span class="small">u</span></a></li>
                        <li><a href="<?php echo home_url() . "/yomi4"; ?>" data-value="え" class="se">え<span class="small">e</span></a></li>
                        <li><a href="<?php echo home_url() . "/yomi5"; ?>" data-value="お" class="se">お<span class="small">o</span></a></li>
                    </ul>
                    <ul>
                        <li><a href="<?php echo home_url() . "/yomi6"; ?>" data-value="か" class="se">か<span class="small">ka</span></a></li>
                        <li><a href="<?php echo home_url() . "/yomi7"; ?>" data-value="き" class="se">き<span class="small">ki</span></a></li>
                        <li><a href="<?php echo home_url() . "/yomi8"; ?>" data-value="く" class="se">く<span class="small">ku</span></a></li>
                        <li><a href="<?php echo home_url() . "/yomi9"; ?>" data-value="け" class="se">け<span class="small">ke</span></a></li>
                        <li><a href="<?php echo home_url() . "/yomi10"; ?>" data-value="こ" class="se">こ<span class="small">ko</span></a></li>
                    </ul>
                    <ul>
                        <li><a href="<?php echo home_url() . "/yomi11"; ?>" data-value="さ" class="se">さ<span class="small">sa</span></a></li>
                        <li><a href="<?php echo home_url() . "/yomi12"; ?>" data-value="し" class="se">し<span class="small">shi</span></a></li>
                        <li><a href="<?php echo home_url() . "/yomi13"; ?>" data-value="す" class="se">す<span class="small">su</span></a></li>
                        <li><a href="<?php echo home_url() . "/yomi14"; ?>" data-value="せ" class="se">せ<span class="small">se</span></a></li>
                        <li><a href="<?php echo home_url() . "/yomi15"; ?>" data-value="そ" class="se">そ<span class="small">so</span></a></li>
                    </ul>
                    <ul>
                        <li><a href="<?php echo home_url() . "/yomi16"; ?>" data-value="た" class="se">た<span class="small">ta</span></a></li>
                        <li><a href="<?php echo home_url() . "/yomi17"; ?>" data-value="ち" class="se">ち<span class="small">chi</span></a></li>
                        <li><a href="<?php echo home_url() . "/yomi18"; ?>" data-value="つ" class="se">つ<span class="small">tsu</span></a></li>
                        <li><a href="<?php echo home_url() . "/yomi19"; ?>" data-value="て" class="se">て<span class="small">te</span></a></li>
                        <li><a href="<?php echo home_url() . "/yomi20"; ?>" data-value="と" class="se">と<span class="small">to</span></a></li>
                    </ul>
                    <ul>
                        <li><a href="<?php echo home_url() . "/yomi21"; ?>" data-value="な" class="se">な<span class="small">na</span></a></li>
                        <li><a href="<?php echo home_url() . "/yomi22"; ?>" data-value="に" class="se">に<span class="small">ni</span></a></li>
                        <li><a href="<?php echo home_url() . "/yomi23"; ?>" data-value="ぬ" class="se">ぬ<span class="small">nu</span></a></li>
                        <li><a href="<?php echo home_url() . "/yomi24"; ?>" data-value="ね" class="se">ね<span class="small">ne</span></a></li>
                        <li><a href="<?php echo home_url() . "/yomi25"; ?>" data-value="の" class="se">の<span class="small">no</span></a></li>
                    </ul>
                    <ul>
                        <li><a href="<?php echo home_url() . "/yomi26"; ?>" data-value="は" class="se">は<span class="small">ha</span></a></li>
                        <li><a href="<?php echo home_url() . "/yomi27"; ?>" data-value="ひ" class="se">ひ<span class="small">hi</span></a></li>
                        <li><a href="<?php echo home_url() . "/yomi28"; ?>" data-value="ふ" class="se">ふ<span class="small">fu</span></a></li>
                        <li><a href="<?php echo home_url() . "/yomi29"; ?>" data-value="へ" class="se">へ<span class="small">he</span></a></li>
                        <li><a href="<?php echo home_url() . "/yomi30"; ?>" data-value="ほ" class="se">ほ<span class="small">ho</span></a></li>
                    </ul>
                    <ul>
                        <li><a href="<?php echo home_url() . "/yomi31"; ?>" data-value="ま" class="se">ま<span class="small">ma</span></a></li>
                        <li><a href="<?php echo home_url() . "/yomi32"; ?>" data-value="み" class="se">み<span class="small">mi</span></a></li>
                        <li><a href="<?php echo home_url() . "/yomi33"; ?>" data-value="む" class="se">む<span class="small">mu</span></a></li>
                        <li><a href="<?php echo home_url() . "/yomi34"; ?>" data-value="め" class="se">め<span class="small">me</span></a></li>
                        <li><a href="<?php echo home_url() . "/yomi35"; ?>" data-value="も" class="se">も<span class="small">mo</span></a></li>
                    </ul>
                    <ul>
                        <li><a href="<?php echo home_url() . "/yomi36"; ?>" data-value="や" class="se">や<span class="small">ya</span></a></li>
                        <li></li>
                        <li><a href="<?php echo home_url() . "/yomi37"; ?>" data-value="ゆ" class="se">ゆ<span class="small">yu</span></a></li>
                        <li></li>
                        <li><a href="<?php echo home_url() . "/yomi38"; ?>" data-value="よ" class="se">よ<span class="small">yo</span></a></li>
                    </ul>
                    <ul>
                        <li><a href="<?php echo home_url() . "/yomi39"; ?>" data-value="ら" class="se">ら<span class="small">ra</span></a></li>
                        <li><a href="<?php echo home_url() . "/yomi40"; ?>" data-value="り" class="se">り<span class="small">ri</span></a></li>
                        <li><a href="<?php echo home_url() . "/yomi41"; ?>" data-value="る" class="se">る<span class="small">ru</span></a></li>
                        <li><a href="<?php echo home_url() . "/yomi42"; ?>" data-value="れ" class="se">れ<span class="small">re</span></a></li>
                        <li><a href="<?php echo home_url() . "/yomi43"; ?>" data-value="ろ" class="se">ろ<span class="small">ro</span></a></li>
                    </ul>
                    <ul>
                        <li><a href="<?php echo home_url() . "/yomi44"; ?>" data-value="わ" class="se">わ<span class="small">wa</span></a></li>
                        <li></li>
                        <li><a href="<?php echo home_url() . "/yomi45"; ?>" data-value="を" class="se">を<span class="small">o</span></a></li>
                        <li></li>
                        <li></li>
                    </ul>
                </div>
                <!--kana_area-->
            </div>
            <!--data_cont-->

        </div>
        <!--content-->
     
		
		<?php get_template_part( 'part' ); ?>
    </div>
</div>
<script>
        // jQuery(document).ready(function($) {
        //     $('.sett').click(function(e) {
        //         e.preventDefault();
        //         var formData = new FormData();
        //         var side_input = $('#head_how').val();
        //         var input = $(this).attr('data-value');
        //         formData.append('side_val', side_input);
        //         formData.append('input_val', input);
        //         formData.append('search', 'contain');
        //         formData.append('action', "seach_data_retun");
        //         $.ajax({
        //                 url: '<?= admin_url('admin-ajax.php') ?>',
        //                 method: 'POST',
        //                 data: formData,
        //                 processData: false,
        //                 contentType: false,
        //             })
        //             .done(function(data) {
        //                 window.location.href = data;
        //                 //console.log(data);
        //             })
        //             .fail(function(data) {
        //                 console.log('error', data);
        //             })
        //             .always(function(data) {

        //             });


        // });
        // });
    </script>
<?php get_footer(); ?>