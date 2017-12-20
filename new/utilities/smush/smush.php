<?php

// Processing may take a while
set_time_limit(0);

// Include Smush.it PHP Library
require 'SmushIt.class.php';

// Get all .jpg files from images/ directory
$files = glob(__DIR__ . '/images/*.jpg');

// Make batches of 3 images
$files = array_chunk($files, 3);

// Take a batch of three files
foreach($files as $batch) {
    try {
        // Compress the batch
        $smushit = new SmushIt($batch);
        // And finaly, replace original files by their compressed version
        foreach($smushit->get() as $file) {
            // Sometimes, Smush.it convert files. We don't want that to happen.
            $src = pathinfo($file->source, PATHINFO_EXTENSION);
            $dst = pathinfo($file->destination, PATHINFO_EXTENSION);
            if ($src == $dst AND copy($file->destination, $file->source)) {
                // Success !
            }
        }
    } catch(Exception $e) {
        continue;
    }
}

?>