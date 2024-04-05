<?php






function search_from_ajax()
{
?>
     <script>


        jQuery(document).ready(function($) {
        $(".ttl_while a").removeAttr("href");
        test = 'contain'
        $(".search_menu2").hide();
        
        $('#sel21').click(function(e) {
             test = 'contain'
        }); 
        $('#sel22').click(function(e) {
             test = 'fpart'
        }); 
        $('#sel23').click(function(e) {
             test = 'epart'
        }); 
        $('#sel24').click(function(e) {
             test = 'match'
        }); 



            $('#head_submit').click(function(e) {
                e.preventDefault();
                var formData = new FormData();
                var side_input = $('#head_how').val();
                var input = $('#head_value').val();
                formData.append('side_val', side_input);
                formData.append('input_val', input);
                formData.append('search', test);
                formData.append('action', "seach_data_retun");
                $.ajax({
                        url: '<?= admin_url('admin-ajax.php') ?>',
                        method: 'POST',
                        data: formData,
                        processData: false,
                        contentType: false,
                    })
                    .done(function(data) {
                        window.location.href = data;
                        //console.log(data);
                    })
                    .fail(function(data) {
                        console.log('error', data);
                    })
                    .always(function(data) {

                    });
            });
        });
    </script>

<?php


}

add_action("wp_footer", "search_from_ajax");



function seach_data_retun()
{


    $val = $_POST['input_val'];
    $side_val = $_POST['side_val'];
    $search = $_POST['search'];
    $characters = preg_split('//u', $val, -1, PREG_SPLIT_NO_EMPTY);
    $unicodeCodePoints = array_map(function ($char) {
        return dechex(unpack('N', mb_convert_encoding($char, 'UTF-32BE', 'UTF-8'))[1]);
    }, $characters);
    $result = implode('_', $unicodeCodePoints);
 $url = home_url() . '/detail/?getdata=305b&search=' . $search . '&how=' . $side_val;
    echo $url;
    wp_die();
}

add_action('wp_ajax_seach_data_retun', 'seach_data_retun');
add_action('wp_ajax_nopriv_seach_data_retun', 'seach_data_retun');


add_shortcode('custom_search_bar', 'cut_search_bar');
function cut_search_bar()
{
?>
<script src="<?= get_stylesheet_directory_uri(); ?>/assest/js/jquery-3.4.1.min.js"></script>
<script src="<?= get_stylesheet_directory_uri(); ?>/assest/js/jquery.cookie.js"></script>
<script type="text/javascript" src="<?= get_stylesheet_directory_uri(); ?>/assest/js/main/main0598.js?20231008">
</script>
<script type="text/javascript" src="<?= get_stylesheet_directory_uri(); ?>/assest/js/kanji/main0598.js?20231008">
</script>

    <link rel="stylesheet" type="text/css" href="<?= get_stylesheet_directory_uri(); ?>/assest/css/html5reset.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?= get_stylesheet_directory_uri(); ?>/assest/css/styleed06.css?20231023" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?= get_stylesheet_directory_uri(); ?>/assest/css/style_kanjied06.css?20231023" media="screen" />
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

<script>
jQuery(document).ready(function($) {
    $('.sett').click(function(e) {
        e.preventDefault();
        var formData = new FormData();
        var side_input = $('#head_how').val();
        var input = $(this).attr('data-value');
        formData.append('side_val', side_input);
        formData.append('input_val', input);
        formData.append('search', 'contain');
        formData.append('action', "seach_data_retun");
        $.ajax({
                url: '<?= admin_url('admin-ajax.php') ?>',
                method: 'POST',
                data: formData,
                processData: false,
                contentType: false,
            })
            .done(function(data) {
                window.location.href = data;
                //console.log(data);
            })
            .fail(function(data) {
                console.log('error', data);
            })
            .always(function(data) {

            });


    });
});
</script>
<?php
}
?>