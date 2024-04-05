<?php

global $wpdb;
global $table_prefix;
$translatepro = $table_prefix . "translatepro";

$transimage = $table_prefix . "transimage";

$gen_user_info = "CREATE TABLE IF NOT EXISTS $translatepro ( `id` INT(11) NOT NULL AUTO_INCREMENT ,
    `far` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
    `no` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
    `old_font` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
    `number_of_strokes` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
    `radical` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
    `reading_aloud` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
    `kun_reading` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
    `explanation` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL, 
    PRIMARY KEY (`id`))
    ENGINE = InnoDB;";
$wpdb->query($gen_user_info);


$transimage_info = "CREATE TABLE IF NOT EXISTS $transimage ( `id` INT(11) NOT NULL AUTO_INCREMENT ,
    text_field VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
    file_name_1 VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
    file_name_2 VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
    file_name_3 VARCHAR(255),
    file_name_4 VARCHAR(255),
    file_name_5 VARCHAR(255),
    file_name_6 VARCHAR(255), 
    PRIMARY KEY (`id`))
    ENGINE = InnoDB;";
$wpdb->query($transimage_info);
