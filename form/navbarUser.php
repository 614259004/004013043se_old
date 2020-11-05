<html>
<head>
    <link rel="stylesheet" href="../css/navbar.css">
</head>
<body>
    <?php
        
        require '../php/connect.php';
        $stdid=$_SESSION['studentid'];

        $sql="SELECT * FROM se_register WHERE se_studentid = :stdid";

        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':stdid',$stdid);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
    ?>
    <div class="navbar">
        <a href="../view/index.php"><img src="../img/logo.png"></a>
        <div class="button-navbar">
            <a href="../php/logout.php" class="login-button">Log out</a>
            <div class="imguser">
                <a href="../view/profileUser.php"><img src="../php/userimg/<?php echo $result['S_img'] ?>" alt="" ></a>
            </div>
        </div>
    </div>
</body>
</html>