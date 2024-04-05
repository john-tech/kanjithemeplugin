
<?php
require_once('../../../../../wp-load.php');
require('lib/vendor/autoload.php');
// require 'vendor/vendor/autoload.php'; // Load PhpSpreadsheet library
use PhpOffice\PhpSpreadsheet\IOFactory;


global $wpdb;
$add_id = $wpdb->prefix . "translatepro";

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
  if (!$ins) {

    header('Location: ' . $_SERVER['HTTP_REFERER']);
  } else {
    header('Location: ' . $_SERVER['HTTP_REFERER']);
  }
}


echo "Data imported successfully!";


?>		 