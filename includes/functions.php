<?php 

namespace fsu;

function file_save($file_path, $data = null) {
    $file = fopen($file_path, 'w');

    if ($data) {
        file_write($file, $data);
    }

    fclose($file);
}

function file_write($file, $data) {
    fwrite($file, serialize($data));
}

function view($page) {
    $page_path = PAGES_DIR . '/' . $page . '.php';

    if (!file_exists($page_path)) {
        print "<strong>Error:</strong> Unable to load {$page}.";
        return;
    }

    require $page_path;
}
