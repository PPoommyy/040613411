<html>
<head>
    <meta charset="utf-8">
    <script>
        function confirmDelete(username) {
            var ans = confirm("ต้องการลบสมาชิค " + username); 
            if (ans==true) 
                document.location = "delete.php?username=" + username; 
            }
    </script>

</head>
    <body>
        <?php
            $pdo = new PDO("mysql:host=localhost;dbname=blueshop;charset=utf8", "root", "");
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $pdo->prepare("SELECT * FROM member");
        
            $stmt->execute();

            $i = 1;

            while ($row = $stmt->fetch()) {
            ?>
            ชื่อสมาชิก : <?=$row ["name"]?><br>
            ที่อยู่ : <?=$row ["address"]?><br>
            อีเมล : <?=$row ["email"]?><br>
            
            <img src='member_photo/<?=$row ["username"]?>.jpg' width='100'><br>

            <br>
            <a href='#'>แก้ไข</a> |
            <a href='#' onclick='confirmDelete("<?=$row["username"]?>")'>ลบ</a>
            
            <?php $i++; ?>
            <hr>
        <?php } 
        ?>
    </body>
</html>