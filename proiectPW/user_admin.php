<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
    $user_id = $_SESSION['user_id'];
}else{
    $user_id = '';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user_admin</title>

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <!-- custom css file link -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>


<!-- choose role section starts -->

<section class="user-admin">

    <h1 class="title">Choose your role</h1>

    <div class="box-container">

        <a href="login.php" class="box">
            <img src="images/user.png" alt="">
            <h3>User</h3>
        </a>

        <a href="admin/admin_login.php" class="box">
            <img src="images/admin.png" alt="">
            <h3>admin</h3>
        </a>

    </div>

</section>

<!-- choose role section ends -->

<!-- custom js file link -->
<script src="js/script.js"></script>

</body>
</html>