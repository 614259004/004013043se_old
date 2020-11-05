<html>
<head>
    <title>Se Alumni</title>
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
</head>
<body>
    <?php
        session_start();
        if(isset($_SESSION['studentid'])){
            require '../form/navbarUser.php';
        }else{
        require '../form/navbar.php';
    }
    ?>
    <div class="index-info">
        <div class="info-text">
            <h1>Welcome to SE Alumni Website</h1>
            <p>
                This site is for educational purposes only.<br>
                The job of this website is to display information from alumni. <br>
                Thank you for watching.
            </p>
            <br><br>
            <a href="../view/alumni.php" class="view-alumni">views Alumni</a>
        </div>
        <div class="info-img">
            <h1>.</h1>
            <img src="../img/img1.png" alt="">
        </div>
    </div>
    <a href="https://www.facebook.com/softwarenpru" target="_blank"><i class="fab fa-facebook-square"></i></a> 

</body>
</html>