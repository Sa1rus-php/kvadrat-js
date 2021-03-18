<?php
include 'func.php';
echo '<pre>';
set_include_path('../download');
include $_GET['file'];

echo '</pre>';