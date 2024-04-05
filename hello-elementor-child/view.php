<?php
/*
 * Template Name: View
 * */

get_header();

?>


<link rel="stylesheet" type="text/css" href="<?= get_stylesheet_directory_uri(); ?>/assest/css/html5reset.css" media="screen" />
<link rel="stylesheet" type="text/css" href="<?= get_stylesheet_directory_uri(); ?>/assest/css/styleed06.css?20231023" media="screen" />
<link rel="stylesheet" type="text/css" href="<?= get_stylesheet_directory_uri(); ?>/assest/css/style_kanjied06.css?20231023" media="screen" />
<script src="<?= get_stylesheet_directory_uri(); ?>/assest/js/jquery-3.4.1.min.js"></script>
<script src="<?= get_stylesheet_directory_uri(); ?>/assest/js/jquery.cookie.js"></script>
<script type="text/javascript" src="<?= get_stylesheet_directory_uri(); ?>/assest/js/main/main0598.js?20231008"></script>
<script type="text/javascript" src="<?= get_stylesheet_directory_uri(); ?>/assest/js/kanji/main0598.js?20231008"></script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
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
                            <a href="#">さらに詳しい条件で検索<span>▶</span></a>
                        </div>
                    </div>
                </div>
            </div>
           
        </div>
    </header>
    <div id="wrapper" class="cf">
        <div id="content">
            <h1 class="ttl_main">漢字を画数から検索</h1>

            <div class="data_cont">
                <div class="kakusu_area">
                    <ul>

                        <div class="container">

                            <?php

                            $table_extra = $table_prefix . 'translatepro';
                            $select = $wpdb->get_results("SELECT * FROM $table_extra");
                            ?>
                            <div class="table-responsive">
                                <!-- Table start -->
                                <div class="container table-container mainPage-table">
                                    <table class="test">
                                        <thead class="kakusu_area">
                                            <tr>
                                                <th>NO</th>
                                                <th>漢字</th>
                                                <th>旧字体</th>
                                                <th>画数</th>
                                                <th>部首</th>
                                                <th>音読み</th>
                                                <th>訓読み</th>
                                                <th>解説</th>
                                                <?php 
                                                            if (is_user_logged_in()) {
                                                        echo '<th>Action</th>';}?>

                                            </tr>
                                        </thead>
                                        <tbody class="kakusu_area" id="myUL">
                                            <?php
                                            if ($select > 0) {
                                                foreach ($select as $row) {
                                                    $id = $row->id;
                                                    $no = $row->no;
                                                    $far = $row->far;
                                                    $old_font = $row->old_font;
                                                    $number_of_strokes = $row->number_of_strokes;
                                                    $radical = $row->radical;
                                                    $reading_aloud = $row->reading_aloud;
                                                    $kun_reading = $row->kun_reading;
                                                    $explanation = $row->explanation;

                                            ?>
                                                    <tr class="table-rows" id="table-row">
                                                        <td class="names">asdfasdf<?= $no; ?></td>
                                                        <td class="names"><?= $far; ?></td>
                                                        <td class="names"><?= $old_font; ?></td>
                                                        <td class="names"><?= $number_of_strokes; ?></td>
                                                        <td class="names"><?= $radical; ?></td>
                                                        <td class="names"><?= $reading_aloud; ?></td>
                                                        <td class="names"><?= $kun_reading; ?></td>
                                                        <td class="names"><?= $explanation; ?></td>
                                                        <!-- <td class="edit-cell"><u></td> -->
                                                        <?php 
                                                            if (is_user_logged_in()) { 
                                                                echo  '     <td class="edit-cell"><u>
                                                                <a href="'.home_url('view-data') . '/?figure=' . $id.'">看法 </a>
                                                        <a class="delete_product" data-id='.$id.' data-toggle="tooltip" data-placement="top" title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 text-danger warning ">
                                                        <polyline points="3 6 5 6 21 6"></polyline>
                                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                        </path>
                                                        <line x1="10" y1="11" x2="10" y2="17"></line>
                                                        <line x1="14" y1="11" x2="14" y2="17"></line>
                                                        </svg></a>
                                                        <a name="edit" id="'.$id.'"  class="edit_data" data-toggle="tooltip" data-placement="top" title="Edit"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 text-success">
                                                        <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z">
                                                        </path>
                                                        </svg></a>


                                                        </u></td>';
                                                            }?>
                                                        
         
                                                    </tr>
                                            <?php
                                                }
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>

                            </div>

                        </div>
                    </ul>
                </div>
            </div><!--data_cont-->
        </div>
        <?php get_template_part( 'part' ); ?>

    </div><!--wrapper--></div><!--all--> 

    <div id="zoomupModal" class="modal animated zoomInUp custo-zoomInUp" role="dialog">

<div class="modal-dialog">
  <!-- Modal content-->
  <div class="modal-content">
      <div class="modal-header">
          <h5 class="modal-title">Edit</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                  <line x1="18" y1="6" x2="6" y2="18"></line>
                  <line x1="6" y1="6" x2="18" y2="18"></line>
              </svg>
          </button>
      </div>

      <div class="modal-body">
          <form method="post" id="insert_form" enctype="multipart/form-data">
              <div class="form-row mb-4">
                <div class="row">
                    <div class="col">
                        <label for="">NO</label>
                        <input type="text" id="xnos" name="nos" class="form-control">
                    </div>
                    <div class="col">
                        <label for="">漢字</label>
                        <input type="text"  id="xfar" name="far" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="">旧字体</label>
                        <input type="text"  id="xold_font" name="old_font" class="form-control">
                    </div>
                    <div class="col">
                        <label for="">画数</label>
                        <input type="text" id="xnum_stock" name="num_stock" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="">部首</label>
                        <input type="text"  id="xredicals" name="redical" class="form-control">
                    </div>
                    <div class="col">
                        <label for="">音読み</label>
                        <input type="text"  id="xread_alo" name="read_alo" class="form-control">
                    </div>
                </div>
                    <div class="row">
                        <div class="col">
                            <label for="">訓読み</label>
                            <input type="text"  id="xkun_read" name="kun_read" class="form-control">
                        </div>
                        <div class="col">
                            <label for="">解説</label>
                            <input type="text"  id="xexplain" name="explain" class="form-control">
                        </div>
                    </div>
                    
                  <input type="hidden" name="employee_id" id="employee_id"> 
              </div>
              <div class="modal-footer">
                  <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Cancel</button>
                  <button class="btn btn-primary float-right font-weight-bold mx-2" name="submit" type="submit">Update</button>
              
              </div>  
          </form>
      </div>

  </div>
</div>  
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
 
<script>
    function togglePopup() {
        document.getElementById("popup-1").classList.toggle("deactive");
    }
</script>
<script>
    jQuery(document).ready(function($) {
        $('.delete_product').click(function() {
            var el = this;

            // Delete id
            var deleteid = $(this).data('id');
            // console.log("id"+deleteid)
            var confirmalert = confirm("Are you sure?");
            if (confirmalert == true) {
                // AJAX Request
                $.ajax({
                    url: '<?php echo home_url('wp-content/themes/hello-elementor-child/ajax/delete.php'); ?>',
                    type: 'POST',
                    data: {
                        deleteid: deleteid
                    },
                    success: function(response) {
                if (response) {
                            // Remove row from HTML Table
                            $(el).closest('tr').css('background', 'tomato');
                            $(el).closest('tr').fadeOut(800, function() {
                                $(this).remove();
                                swal({
                                    title: 'Delete Record succesfully',
                                    padding: '2em'
                                })
                            });

                        } else {
                            alert('Invalid ID.');
                        }

                    }
                });
           
            }

        });
 
        jQuery(document).on('click', '.edit_data', function() {
                var employee_id = $(this).attr("id"); 
                // alert(employee_id)
                
                $.ajax({ 
                    url: '<?php echo home_url('wp-content/themes/hello-elementor-child/ajax/fetch_rec.php'); ?>',
                    method: "POST",
                    data: {
                        employee_id: employee_id
                    },
                    dataType: "json",
                    success: function(data) {
                        console.log(data) 
                        $('#xnum_stock').val(data[0]['number_of_strokes']);
                        $('#employee_id').val(data[0]['id']);
                        $('#xnos').val(data[0]['no']);
                        $('#xfar').val(data[0]['far']);
                        $('#xold_font').val(data[0]['old_font']);
                        $('#xredicals').val(data[0]['radical']);
                        $('#xread_alo').val(data[0]['reading_aloud']);
                        $('#xkun_read').val(data[0]['kun_reading']);
                        $('#xexplain').val(data[0]['explanation']); 
                        $('#zoomupModal').modal('show');
                   
                    
                     console.log("no 2 =>  "+data[0]['no']);
                     console.log("no 3 =>  "+data[0]['far']);
                     console.log("no 4 =>  "+data[0]['old_font']);
                     console.log("no 5 =>  "+data[0]['number_of_strokes']);
                     console.log("no 6 =>  "+data[0]['radical']);
                     console.log("no 7=>  "+data[0]['reading_aloud']);
                     console.log("no 8=>  "+data[0]['kun_reading']);
                     console.log("no 9=>  "+data[0]['explanation']); 
                        $('#insert').val("Update");
                        $('#title_edit').text("Edit Data");
                    
                    }
                });
                });

                $('#insert_form').on("submit", function(event) {
                event.preventDefault();
                if ($('#folder').val() == "") {
                    alert("Please Select Folders");


                } else {
                    // alert($('#cab_id').val());
                    $.ajax({
                    url: '<?php echo home_url('wp-content/themes/hello-elementor-child/ajax/upd_rec.php'); ?>',
                        type: 'POST',
                        data: $('#insert_form').serialize(),
                        beforeSend: function() {
                            $('#insert').val("Inserting");
                        },
                        success: function(data) {
                            console.log(data);
                            $('#insert_form')[0].reset();
                            $('#zoomupModal').modal('hide');
                            $('#employee_table').html(data);
                            // $("#html5-extension").load(" #html5-extension");
                          window.location.reload();
                        }
                    });
                }
            });
 
    });
 

</script>
<?php get_footer(); ?>