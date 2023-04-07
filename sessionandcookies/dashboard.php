<?php

    session_start();

    if($_SESSION['email']){
        header('Location:landingpage.php');
    }else{
        header('Location:loginpage.php');
    }




?>