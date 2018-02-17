<?php
session_start();
unset($_SESSION["is-logged"]);  
$_SESSION["is-logged"] = false;
header("Location: ./?p=index");
exit;