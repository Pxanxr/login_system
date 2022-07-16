<?php 
    session_start();

    if (!isset($_SESSION['username'])) {
        $_SESSION['msg'] = "You must log in first";
        header('location: login.php');
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
    <title>Home Page</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="homeheader">
        <?php if (isset($_SESSION['username'])) : ?>
            <h2>สวัสดีคุณ <strong><?php echo $_SESSION['username']; ?></strong></h2>
            <h6><a href="form_login.php?logout='1'" style="color: red;">ออกจากระบบ</a></h6>
        <?php endif ?>
    </div>

</body>
</html>