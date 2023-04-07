<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Landing page</title>
</head>
<body>

    <?php
        echo 'hello ' . $_SESSION['email'] . 'welcome to my website';
    ?>

    <a href="logout.php">Log out</a>
    
</body>
</html>