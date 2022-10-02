<?php include "errordb.php" ?>
<html lang="en">

<head>
    <meta charset="UTF-8">
</head>

<body>
    <?php
    $stmt = $pdo->prepare("SELECT * FROM member where username = ?");
    $stmt->bindParam(1, $_GET["username"]);
    $stmt->execute();
    $row = $stmt->fetch();
    ?>
        ชื่อสมาชิก : <?= $row["name"] ?><br>
        ที่อยู่ : <?= $row["address"] ?><br>
        อีเมล์ :<?= $row["email"] ?><br>
        <img src="member_photo/<?= $row["username"] ?>.jpg">
</body>

</html>