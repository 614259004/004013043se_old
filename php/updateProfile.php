<?php
    session_start();
    require '../php/connect.php';
    if(isset($_POST['namebox'])){
        $stdid=$_SESSION['studentid'];
        /*$profileImageName= time(). '_' .$_FILES['profileimage']['name'];
        $target='userimg/'.$profileImageName;*/

        /*move_uploaded_file($_FILES['profileimage']['tmp_name'], $target);*/

            $sql="UPDATE se_register SET se_numna = :namna,se_name = :Name1,se_lastname=:lastname,se_birthday=:Birthday,
            se_idcard=:idcard,se_tel=:phone,se_yearend=:endyear,se_skill=:skill,se_facebook=:facebook,se_email=:email,
            se_lakete=:lektee,se_mu=:moo,se_district=:tambon,se_aumpa=:aumper,se_province=:jangwad
            WHERE se_studentid = :stdid";

            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':namna',$_POST['namnabox']);
            $stmt->bindParam(':Name1',$_POST['namebox']);
            $stmt->bindParam(':lastname',$_POST['lastnamebox']);
            $stmt->bindParam(':Birthday',$_POST['Birthdaybox']);
            $stmt->bindParam(':phone',$_POST['phonebox']);
            $stmt->bindParam(':endyear',$_POST['endyearbox']);
            $stmt->bindParam(':skill',$_POST['skillbox']);
            $stmt->bindParam(':facebook',$_POST['facebookbox']);
            $stmt->bindParam(':email',$_POST['emailbox']);
            $stmt->bindParam(':lektee',$_POST['lekteebox']);
            $stmt->bindParam(':moo',$_POST['moobox']);
            $stmt->bindParam(':tambon',$_POST['tambonbox']);
            $stmt->bindParam(':aumper',$_POST['aumperbox']);
            $stmt->bindParam(':jangwad',$_POST['jangwadbox']);
            $stmt->bindParam(':idcard',$_POST['idcardbox']);
            $stmt->bindParam(':stdid',$stdid);
            /*$stmt->bindParam(':img',$profileImageName);*/

            $stmt->execute();
            header('location:../view/profileUser.php');
        
    }
    else{
        header('location:../view/profileUser.php');
    }
?>