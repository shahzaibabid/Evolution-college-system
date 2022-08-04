<?php
session_start();

if($_SESSION["name"] == null) {
    header("Location: signin.php");
}
else {

// remove all session variables
session_unset();

// destroy the session
session_destroy();    

header("Location: signin.php");
}
?>