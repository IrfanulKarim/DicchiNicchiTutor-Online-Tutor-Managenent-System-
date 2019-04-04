<?php
error_reporting(0);
session_destroy();
setcookie('rm', '', time()-100, '/');

header('location : login.php ');


?>