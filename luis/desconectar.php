<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
        session_abort();
        session_destroy();
        $_SESSION["alta"] = false;
        header('location: login.php');
    ?>

</body>
</html>