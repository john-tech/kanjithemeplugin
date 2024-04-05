


  <?php
// sleep(3);
require_once('../../../../wp-load.php');

global $wpdb;
$add_id = $wpdb->prefix . "translatepro"; 
 

$upd_id= $_POST['employee_id'];
$nos = $_POST['nos']; 
$far = $_POST['far']; 
$old_font = $_POST['old_font']; 
$num_stock = $_POST['num_stock']; 
$redical = $_POST['redical']; 
$read_alo = $_POST['read_alo']; 
$kun_read = $_POST['kun_read']; 
$explain = $_POST['explain']; 

echo $sql = "UPDATE $add_id SET no = '$nos', far = '$far', old_font = '$old_font', old_font = '$old_font', number_of_strokes = '$num_stock', radical = '$redical', reading_aloud = '$read_alo', kun_reading = '$kun_read', explanation = '$explain' WHERE id = '$upd_id'";
$update = $wpdb->query($sql); 
 if ($update) {
     echo 'update';
 // echo '<script>
 //          window.location.replace("' . home_url('/wp-admin/admin.php?page=HWrecog-pro') . '");
 //         </script>';
 }