<?php

function debug($data, $exit = false) {
    echo '<pre>';
    print_r($data);
    echo '</pre>';

    if ($exit) {
        exit;
    }
}

function isAdmin(){
    return isset($_SESSION['is_admin']) && $_SESSION['is_admin'] == '2';
}

?>