<?php

// API endpoint
$kanji = $_POST['word'];
$apiEndpoint = "https://kanjiapi.dev/v1/reading/$kanji";

$response = file_get_contents($apiEndpoint);
if ($response === false) {
    die('Error fetching data from the API');
}

$data = json_decode($response);

if ($data !== null) {
    echo "Main Kanji:\n";
    foreach ($data->main_kanji as $kanji) {
        echo $kanji . "\n";
    }

    echo "Name Kanji:\n";
    foreach ($data->name_kanji as $kanji) {
        echo $kanji . "\n";
    }

    echo "Reading: " . $data->reading . "\n";
} else {
    echo "Error decoding JSON response from the API\n";
}
