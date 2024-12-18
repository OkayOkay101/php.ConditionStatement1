<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ทดสอบส่งค่าโดยใช้ Method GET</title>
</head>
<body>
    <h2>ทดสอบรับค่าจาก method GET (ผ่าน URL)</h2>
    <?php
        // Check if 'subject' and 'web' parameters are set to avoid errors
        if (isset($_GET['subject']) && isset($_GET['web'])) {
            // Use htmlspecialchars to prevent XSS
            $subject = htmlspecialchars($_GET['subject'], ENT_QUOTES, 'UTF-8');
            $web = htmlspecialchars($_GET['web'], ENT_QUOTES, 'UTF-8');
            
            echo $subject . "<br>";
            echo $web . "<br>";
            // Optionally echo the concatenated result
            // echo "ศึกษาเรื่อง : ".$subject." ได้ที่ ".$web;
        } else {
            echo "ข้อมูลที่คุณต้องการไม่ครบถ้วน<br>";
        }
    ?>
</body>
</html>
