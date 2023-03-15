<?php
$color = $_GET['color'] ?? '555555';

if (!preg_match('/[\da-f]{6}$/', $color,)) {
    $color = 'aqua';
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" href="./App.scss" >
    <title>002</title>
</head>
<body style="background-color: #<?= $color ?>;">
    <div>
        <button>
            <a href="http://localhost/ciupakabros/web_mech/002/002.php?page=1">I Fonas</a>
        </button>
        <button>    
        <a href="http://localhost/ciupakabros/web_mech/002/002.php?page=2&color=#8CFFC7">II Fonas</a>
    </button>
    </div>

</body>
</html>