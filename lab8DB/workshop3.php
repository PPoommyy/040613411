<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $pdo = new PDO("mysql:host=localhost;dbname=blueshop;charset=utf8", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $pdo->prepare("SELECT * FROM member");

    $stmt->execute();
    while ($row = $stmt->fetch()):
    ?>
        ชื่อสมาชิก :<?= $row ["name"]?><br>
        ที่อยู่ : <?= $row ["address"]?> <br>
        อีเมล : <?= $row ["email"]?> <br><hr>
        <img src='member_photo/<?=$row ["username"]?>.jpg' width='100'><br>
        
    <?php endwhile;?>
</body>
</html>