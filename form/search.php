<html>
<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/search.css">
</head>
<body>
    <div class="search-button">
        <form action="../view/alumnisearch.php" method="POST">
            <select name="catesearch" id="select-search">
                <option value="0">เลือกหมวด</option>
                <option value="se_studentid">รหัสนักศึกษา</option>
                <option value="se_numna">คำนำหน้า</option>
                <option value="se_name">ชื่อ</option>
                <option value="se_lastname">นามสกุล</option>
                <option value="se_birthday">วันเกิด</option>
                <option value="se_tel">เบอร์โทร</option>
                <option value="se_yearend">ปีจบ</option>
                <option value="se_facebook">facebook</option>
                <option value="se_email">email</option>
                <option value="se_lakete">บ้านเลขที่</option>
                <option value="se_mu">หมู่</option>
                <option value="se_district">ตำบล</option>
                <option value="se_aumpa">อำเภอ</option>
                <option value="se_province">จังหวัด</option>
                <option value="work_name">ชื่อที่ทำงาน</option>
                <option value="work_tel">เบอร์ที่ทำงาน</option>
                <option value="work_lakete">เลขที่ที่ทำงาน</option>
                <option value="work_mu">หมู่ที่ทำงาน</option>
                <option value="work_district">ตำบลที่ทำงาน</option>
                <option value="work_aumpua">อำเภอที่ทำงาน</option>
                <option value="work_province">จังหวัดที่ทำงาน</option>
            </select>
            <input type="text" name="searchbox" id="namesearch">
            <div class="search-logo">
                <i class="fas fa-search" onclick="triggerClick2()"></i>
                <input type="submit" name="searchsubmit" id="searchsubmit">
            </div>
        </form>
    </div>
    <script src="../form/script.js"></script>
</body>
</html>