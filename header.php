<?php 
    require 'connection.php';
    // session_start();
?> 
<html>
<head>
    <title>HomePage</title>
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/col.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
    <!-- <link rel="stylesheet" type="text/css" href="css/homepage.css"> -->
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <script src="js/jquery-2.2.4.js"></script>

</head>
<body>

    <div id="menubar">
        <ul class="navbar_list">  
            <li class="navbar_items s-hide x-hide xs-hide"><a class="active" href="homepage.php">Home</a></li>
            <li class="navbar_items s-hide x-hide xs-hide"><a href="all_quiz.php">Quizz!</a></li>
            <li class="navbar_brand"><a href="homepage.php"><img src="images/logo.png" id="company_logo" alt="company_logo"></a></li>
            <li class="navbar_items s-hide x-hide xs-hide"><a href="student_profile.php">My Profile</a></li>
            <li class="navbar_items s-hide x-hide xs-hide"><a href="add_quiz.php">Add quiz</a></li>
        </ul>
       
        <a href="login.php"><button class="button_default" id="login_btn">Login</button></a>
    </div>

</body>

</html>