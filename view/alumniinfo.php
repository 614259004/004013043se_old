<html lang="en">
<head>
    <title>Alumni info</title>
    <link rel="stylesheet" href="../css/alumniinfo.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
</head>
<body>
    <?php 
        session_start();
        require "../php/connect.php";

        $sql = "SELECT * FROM se_register WHERE se_studentid  = :stdid";     
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':stdid',$_GET['se_studentid']);
        $stmt->execute();
        $result = $stmt->fetch( PDO::FETCH_ASSOC );
    ?>
            <div class="back-home">
                <a href="../view/alumni.php"><i class="fas fa-arrow-left"></i>Back to Alumni page</a></div>
            <div class="alumni-card">
                <img src="../php/userimg/<?php echo $result['S_img'] ?>" alt="" class="profile-img">
                <div class="name-alumni">
                    <div class="name-alumni-info">
                        <h1><?php echo $result['se_numna'] ?></h1>
                        <h1><?php echo $result['se_name'] ?></h1>
                        <h1><?php echo $result['se_lastname'] ?></h1>
                    </div>
                    <div class="birthday-alumni-info">
                        <p class="hauko">วันเกิด :</p>
                        <p class="data"><?php echo $result['se_birthday'] ?></p>
                        <p class="hauko" style="margin-left:15px;">ปีจบการศึกษา :</p>
                        <p class="data"><?php echo $result['se_yearend'] ?></p>
                    </div>
                    <div class="birthday-alumni-info">
                        <p class="hauko">รหัสนักศึกษา :</p>
                        <p class="data"><?php echo $result['se_studentid'] ?></p>
                        <p class="hauko" style="margin-left:15px;">เบอร์โทร :</p>
                        <p class="data"><?php echo $result['se_tel'] ?></p>
                    </div>
                    <div class="birthday-alumni-info">
                        <p class="hauko">facebook :</p>
                        <p class="data"><?php echo $result['se_facebook'] ?></p>
                        <p class="hauko" style="margin-left:15px;">email :</p>
                        <p class="data"><?php echo $result['se_email'] ?></p>
                    </div>
                    <div class="next-back-page">
                        <!----------<a href="../view/index.php"><i class="fas fa-arrow-left"></i></a>------->
                        <a href="../view/alumniinfo2.php?se_studentid=<?php echo $result['se_studentid'] ?>" style="margin-left:39px;"><i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                
            </div>
</body>
</html>