<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="action.php" method="post">

    <p>Имя мальчика<input type="text" name="boy_name"></p>
    <p>Имя девочки<input type="text" name="girl_name"></p>
    <p><input type="submit"></p>
</form>

<?php
// echo $_POST['bname'] . (int)($_POST['age']);

// $num1 = $_POST['name'];


// function getNames($num1, $num2){
//     $num1 = $_POST['name'];
//     $num2 = $_POST['age'];
//     $sum = $num1 . ' и ' . $num2;
//     return $sum;
// }

// echo getNames($num1, $num2);

?>

<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
<!-- 
    <p>Ваше имя<input type="text" name="name"></p>
    <p>Ваш возраст:<input type="text" name="age"></p>
    <p><input type="submit"></p> -->
</form>








</body>
</html>