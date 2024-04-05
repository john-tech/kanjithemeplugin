<?php
global $wpdb;
global $table_prefix;

?>

<style>
    input[type=text],
    select,
    textarea {
        width: 97%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 4px;
        resize: vertical;
    }

    label {
        padding: 12px 12px 12px 0;
        display: inline-block;
    }

    input[type=submit] {
        background-color: #04AA6D;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    .btn.btn-primarys {
        padding: 10px 22px;
        color: #fff;
        background: #007bff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    input[type=submit]:hover {
        background-color: #45a049;
    }

    .container {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;
    }

    .col-25 {
        float: left;
        width: 8%;
        margin-top: 6px;
    }

    .col-75 {
        float: left;
        width: 30%;
        margin-top: 6px;
    }

    .row:after {
        content: "";
        display: table;
        clear: both;
    }

    @media screen and (max-width: 600px) {

        .col-25,
        .col-75,
        input[type=submit] {
            width: 100%;
            margin-top: 0;
        }
    }

    .test {
        width: 100%;
    }

    table,
    th,
    td {
        border: 1px solid black;

    }
    .container, .container-lg, .container-md, .container-sm, .container-xl {
    max-width: 100% !important;
}
</style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  
<div class="container sapp" style="border-style: ridge;">

    <form id="plate_ran_form" method="POST">
        <div class="inline" style="display: inline-block;">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-25">
                    <label for="plate_number">NO</label>
                </div>
                <div class="col-75">
                    <input type="text" id="nos" name="nos">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="plate_number">漢字</label>
                </div>
                <div class="col-75">
                    <input type="text" id="far" name="far">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="plate_number">旧字体</label>
                </div>
                <div class="col-75">
                    <input type="text" id="old_font" name="old_font">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="plate_number">画数</label>
                </div>
                <div class="col-75">
                    <input type="text" id="num_stock" name="num_stock">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="plate_number">部首</label>
                </div>
                <div class="col-75">
                    <input type="text" id="redical" name="redical">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="plate_number">音読み</label>
                </div>
                <div class="col-75">
                    <input type="text" id="read_alo" name="read_alo">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="plate_number">訓読み</label>
                </div>
                <div class="col-75">
                    <input type="text" id="kun_read" name="kun_read">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="plate_number">解説</label>
                </div>
                <div class="col-75">
                    <input type="text" id="explain" name="explain">
                </div>
            </div>
            <div class="row">
                <br>
                <input type="submit" name="plate_ran" class="subb" value="Submit">
            </div>
    </form>
</div>
<h4>Or Upload</h4>

<?php
// require_once('../../../../../wp-load.php');
require('lib/vendor/autoload.php');
// require 'vendor/vendor/autoload.php'; // Load PhpSpreadsheet library
use PhpOffice\PhpSpreadsheet\IOFactory;


// global $wpdb;
$add_id = $wpdb->prefix . "translatepro";
if (isset($_FILES['file']['tmp_name'])) {


    $file = $_FILES['file']['tmp_name'];

    if (empty($file)) {
        die("Please choose a file to upload.");
    }

    // Load Excel file
    $spreadsheet = IOFactory::load($file);
    $worksheet = $spreadsheet->getActiveSheet();

    // Loop through rows and insert data into MySQL
    foreach ($worksheet->getRowIterator() as $row) {
        $cellIterator = $row->getCellIterator();
        $cellIterator->setIterateOnlyExistingCells(false);

        $data = [];
        foreach ($cellIterator as $cell) {
            $data[] = $cell->getValue();
        }
        $insert = $wpdb->prepare("INSERT into $add_id (far,no,old_font,number_of_strokes,radical,reading_aloud,kun_reading,explanation) VALUES ('$data[0]','$data[1]','$data[2]','$data[3]','$data[4]','$data[5]','$data[6]','$data[7]');");
        $ins = $wpdb->query($insert);
        // if (!$ins) {

        //     header('Location: ' . $_SERVER['HTTP_REFERER']);
        // } else {
        //     header('Location: ' . $_SERVER['HTTP_REFERER']);
        // }
    }



    echo "Data imported successfully!";
}
?>
<div class="contaisner">
    <form class="form-horizontal well" enctype="multipart/form-data" action="" method="post">
        <label for="file">Choose Excel File</label>

        <input type="file" name="file" id="file" accept=".xlsx, .xls">
        <input type="submit" name="submit" value="Upload">
    </form>

    </form>
    <br>

    <?php

    $table_extra = $table_prefix . 'translatepro';
    $select = $wpdb->get_results("SELECT * FROM $table_extra");
    ?>
    <div class="table-responsive">
        <!-- Table start -->
        <div class="container table-container mainPage-table">
            <table class="test">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>漢字</th>
                        <th>旧字体</th>
                        <th>画数</th>
                        <th>部首</th>
                        <th>音読み</th>
                        <th>訓読み</th>
                        <th>解説</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody id="myUL">
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
                                <td class="names"><?= $no; ?></td>
                                <td class="names"><?= $far; ?></td>
                                <td class="names"><?= $old_font; ?></td>
                                <td class="names"><?= $number_of_strokes; ?></td>
                                <td class="names"><?= $radical; ?></td>
                                <td class="names"><?= $reading_aloud; ?></td>
                                <td class="names"><?= $kun_reading; ?></td>
                                <td class="names"><?= $explanation; ?></td>
                                <td class="edit-cell"><u>

                                        <a class="delete_product" data-id='<?= $id; ?>' data-toggle="tooltip" data-placement="top" title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 text-danger warning ">
                                                <polyline points="3 6 5 6 21 6"></polyline>
                                                <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                </path>
                                                <line x1="10" y1="11" x2="10" y2="17"></line>
                                                <line x1="14" y1="11" x2="14" y2="17"></line>
                                            </svg></a>
                                            <a name="edit" id="<?= $id; ?>" class="edit_data" data-toggle="tooltip" data-placement="top" title="Edit"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 text-success">
                                                            <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z">
                                                            </path>
                                                        </svg></a>
                                                    
                                        
                                        </u></td>

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
        $('input[name="plate_ran"]').click(function() {
            $('input[name="plate_ran"]').val('Please Wait...');
            $('input[name="plate_ran"]').attr('disabled', true);
            $.ajax({
                url: '<?php echo plugins_url("ajax/insert.php", __FILE__); ?>',
                type: 'POST',
                data: $('#plate_ran_form').serialize(),
                success: function(result) {
                    $('input[name="plate_ran"]').val('Submit');
                    $('input[name="plate_ran"]').attr('disabled', false);
                    location.reload();
                },

            });
        });


// ----------------------------------------------------------------insert_plate

$('#insert_form').on("submit", function(event) {
                event.preventDefault();
                if ($('#folder').val() == "") {
                    alert("Please Select Folders");


                } else {
                    // alert($('#cab_id').val());
                    $.ajax({
                        url: '<?php echo plugins_url("ajax/upd_rec.php", __FILE__); ?>',
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

// ---------------------------------------------------------------- end of insert_plate

        $('.delete_product').click(function() {
            var el = this;

            // Delete id
            var deleteid = $(this).data('id');
            console.log(deleteid)
            //

            var confirmalert = confirm("Are you sure?");
            if (confirmalert == true) {
                // AJAX Request
                $.ajax({
                    // url: 'cabin/delet_dpt.php',
                    url: "<?php echo plugins_url("ajax/delete.php", __FILE__); ?>",
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
    });


    jQuery( document ).ready(function($) { 

        jQuery(document).on('click', '.edit_data', function() {
                var employee_id = $(this).attr("id"); 
                // alert(employee_id)
                
                $.ajax({ 
                    url: "<?php echo plugins_url("ajax/fetch_rec.php", __FILE__); ?>",

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
          }); 
</script>