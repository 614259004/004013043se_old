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
            <a href="../view/alumni.php"><i class="fas fa-arrow-left"></i>Back to Alumni page</a>
        </div>
            <div class="alumni-card">
                <img src="../php/userimg/<?php echo $result['S_img'] ?>" alt="" class="profile-img">
                <div class="name-alumni">
                    <div class="name-alumni-info">
                        <h1><?php echo $result['se_numna'] ?></h1>
                        <h1><?php echo $result['se_name'] ?></h1>
                        <h1><?php echo $result['se_lastname'] ?></h1>
                    </div>
                    <div class="birthday-alumni-info">
                        <p class="hauko">ความสามารถพิเศษ :</p>
                        <p class="data"><?php echo $result['se_skill'] ?></p>
                    </div>
                    <div class="birthday-alumni-info">
                        <p class="hauko">ที่อยู่ :</p>
                        <p class="data"><?php echo $result['se_lakete'] ?></p>
                        <p class="data">หมู่<?php echo $result['se_mu'] ?></p>
                        <p class="data">ตำบล<?php echo $result['se_district'] ?></p>
                        <p class="data">อำเภอ<?php echo $result['se_aumpa'] ?></p>
                        <p class="data">จังหวัด<?php echo $result['se_province'] ?></p>
                    </div>
                    <div class="birthday-alumni-info" style="margin-left:9%;">
                        <p class="data">จังหวัด<?php echo $result['se_province'] ?></p>
                    </div>
                    
                    <div class="next-back-page" style="margin-top:5%;">
                        <a href="../view/alumniinfo.php?se_studentid=<?php echo $result['se_studentid'] ?>"><i class="fas fa-arrow-left"></i></a>
                        <a href="../view/alumniinfo3.php?se_studentid=<?php echo $result['se_studentid'] ?>"><i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                
            </div>
</body>
</html>