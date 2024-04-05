<?php


require_once('../../../../../wp-load.php');
global $wpdb; 
$user_table = $wpdb->prefix . 'transimage';
echo $_POST['deleteid'];
$id = $_POST['deleteid'];
if (isset($id)) {
 echo    $wpdb->delete( $user_table, array( 'id' => $id ) );
    
  }
// if (!empty($_POST['deleteid'])) { 
//  $deleteid= $_POST['deleteid'];
//   $sql = "UPDATE $user_table SET apr = 1  WHERE event_id = '$deleteid'";
//  $update = $wpdb->query($sql);
    
//   }
