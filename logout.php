<?php
    include 'css_cookie.php';
	session_start();
    session_destroy();
    header('Location: index.php');
?>