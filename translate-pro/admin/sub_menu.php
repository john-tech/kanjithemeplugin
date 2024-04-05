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

.cont_img > img{
            width :70px;
        }

        .container.sapp {
    padding: 26px;
}
       
</style>
<?php
global $wpdb;
$user_table = $wpdb->prefix . 'transimage';

if ($_SERVER['REQUEST_METHOD'] === 'POST') { 
      echo  $upload_dir = 'uploads/'; 
    if (!is_dir($upload_dir)) {
        mkdir($upload_dir, 0755, true);
    }
    $totalfiles = count($_FILES['file']['name']);
     $select_cat = isset($_POST['select_cat']) ? $_POST['select_cat'] : '';
    for($i=0;$i<$totalfiles;$i++){
        $filename = $_FILES['file']['name'][$i];
          
        if(move_uploaded_file($_FILES["file"]["tmp_name"][$i],
        $upload_dir."/".$filename)){
     
        $select_cat = isset($_POST['select_cat']) ? $_POST['select_cat'] : '';
         $insert = $wpdb->prepare("INSERT into $user_table (text_field,file_name_1) VALUES 
            ('$select_cat','$filename')");
            $ins = $wpdb->query($insert);
 
        }else{
          echo 'Error in uploading file - '.$_FILES['file']['name'][$i].'<br/>';
        } 
        }
 
} 
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">


<div class="container sapp" style="border-style: ridge;">

    <form action="" method="post" enctype="multipart/form-data">
        <div class="inline" style="display: inline-block;">
        </div>
        <h4> Uploads Images Styles</h4>
        <select id="cars" name="select_cat">
            <option value="古代文字">古代文字 Ancient</option>
            <option value="篆書">篆書 Tensyo</option>
            <option value="隷書">隷書 Reisyo</option>
            <option value="楷書">楷書 Kaisyo</option>
            <option value="⾏書">⾏書 Gyosyo</option>
            <option value="草書">草書 Sosyo</option> 
        </select>  
   
        <div class="row">
            <div class="col-25">
                <label for="file_">Upload 1</label>
            </div>
            <div class="col-75">
                <input type="file" name="file[]" multiple accept="image/*" />
            </div>
        </div> 

        <div class="row">
            <br>
            <input type="submit" name="submit" value="Upload" />
        </div>
    </form>
</div>
 
<br>

<?php
 
$select = $wpdb->get_results("SELECT * FROM $user_table");
?>
<div class="table-responsive">
    <!-- Table start -->
    <div class="container table-container mainPage-table">
        <table class="test">
            <thead>
                <tr>
<!--                     <th>Style</th> -->
                    <th>漢字</th> 
                    <th>Action</th>
                </tr>
            </thead>
            <tbody id="myUL">
                <?php
                if ($select > 0) {
                    foreach ($select as $row) {
                        $id = $row->id;
                        $text_field = $row->text_field; 
                        $file_name_1 = $row->file_name_1; 

                ?>
                        <tr class="table-rows" id="table-row">
                            <td class="names"><?= $text_field; ?></td> 
                            <td class="names"><img class="edit_data" id="<?= $filed_id; ?>" width="70px" src="<?= home_url('/wp-admin/uploads/' . $file_name_1); ?>" alt="<?= $file_name_1s; ?>"></td> 
                            <td class="edit-cell"><u>

                                    <a class="delete_img" data-id='<?= $id; ?>' data-toggle="tooltip" data-placement="top" title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 text-danger warning ">
                                            <polyline points="3 6 5 6 21 6"></polyline>
                                            <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                            </path>
                                            <line x1="10" y1="11" x2="10" y2="17"></line>
                                            <line x1="14" y1="11" x2="14" y2="17"></line>
                                        </svg></a>
                                        <!-- <a name="edit" id="<?= $id; ?>" class="edit_data" data-toggle="tooltip" data-placement="top" title="Edit"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 text-success">
                                                        <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z">
                                                        </path>
                                                    </svg></a>
                                                 -->
                                    
                                    </u></td>

                        </tr>
                <?php
                    }
                }
                ?>
            </tbody>
        </table>
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
                        <input type="file"  id="xfar" name="far" class="form-control"> 
                        <div class="cont_img"></div>
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


// ----------------------------------------------------------------insert_plate

$('#insert_form').on("submit", function(event) {
                event.preventDefault();
                if ($('#folder').val() == "") {
                    alert("Please Select Folders");


                } else {
                    // alert($('#cab_id').val());
                    $.ajax({
                        url: '<?php echo plugins_url("ajax/upd_img.php", __FILE__); ?>',
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

        $('.delete_img').click(function() {
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
                    url: "<?php echo plugins_url("ajax/img_del.php", __FILE__); ?>",
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
                    url: "<?php echo plugins_url("ajax/fetch_img.php", __FILE__); ?>",

                    method: "POST",
                    data: {
                        employee_id: employee_id
                    },
                    dataType: "json",
                    success: function(data) {
                        console.log(data) 
                        $('#xnum_stock').val(data[0]['number_of_strokes']); 
                        let stock = '<?= home_url('/wp-admin/uploads/'); ?>';
                        var imgg =data[0]['file_name_1'];
                        $('.cont_img> img').remove();
                        console.log(stock + imgg);
                        $('.cont_img').prepend("<img  src=" +stock+"/"+imgg+ " />")
                        $('#zoomupModal').modal('show');
                        $('#insert').val("Update");
                        $('#title_edit').text("Edit Data");
                    window.location.reload();
                    }
                });
                }); 
          }); 
</script>
</div>
</div>