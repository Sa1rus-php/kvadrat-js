<?php


function Txt() {
    $dir = '../download/';
    if (is_dir($dir)) {
        if ($dh = opendir($dir)) {
            while (($file = readdir($dh)) !== false) {
                echo '<li><a href="http://localhost:8071/sites/users.php?file=' . $file . '">' . $file . '</a></li>';
            }
            closedir($dh);
        }
    }

}
