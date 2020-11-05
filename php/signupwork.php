<?php
    session_start();
    require '../php/connect.php';
    if(isset($_POST['companynamebox'])){
        
        $stdid=$_SESSION['studentid'];


        $sql="INSERT INTO se_workaddress(work_name,work_lakete,work_mu,work_district,work_aumpua,work_province,work_tel,se_studentid)
        VALUES(:companyname,:lektee,:moo,:tambon,:aumper,:jangwad,:companyphone,:stdid)";

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
        header('location:../view/index.php');
    }
    else{
        header('location:../form/signupworkform.php');
    }
?>