<?php

    var_dump($_POST);

    session_start();
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['password'] = $_POST['password'];

    header('Location:landingpage.php')


?>