<html >
<head>
    <title>Log in SE Alumni</title>
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
</head>
<body>
<form action="../php/Login.php" method="POST"  enctype="multipart/form-data">
<br>
        <h2>Log in</h2> 
        <div class="login-want">
            <input type="text" name="studentid-box" placeholder="รหัสนักศึกษา" id="studentid">
            <input type="password" name="passwordbox" placeholder="รหัสpassword" id="password01">
        </div>
        <br><br>
        <div class="button-submit"> 
            <input type="submit" name="" value="Log in">
            <a href="../view/index.php"><i class="fas fa-arrow-left"></i>Back to home page</a>           
        </div>
        <br><br><br>
    </form>
    <br>
    <br>
</body>
</html>