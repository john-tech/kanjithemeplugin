<?php
/*
 * Template Name: viewimg
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
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</script>
<script src="<?= get_stylesheet_directory_uri(); ?>/assest/js/jquery-3.4.1.min.js"></script>
<script src="<?= get_stylesheet_directory_uri(); ?>/assest/js/jquery.cookie.js"></script>
<script type="text/javascript" src="<?= get_stylesheet_directory_uri(); ?>/assest/js/main/main0598.js?20231008">
</script>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" /> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>

<script type="text/javascript" src="<?= get_stylesheet_directory_uri(); ?>/assest/js/kanji/main0598.js?20231008">
</script>
<div id="all">
    <style>
    .parts_box {
        overflow: scroll;
        /* Show scrollbars */
    }

    .flex-parent {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .box {
        background-color: #d4d4d4;
        margin: 5px;
        padding: 5px;
        /* text-align: center; */
    }

    #zoomupModal {
        --bs-modal-margin: 6.75rem !important;
    }

    .modal-footer {
        justify-content: flex-start !important;
    }
    </style>
    <header>
        <div class="nosnippet" data-nosnippet>
            <div class="header_search" data-nosnippet>
                <div class="search_inner">
                    <form id="head_form" class="search_form" name="head_form" onsubmit="return false"
                        accept-charset="utf-8" method="post">
                        <span id="select_search" class="select_search">部首</span>
                        <input type="hidden" id="slide2">
                        <input type="hidden" id="head_how" class="how" value="部首">
                        <input type="text" id="head_value" name="value" placeholder="例）にんべん 車車車 5画"
                            class="value input_search" value="">
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
    <style>
    div.scrollmenu {
        /*   background-color: #333; */
        overflow: auto;
        white-space: nowrap;
    }

    div.scrollmenu a {
        display: inline-block;
        color: white;
        text-align: center;
        padding: 14px;
        text-decoration: none;
    }

    img {
        vertical-align: middle;
        width: 60px;
    }
    </style>
    <div id="wrapper" class="cf">
        <div id="content">
            <h1 class="ttl_main">１画の漢字一覧（漢検級順）</h1>
            <div class="parts_data">

                <div class="bushu_wrap">
                    <div class="color_info">

                    </div>
                    <?php
                    $upload_dir = wp_upload_dir();

                    $table_extra = $table_prefix . 'transimage';
                    $select = $wpdb->get_results("SELECT * FROM `wp_transimage` WHERE text_field ='古代文字';");
                    $select2 = $wpdb->get_results("SELECT * FROM `wp_transimage` WHERE text_field ='篆書';");
                    $select3 = $wpdb->get_results("SELECT * FROM `wp_transimage` WHERE text_field ='隷書';");
                    $select4 = $wpdb->get_results("SELECT * FROM `wp_transimage` WHERE text_field ='楷書';");
                    $select5 = $wpdb->get_results("SELECT * FROM `wp_transimage` WHERE text_field ='⾏書';");
                    $select6 = $wpdb->get_results("SELECT * FROM `wp_transimage` WHERE text_field ='草書';");
                    ?>

                    <div class="parts_box" id="parts10">
                        <h3 class="ttl_while"><a href="#">古代文字</a></h3>
                        <div class="scrollmenu">
                            <?php
                    if ($select > 0) {
                        foreach ($select as $row) {
                            $filed_id = $row->id;
                            $text_field = $row->text_field;
                            $file_name_1 = $row->file_name_1; 
                            $file_name_1s = preg_replace('/\.\w+$/', '', $file_name_1);   ?>
                            <a><img class="edit_data" id="<?= $filed_id; ?>"
                                    src="<?= home_url('/wp-admin/uploads/' . $file_name_1); ?>"
                                    alt="<?= $file_name_1s; ?>"></a>
                            <?php }}?>
                        </div>
                    </div>


                    <!-- /////////////// -->

                    <div class="parts_box" id="parts10">
                        <h3 class="ttl_while"><a href="#">篆書</a></h3>
                        <div class="scrollmenu">
                            <?php
                    if ($select2 > 0) {
                        foreach ($select2 as $rows) {
                            $filed_ids = $rows->id;
                            $text_field = $rows->text_field;
                            $file_name_1s = $rows->file_name_1; 

                            $file_name_1ss = preg_replace('/\.\w+$/', '', $file_name_1s); 

                    ?>

                            <a><img class="edit_data" id="<?= $filed_ids; ?>"
                                    src="<?= home_url('/wp-admin/uploads/' . $file_name_1s); ?>"
                                    alt="<?= $file_name_1ss; ?>"></a>
                            <?php }}?>
                        </div>
                    </div>



                    <div class="parts_box" id="parts10">
                        <h3 class="ttl_while"><a href="#">隷書</a></h3>
                        <div class="scrollmenu">
                            <?php
                    if ($select3 > 0) {
                        foreach ($select3 as $rows) {
                            $filed_ids = $rows->id;
                            $text_field = $rows->text_field;
                            $file_name_1s = $rows->file_name_1; 
                            $file_name_1ss = preg_replace('/\.\w+$/', '', $file_name_1s); 
                            ?>

                            <a><img class="edit_data" id="<?= $filed_ids; ?>"
                                    src="<?= home_url('/wp-admin/uploads/' . $file_name_1s); ?>"
                                    alt="<?= $file_name_1ss; ?>"></a>
                            <?php }}?>
                        </div>
                    </div>
                    <div class="parts_box" id="parts10">
                        <h3 class="ttl_while"><a href="#">楷書</a></h3>
                        <div class="scrollmenu">
                            <?php
                    if ($select4 > 0) {
                        foreach ($select4 as $rows) {
                            $filed_ids = $rows->id;
                            $text_field = $rows->text_field;
                            $file_name_1s = $rows->file_name_1; 
                            $file_name_1ss = preg_replace('/\.\w+$/', '', $file_name_1s);     ?>
                            <a><img class="edit_data" id="<?= $filed_ids; ?>"
                                    src="<?= home_url('/wp-admin/uploads/' . $file_name_1s); ?>"
                                    alt="<?= $file_name_1ss; ?>"></a>
                            <?php }}?>
                        </div>
                    </div>

                    <div class="parts_box" id="parts10">
                        <h3 class="ttl_while"><a href="#">⾏書</a></h3>
                        <div class="scrollmenu">
                            <?php
                           if ($select5 > 0) {
                             foreach ($select5 as $rows) {
                            $filed_ids = $rows->id;
                            $text_field = $rows->text_field;
                            $file_name_1s = $rows->file_name_1; 

                            $file_name_1ss = preg_replace('/\.\w+$/', '', $file_name_1s); 
                            ?>
                            <a><img class="edit_data" id="<?= $filed_ids; ?>"
                                    src="<?= home_url('/wp-admin/uploads/' . $file_name_1s); ?>"
                                    alt="<?= $file_name_1ss; ?>"></a>
                            <?php }}?>
                        </div>
                    </div>
                    <div class="parts_box" id="parts10">
                        <h3 class="ttl_while"><a href="#">草書</a></h3>
                        <div class="scrollmenu">
                            <?php
                    if ($select6 > 0) {
                        foreach ($select6 as $rows) {
                            $filed_ids = $rows->id;
                            $text_field = $rows->text_field;
                            $file_name_1s = $rows->file_name_1; 
                            $file_name_1ss = preg_replace('/\.\w+$/', '', $file_name_1s); 
                            ?>
                            <a><img class="edit_data" id="<?= $filed_ids; ?>"
                                    src="<?= home_url('/wp-admin/uploads/' . $file_name_1s); ?>"
                                    alt="<?= $file_name_1ss; ?>"></a>
                            <?php }}?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php get_template_part( 'part' ); ?>
    </div>
</div>

</div>
<!--parts_data-->
<div id="zoomupModal" class="modal animated zoomInUp custo-zoomInUp" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" id="btnclose" aria-label="Close">
                    <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="feather feather-x">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg>
                </button>
            </div>

            <div class="modal-body">
                <div class="containert"></div>
            </div>
            <div class="modal-footer">
                <h5 class="modal-title ">Name: <span id=""></span> </h5>

            </div>
        </div>
    </div>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js">
</script>

<script>
$(document).on('click', '.edit_data', function() {

    var employee_id = $(this).attr("src");
    var getset = $(this).attr("alt");
    console.log(getset)
    if (employee_id) {
        $(".containert").html(null)
        $("h5").text(null)
        $('.containert').prepend("<img  src=" + employee_id + " />")
        $('#zoomupModal').modal('show');
        $("h5").text(getset)
    }
});
$("#btnclose").on("click", function() {
    $('#zoomupModal').modal('hide');
})
</script>

<?php wp_footer() ?>