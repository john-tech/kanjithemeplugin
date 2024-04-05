<?php 
require_once('../../../../../wp-load.php');

global $wpdb; 
$user_table = $wpdb->prefix . 'translatepro';

if (isset($_POST["employee_id"])) {
    $results = $wpdb->get_results( "SELECT * FROM $user_table  where id='" . $_POST["employee_id"] . "'"); 
      echo json_encode($results);
      
}