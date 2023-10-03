<?php?>
<html><head><meta charset="utf-8"></head>
<body>
    <div style="display:flex">
        <?php
            $pdo = new PDO("mysql:host=localhost;dbname=blueshop;charset=utf8", "root", "");
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
            $stmt = $pdo->prepare("SELECT * FROM member WHERE username LIKE ?");
            if (isset($_GET))
                $stmt->bindParam(1, $_GET["username"]);
                $stmt->execute();
        ?>
        <?php while ($row = $stmt->fetch()):
        ?>
            <div style="padding: 15px; text-align: center">
            <h2>ชื่อสมาชิก :<?= $row ["name"]?></h2>
            ที่อยู่ : <?= $row ["address"]?> <br>
            อีเมล : <?= $row ["email"]?> <br><hr>
            <img src='member_photo/<?=$row ["username"]?>.jpg' width='200'><br>
            </div>
        <?php endwhile;?>
    </div>
</body>
</html>