<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>001</title>
    <link rel ="stylesheet" href="./App.scss" >
</head>
<body>
    <div>
        <button className="pirmas" type="submit">
             <a href="http://localhost/ciupakabros/web_mech/001/001.php">Black Page</a>
        </button>
         <button type="submit">
             <a href="http://localhost/ciupakabros/web_mech/001/001.php?color=1">Red Page</a>
        </button>
    <?php
		if(isset($_GET['color']) && $_GET['color'] == 1) {
			echo "<style>body{background-color: red;}</style>";
		}
	?>
    </div>





    
    
</body>
</html>