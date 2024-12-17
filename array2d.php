<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Array 2D</h1>
    <?php
        // Correct the array definition
        $foods = array(
            array("ตำไทย", 22, 18),
            array("ตำลาว", 15, 13),
            array("ตำป่า", 5, 2),
            array("ตำมั่ว", 17, 15),
        );
        
        // Display the food and their quantities
        echo "<h2>ปริมาณการสั่งซื้อส้มตำ</h2>\n";
        for ($i = 0; $i < 4; $i++) {
            echo $foods[$i][0] . " : จำนวนที่รอปรุง : " . $foods[$i][1] . " จำนวนที่เสริมแล้ว : " . $foods[$i][2];
            echo "<br>\n";
        }
        
        echo "<hr>";
        
        // Display all the values in a 2D array
        echo "<h2>ข้อมูลทั้งหมดจากอาเรย์</h2>\n";
        for ($i = 0; $i < 4; $i++) {
            for ($j = 0; $j < 3; $j++) {
                echo $foods[$i][$j] . " ";
            }
            echo "<br>\n"; // Adding line break after each row
        }
    ?>
</body>
</html>
