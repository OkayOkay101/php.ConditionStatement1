<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เเสดงผลการคำนวณพื้นที่รูปเรขาคณิต</title>
</head>
<body>
    <?php
        $height = $_POST['height']; //รับค่าความสูงสามเหลี่ยม
        $width = $_POST['width']; //รับค่าความยาวฐาน จากฟอร์ม
        $area = 0.5*$height*$width;
        echo "<h3>รูปสามเหลี่ยมที่มีความสูง $height เเละมีความยาวฐาน $width</h3>";
        echo "<br><br>";
        echo "<h3>คำนวณพื้นที่ได้ $area ตารางหน่วย</h3>"
    ?>
</body>
</html>