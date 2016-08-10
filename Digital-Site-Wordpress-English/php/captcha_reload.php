<?php
session_start();
$_SESSION['captcha'] = captcha();
exit($_SESSION['captcha']['code']);
?>
