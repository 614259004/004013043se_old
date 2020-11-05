<?php
    session_start();
    require '../php/connect.php';
    if(isset($_POST['companynamebox'])){
        $stdid=$_SESSION['studentid'];

            $sql="UPDATE se_workaddress SET work_name = :companyname,work_lakete=:lektee,work_mu=:moo,work_district=:tambon,
            work_aumpua=:aumper,work_province=:jangwad,work_tel=:companyphone WHERE se_studentid = :stdid";

            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':companyname',$_POST['companynamebox']);
            $stmt->bindParam(':companyphone',$_POST['companyphonebox']);
            $stmt->bindParam(':lektee',$_POST['lektee']);
            $stmt->bindParam(':moo',$_POST['moo']);
            $stmt->bindParam(':tambon',$_POST['tambon']);
            $stmt->bindParam(':aumper',$_POST['aumper']);
            $stmt->bindParam(':jangwad',$_POST['jangwad']);
            $stmt->bindParam(':stdid',$stdid);

            $stmt->execute();
            header('location:../view/profileUser.php');
        
    }
    else{
        header('location:../view/profileUser.php');
    }
?>