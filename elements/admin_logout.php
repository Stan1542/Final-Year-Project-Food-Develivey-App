<?php

include 'dbconnect.php';

session_start();
session_unset();
session_destroy();

header('location:../admin/admin_login.php');

?>