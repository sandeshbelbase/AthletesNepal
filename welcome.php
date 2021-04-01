<?php
include('server.php');

if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in to continue!!";
    echo ($_SESSION['msg']);
    header('location:login.php');
}
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header('location: login.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php if (isset($_SESSION['username'])) : ?>
        <h1>Welcome <?php echo ($_SESSION['username']); ?>
       . You are Logged In.
        </h1>
        <a href="welcome.php?logout='1'"><button>Log out</button></a>
    <?php endif ?>

</body>
</html>