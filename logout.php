<?php
    session_start();
    echo "登出中......";
    unset($_SESSION['acc']);
    header("Refresh:1, url=login.php");
?>