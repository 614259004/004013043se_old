<html>
<head>
    <title>SE Alumni Signup Work</title>
    <link rel="stylesheet" href="../css/signupwork.css">
</head>
<body>
    <form action="../php/signupwork.php" method="POST"  enctype="multipart/form-data">
        <h2>Sign up (2/2)</h2>
        <div class="skill-input">
            <p>Company Name:</p>
            <input type="text" name="companynamebox" placeholder="ชื่อบริษัท" >
        </div>
        <div class="phone-input">
            <p>Phone number Company:</p>
            <input type="text" name="companyphonebox" placeholder="เบอร์โทรศัพท์บริษัท" id="phone">
        </div>
        <div class="address-input">
            <p>Address Company:</p>
            <input type="text" name="lektee" placeholder="บ้านเลขที่" id="lektee">           
            <input type="text" name="moo" placeholder="หมู่" id="moo">            
            <input type="text" name="tambon" placeholder="ตำบล" id="tambon">
            <input type="text" name="aumper" placeholder="อำเภอ" id="aumper">            
        </div>
        <div class="address2">           
            <input type="text" name="jangwad" placeholder="จังหวัด" id="jangwad">
        </div><br>
        <br>
        <div class="button-submit">
            <input type="submit" name="Sign up" value="Sign up">           
        </div>
        <br>

    </form>
    <script src="script.js"></script>
</body>
</html>