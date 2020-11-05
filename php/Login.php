<?php
    session_start();
    require '../php/connect.php';
    if(isset($_POST['studentid-box'])){
        $_SESSION['studentid']= $_POST['studentid-box'];
        $password = md5($_POST['passwordbox']);

        $sql="SELECT * FROM se_register,login WHERE login.se_studentid = :stdid AND login.se_password = :pass";

        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':stdid',$_SESSION['studentid']);
        $stmt->bindParam(':pass',$password);

        if($stmt->execute()){
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
        
            $_SESSION['status'] = $result['se_status_id'];

            if($_SESSION['status'] == 1){
                header('location:../view/admin.php');
            }
            else if($_SESSION['status'] == 2 OR  $_SESSION['status'] == 3){
                header('location:../view/index.php');
            }
            else{
                session_destroy();
                header('location:../form/formlogin.php');
            }
        }
    }else{
            header('location:../form/formlogin.php');
    }
?>