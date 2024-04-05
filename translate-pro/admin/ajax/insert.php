<?php
// sleep(3);
require_once('../../../../../wp-load.php');
global $wpdb;
$add_id = $wpdb->prefix . "translatepro"; 

$nos = $_POST['nos']; 
$far = $_POST['far']; 
$old_font = $_POST['old_font']; 
$num_stock = $_POST['num_stock']; 
$redical = $_POST['redical']; 
$read_alo = $_POST['read_alo']; 
$kun_read = $_POST['kun_read']; 
$explain = $_POST['explain']; 
$insert = $wpdb->prepare("INSERT into $add_id (no,far,old_font,number_of_strokes,radical,reading_aloud,kun_reading,explanation) VALUES ('$nos','$far','$old_font','$num_stock','$redical','$read_alo','$kun_read','$explain')");
$ins = $wpdb->query($insert);
?>