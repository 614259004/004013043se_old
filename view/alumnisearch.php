<html>
<head>
    <title>Alumni view</title>
    <link rel="stylesheet" href="../css/alumni.css">
</head>
<body>
    <?php 
    session_start();
    require "../php/connect.php";   
        $sql = "SELECT * FROM se_register,se_workaddress WHERE se_status_id  = 2 AND 
        se_name = :search 
        AND se_register.se_studentid = se_workaddress.se_studentid";     
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':search',$_POST['searchbox']);
        $stmt->execute();
    
    ?><br><br>
    <a href="../view/index.php" class="back-alumni">BACK HOME PAGE</a>
    <?php
       require '../form/search.php';
    ?>
    <div class="row-alumni">
    <?php
    while($result = $stmt->fetch( PDO::FETCH_ASSOC ))  {
    ?>
        <div class="column-alumni">
            <div class="alumni-card">
                <img src="../php/userimg/<?php echo $result['S_img'] ?>" alt="" class="profile-img">
                <div class="name-alumni">
                    <p><?php echo $result['se_numna'] ?></p>
                    <p><?php echo $result['se_name'] ?></p>
                    <p><?php echo $result['se_lastname'] ?></p>
                </div>
                <a href="alumniinfo.php?se_studentid=<?php echo $result['se_studentid'] ?>" class="seemore-alumni">View more</a>
            </div>
        </div>
        
    <?php
    }


    
    ?> 
    </div>
</body>
</html>