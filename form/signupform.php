<html>
<head>
    <title>SE Alumni Signup</title>
    <link rel="stylesheet" href="../css/signup.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
</head>
<body>
    <form action="../php/signupuser.php" method="POST"  enctype="multipart/form-data">
        <h2>Sign up (1/2)</h2>
        <div class="input-img">
            <img src="../img/userimg/null.webp" id="profileDisplay" onclick="triggerClick()" value="">
            <input type="file" name="profileimage" onchange ="displayImage(this)" id="profileimage">
        </div><br>
        <div class="name-input">
            <p>Name:</p>
            <select name="namnabox" >
                <option value="นาย">นาย</option>
                <option value="นางสาว">นางสาว</option>
                <option value="นาง">นาง</option>
            </select>
            <input type="text"  name="namebox" placeholder="ชื่อ" id="name">
            <input type="text"  name="lastnamebox" placeholder="นามสกุล" id="lastname">
        </div>
        <div class="birthday-input">
            <p>Birthday:</p>
            <input type="text" name="Birthdaybox" placeholder="วันเกิด เช่น 01 มกราคม 2000" id="birthday">
        </div>
        <div class="login-want">
            <p>Student Id:</p>
            <input type="text" name="studentid-box" placeholder="รหัสนักศึกษา" id="studentid">
            <p id="password">Password:</p>
            <input type="password" name="passwordbox" placeholder="รหัสpassword" id="password01">
        </div>
        <div class="peopleidbox">
            <p>Thai people Id:</p>
            <input type="text" name="idcardbox" placeholder="รหัสบัตรประชาชน" id="idcard">
        </div>
        <div class="phone-input">
            <p>Phone number:</p>
            <input type="text" name="phonebox" placeholder="เบอร์โทรศัพท์" id="phone">
            <p id="endyear">End year:</p>
            <input type="text" name="endyearbox" placeholder="ปีที่จบการศึกษา" id="endyear">
        </div>
        <div class="skill-input">
            <p>Skill:</p>
            <input type="text" name="skillbox" placeholder="ความสามารถพิเศษ" >
        </div>
        <div class="contack-input">
            <p>Contack:</p>
            <input type="text" name="facebookbox" placeholder="facebook" id="facebook">
            <input type="text" name="emailbox" placeholder="email" id="email">
        </div>
        <div class="address-input">
            <p>Address:</p>
            <input type="text" name="lekteebox" placeholder="บ้านเลขที่" id="lektee">           
            <input type="text" name="moobox" placeholder="หมู่" id="moo">            
            <input type="text" name="tambonbox" placeholder="ตำบล" id="tambon">
            <input type="text" name="aumperbox" placeholder="อำเภอ" id="aumper">            
        </div>
        <div class="address2">           
            <input type="text" name="jangwadbox" placeholder="จังหวัด" id="jangwad">
        </div><br>
        <div class="status-input">
            <p>Status:</p>
            <select name="statusbox" id="">
                <option value="1">Teacher</option>
                <option value="2">Alumni</option>
                <option value="3">Student</option>
            </select>
        </div><br>
        <div class="button-submit">
            <a href="../view/index.php"><i class="fas fa-arrow-left"></i>Back to home page</a>
            <input type="submit" name="" value="Next">           
        </div>
    </form>
    <br>
    <br>
    <script src="script.js"></script>
</body>
</html>