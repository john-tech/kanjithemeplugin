<?php
   global $wpdb;
   global $table_prefix; 
   $translatepro = $table_prefix . "translatepro"; 
 
   $sql5 = "DROP TABLE IF EXISTS $translatepro";
   $wpdb->query($sql5);

   $transimage = $table_prefix . "transimage";

   $sql1 = "DROP TABLE IF EXISTS $transimage";
   $wpdb->query($sql1);