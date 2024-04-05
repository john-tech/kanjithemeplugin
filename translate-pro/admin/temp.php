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
</style>
<?php
global $wpdb;
$user_table = $wpdb->prefix . 'transimage';

if (isset($_POST['submit'])) {
    // Check if the form was submitted
    $upload_dir = wp_upload_dir(); // Get the default upload directory

    // Process the text field
    if (isset($_POST['text_field'])) {
        $text_field = sanitize_text_field($_POST['text_field']);
        // Use $text_field as needed, e.g., store in the database
    }

    // Process file uploads
    $file_names = array();
    for ($i = 1; $i <= 6; $i++) {
        $file_key = 'file_' . $i;

        if (isset($_FILES[$file_key])) {
            $file = $_FILES[$file_key];

            // Handle file upload
            $target_dir = $upload_dir['path'] . '/';
            $target_file = $target_dir . basename($file['name']);

            // Move the uploaded file to the destination directory
            move_uploaded_file($file['tmp_name'], $target_file);

            $file_names[] = $file['name'];
            echo "File $i uploaded successfully!<br>";
        }
    }

    // Insert data into the database

    $wpdb->insert(
        $user_table,
        array(
            'text_field'   => $text_field,
            'file_name_1'  => $file_names[0],
            'file_name_2'  => $file_names[1],
            'file_name_3'  => $file_names[2],
            'file_name_4'  => $file_names[3],
            'file_name_5'  => $file_names[4],
            'file_name_6'  => $file_names[5],
        ),
        array('%s', '%s', '%s', '%s', '%s', '%s', '%s')
    );
}

?>

<div class="container sapp" style="border-style: ridge;">

    <form action="" method="post" enctype="multipart/form-data">
        <div class="inline" style="display: inline-block;">
        </div>
        <h4> Uploads Images Styles</h4>
        <select id="cars" name="text_field">
            <option value="ancient">古代文字 Ancient</option>
            <option value="tensyo">篆書 Tensyo</option>
            <option value="reisyo">隷書 Reisyo</option>
            <option value="gyosyo">楷書 Kaisyo</option>
            <option value="kaisyo">⾏書 Gyosyo</option>
            <option value="sosyo">草書 Sosyo</option>

        </select>


        <?php for ($i = 1; $i <= 6; $i++) : ?>
            <div class="row">
                <div class="col-25">
                    <label for="file_<?php echo $i; ?>">File <?php echo $i; ?>:</label>
                </div>
                <div class="col-75">
                    <input type="file" name="file_<?php echo $i; ?>" /><br>
                </div>
            </div>
        <?php endfor; ?>
        <div class="row">
            <br>
            <input type="submit" name="submit" value="Upload" />
        </div>
    </form>
</div>

</div>



<script>
    jQuery(document).ready(function($) {
        // $('input[name="plate_ran"]').click(function() {
        //     $('input[name="plate_ran"]').val('Please Wait...');
        //     $('input[name="plate_ran"]').attr('disabled', true);
        //     $.ajax({
        //         url: '<?php echo plugins_url("ajax/insert.php", __FILE__); ?>',
        //         type: 'POST',
        //         data: $('#plate_ran_form').serialize(),
        //         success: function(result) {
        //             $('input[name="plate_ran"]').val('Submit');
        //             $('input[name="plate_ran"]').attr('disabled', false);
        //             location.reload();
        //         },

        //     });
        // });

        // $('.delete_product').click(function() {
        //     var el = this;

        //     // Delete id
        //     var deleteid = $(this).data('id');
        //     console.log(deleteid)
        //     //

        //     var confirmalert = confirm("Are you sure?");
        //     if (confirmalert == true) {
        //         // AJAX Request
        //         $.ajax({
        //             // url: 'cabin/delet_dpt.php',
        //             url: "<?php echo plugins_url("ajax/delete.php", __FILE__); ?>",
        //             type: 'POST',
        //             data: {
        //                 deleteid: deleteid
        //             },
        //             success: function(response) {

        //                 if (response) {
        //                     // Remove row from HTML Table
        //                     $(el).closest('tr').css('background', 'tomato');
        //                     $(el).closest('tr').fadeOut(800, function() {
        //                         $(this).remove();
        //                         swal({
        //                             title: 'Delete Record succesfully',
        //                             padding: '2em'
        //                         })
        //                     });

        //                 } else {
        //                     alert('Invalid ID.');
        //                 }

        //             }
        //         });
        //     }

        // });
    });
</script>