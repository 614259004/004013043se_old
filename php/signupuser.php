<?php
    session_start();
    require '../php/connect.php';
    if(isset($_POST['studentid-box'])){

        $_SESSION['studentid']= $_POST['studentid-box'];
        $stdid=$_SESSION['studentid'];
        $password = md5($_POST['passwordbox']);
        $profileImageName= time(). '_' .$_FILES['profileimage']['name'];
        $target='userimg/'.$profileImageName;

        if(move_uploaded_file($_FILES['profileimage']['tmp_name'], $target)){

            $sql="INSERT INTO se_register(se_studentid,se_numna,se_name,se_lastname,se_birthday,se_idcard,se_tel,
            se_yearend,	se_skill,se_facebook,se_email,se_lakete,se_mu,se_district,se_aumpa,se_province,se_status_id ,S_img)
            VALUES(:stdid,:namna,:Name1,:lastname,:Birthday,:idcard,:phone,:endyear,
            :skill,:facebook,:email,:lektee,:moo,:tambon,:aumper,:jangwad,:status1,:img)";

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
            $stmt->bindParam(':status1',$_POST['statusbox']);
            $stmt->bindParam(':idcard',$_POST['idcardbox']);
            $stmt->bindParam(':stdid',$stdid);
            $stmt->bindParam(':img',$profileImageName);

            $stmt->execute();


            $sql="INSERT INTO login(se_studentid,se_password)VALUES(:stdid,:password)";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':stdid',$stdid);
            $stmt->bindParam(':password',$password);

            $stmt->execute();
            header('location:../form/signupworkform.php');
           
        } 
    }
    else{
        header('location:../view/index.php');
    }
?>