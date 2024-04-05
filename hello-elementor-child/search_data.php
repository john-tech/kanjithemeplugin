<?php

/*
 * Template Name: Detail
 * */
require get_stylesheet_directory() . '/vendor/autoload.php';

use Goutte\Client;

get_header();
$client = new Client();
$crawler = $client->request("GET", "https://kanji.jitenon.jp/cat/search.php?getdata=" . $_GET['getdata'] . "&search=" . $_GET['search'] . "&how=" . $_GET['how']);
$newLink = '#';
$crawler->filter('data_cont a')->each(function ($node) use ($newLink) {
    $node->link()->getNode()->setAttribute('href', $newLink);
});
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
<script>
    jQuery(document).ready(function($) {
//         $("a").removeAttr("href");
//         
    $("div[data-nosnippet]").css("display", "none");
    });
</script>
<style>
		.switching_tab{
			display: none;
		}
	
	
	.side_box {
    display: none;
}
 
    .kanji_about_box {
        display: none;
    }

    /* ul.ChangeElem_Btn_Content {
    display: none !important;
} */
    button.copy_btn {
        display: none;
    }

    .kanji_study {
        display: none;
    }

    aside {
        /* display: none; */
    }

    .word_wrap {
        display: none;
    }

    .nosnippet {
        display: none;
    }

    .search_words {
        width: 772px;
        margin-left: auto;
    }

    .switch-ruby {
        display: none;
    }

    h1.ttl_main {
        margin-left: 444px;
    }
    h1.ttl_main {
    margin-left: 1px !important;
}
    /* */
    aside #sidebar {
    max-width: 300px;
    float: right;
    width: 100%;
    padding-bottom: 4%;
}
</style>
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
    </div>
</header>

<?php
echo $crawler->filter('#wrapper')->html();
?>
  <?php get_template_part( 'part' ); ?>
<script>
    jQuery(document).ready(function($) { 
    $('.search_menu').hide();
        $('.narrowdown_select').hide();
        

 $(".kanji_wrap a").attr("href", "#");
 $(".data_cont a").attr("href", "#");
 
 
 $('.search_switch ul li a').hover(
      function() {
        var targetUrl = $(this).attr('href');
        console.log('Hovered URL:', targetUrl);
        $('#displayedUrl').text(targetUrl);
        var urls =  '<?php echo home_url(); ?>'+'/detail/';
        var modifiedUrl = targetUrl.replace('https://kanji.jitenon.jp/cat/search.php', '');
    // console.log('Modified URL:', modifiedUrl);
        console.log('<?php echo home_url(); ?>'+'/detail/'+modifiedUrl)
        $(this).attr('href', modifiedUrl); 
      },
      function() {
        // Optional: If you want to do something when the mouse leaves the anchor tag
        console.log('Mouse left the link');
      }
    );


    $('.search_more a').hover(
      function() {
        var targetUrl = $(this).attr('href');
        console.log('Hovered URL:', targetUrl);
        $('#displayedUrl').text(targetUrl);
        var urls =  '<?php echo home_url(); ?>'+'/detail/';
        var modifiedUrl = targetUrl.replace('https://kanji.jitenon.jp/cat/search.php', '');
    // console.log('Modified URL:', modifiedUrl);
        console.log('<?php echo home_url(); ?>'+'/detail/'+modifiedUrl)
        $('.search_more a').attr('href', modifiedUrl); 
      },
      function() {
        // Optional: If you want to do something when the mouse leaves the anchor tag
        console.log('Mouse left the link');
      }
    );


    $('.search_more a').hover(
      function() {
        var targetUrl = $(this).attr('href');
        console.log('Hovered URL:', targetUrl);
        $('#displayedUrl').text(targetUrl);
        var urls =  '<?php echo home_url(); ?>'+'/detail/';
        var modifiedUrl = targetUrl.replace('https://kanji.jitenon.jp/mean/search.php', '');
    // console.log('Modified URL:', modifiedUrl);
        console.log('<?php echo home_url(); ?>'+'/detail/'+modifiedUrl)
        $('.search_more a').attr('href', modifiedUrl); 
      },
      function() {
        // Optional: If you want to do something when the mouse leaves the anchor tag
        console.log('Mouse left the link');
      }
    );
// 
     $(".ads_wrapin").remove();
    $("div[data-nosnippet]").css("display", "none"); 
    $('.cat_list li a').mouseenter(function() {
        // Get the text of the hovered li element
        var firstSpanText = $(this).find('span.bold').text();
        var firstSpanText2 = $(this).find('span.normal').text();
        console.log('<?php echo home_url(); ?>'+'/?'+firstSpanText2); 
        $('.cat_list li a').attr('href','<?php echo home_url(); ?>'+'/detail-three/'+'/?bold='+firstSpanText+'&normal='+firstSpanText2);  
        console.log("bold "+ firstSpanText);
        console.log("normal" +firstSpanText2);
    }); 

    $('.meaning_list li a').mouseenter(function() {
        // Get the text of the hovered li element
        var text = $(this).find('span.bold').text();
        var text2 = $(this).find('p').text();
        $('.meaning_list li a').attr('href','<?php echo home_url(); ?>'+'/detail-three/'+'/?bold='+text+'&normal='+text2);  
        console.log('<?php echo home_url(); ?>'+'/detail-three/'+'/?bold='+text+'&normal='+text2); 
        console.log("bold "+ text);
        console.log("normal" +text2);
    });
    // 
    $('.data_cont ul li a').mouseenter(function() {
        // Get the text of the hovered li element
        var star = $(this).find('span:first').text();
        var star2 = $(this).find('span.small').text();
        $('.data_cont li .ajax').attr('href','<?php echo home_url(); ?>'+'/detail-three/'+'/?bold='+star+'&normal='+star2);  
        console.log('<?php echo home_url(); ?>'+'/detail-three/'+'/?bold='+star+'&normal='+star2); 
        console.log("bold "+ star);
        console.log("normal" +star2);
    });

    // 

    $('.search_parts li a').mouseenter(function() { 
        var star = $(this).text(); 
        star2 ="";
        $('.search_parts li a').attr('href','<?php echo home_url(); ?>'+'/detail-three/'+'/?bold='+star+'&normal='+star2);  
        console.log('<?php echo home_url(); ?>'+'/detail-three/'+'/?bold='+star+'&normal='+star2); 
        console.log("bold "+ star); 
    });
        });
</script>

<?php
get_footer();