<html>
<head>
    <title>User Profile</title>
    <link rel="stylesheet" href="../css/profile.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
</head>
<body>
    <?php
        session_start();
        require '../php/connect.php';
        $stdid=$_SESSION['studentid'];
        $sql="SELECT * FROM se_register WHERE se_studentid = :stdid";

        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':stdid',$stdid);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
    ?>
    <div class="left-form">
        <div class="back-home">
            <a href="../view/index.php"><i class="fas fa-arrow-left"></i>Back to home page</a>
        </div>
        <form action="../php/updateProfile.php" method="POST" enctype="multipart/form-data">
            <div class="up-data">
                <div class="input-img">
                    <img src="../php/userimg/<?php echo $result['S_img'] ?>" id="profileDisplay" onclick="triggerClick()" value="">
                    <input type="file" name="profileimage" onchange ="displayImage(this)" id="profileimage">
                </div>
                <div class="in-up-data">
                    <div class="input-name">
                        <select name="namnabox" >
                            <option value="นาย" 
                            <?php if($result['se_numna'] == 'นาย'){echo 'selected';} ?>
                            >นาย</option>
                            <option value="นางสาว"
                            <?php if($result['se_numna'] == 'นางสาว'){echo 'selected';} ?>
                            >นางสาว</option>
                            <option value="นาง"
                            <?php if($result['se_numna'] == 'นาง'){echo 'selected';} ?>
                            >นาง</option>
                        </select>
                        <input type="text"  name="namebox" placeholder="ชื่อ" id="name" value="<?php echo $result['se_name']  ?>">
                        <input type="text"  name="lastnamebox" placeholder="นามสกุล" id="lastname" value="<?php echo $result['se_lastname']  ?>">  
                    </div>
                    <div class="birthday-idcard">
                        <input type="text" name="Birthdaybox" placeholder="วันเกิด เช่น 01 มกราคม 2000" id="birthday" value="<?php echo $result['se_birthday']  ?>">
                        <input type="text" name="idcardbox" placeholder="รหัสบัตรประชาชน" id="idcard" value="<?php echo $result['se_idcard']  ?>">
                    </div>
                </div>
            </div>
            <div class="under-data">
                <div class="contack-under-data">
                    <input type="text" name="endyearbox" placeholder="ปีที่จบการศึกษา" id="endyear" value="<?php echo $result['se_yearend']  ?>">
                    <input type="text" name="phonebox" placeholder="เบอร์โทรศัพท์" id="phone" value="<?php echo $result['se_tel']  ?>">
                    <input type="text" name="facebookbox" placeholder="facebook" id="facebook" value="<?php echo $result['se_facebook']  ?>">
                    <input type="text" name="emailbox" placeholder="email" id="email" value="<?php echo $result['se_email']  ?>">
                </div>
                <div class="skill-under-data">
                    <input type="text" name="skillbox" placeholder="ความสามารถพิเศษ" id="skill" value="<?php echo $result['se_skill']  ?>">
                </div>
                <div class="address-under-data">
                    <input type="text" name="lekteebox" placeholder="บ้านเลขที่" id="lektee" value="<?php echo $result['se_lakete']  ?>">           
                    <input type="text" name="moobox" placeholder="หมู่" id="moo" value="<?php echo $result['se_mu'] ?>">            
                    <input type="text" name="tambonbox" placeholder="ตำบล" id="tambon" value="<?php echo $result['se_district']  ?>">
                    <input type="text" name="aumperbox" placeholder="อำเภอ" id="aumper" value="<?php echo $result['se_aumpa']  ?>">
                    <input type="text" name="jangwadbox" placeholder="จังหวัด" id="jangwad" value="<?php echo $result['se_province']  ?>">
                </div>
            </div>
            <div class="submit-profile">
                <input type="submit" name="" value="Update Profile">
            </div>
        </form>
    </div>

    <?php
        $sql="SELECT * FROM se_workaddress WHERE se_studentid = :stdid";

        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':stdid',$stdid);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
    ?>


    <div class="right-form">
        <h2>Work Info</h2>
        <form action="../php/updateWork.php" method="POST">
            <input type="text" name="companynamebox" placeholder="ชื่อบริษัท" value="<?php echo $result['work_name'] ?>">
            <input type="text" name="companyphonebox" placeholder="เบอร์โทรศัพท์บริษัท" id="phone"value="<?php echo $result['work_tel'] ?>">
            <div class="work-data-profile">
                <input type="text" name="lektee" placeholder="บ้านเลขที่" id="lektee" value="<?php echo $result['work_lakete'] ?>">           
                <input type="text" name="moo" placeholder="หมู่" id="moo" value="<?php echo $result['work_mu'] ?>">
            </div>
            <div class="work-data-profile-2">
                <input type="text" name="tambon" placeholder="ตำบล" id="tambon" value="<?php echo $result['work_district'] ?>">
                <input type="text" name="aumper" placeholder="อำเภอ" id="aumper1" value="<?php echo $result['work_aumpua'] ?>">
            </div>
            <input type="text" name="jangwad" placeholder="จังหวัด" id="jangwad1" value="<?php echo $result['work_province'] ?>">
            <div class="submit-profile-2">
                <input type="submit" name="" value="Update Work" id="submitwork">
            </div>
        </form>
    </div>
    <script src="../form/script.js"></script>
</body>
</html>