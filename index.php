<?php
include 'connect_db.php';


if (isset($_GET['name']) AND $_GET['name'] == '1') {

    $query = "INSERT INTO interview (age_1, age_2, age_3) VALUES (true, false, false) ";
   // echo $query;
    mysqli_query($link, $query) or die(mysqli_error($link));
}

if (isset($_GET['name']) AND $_GET['name'] == '2') {

    $query = "INSERT INTO interview (age_1, age_2, age_3) VALUES (false, true, false) ";
   // echo $query;
    mysqli_query($link, $query) or die(mysqli_error($link));
}

if (isset($_GET['name']) AND $_GET['name'] == '3') {

    $query = "INSERT INTO interview (age_1, age_2, age_3) VALUES (false, false, true) ";
   // echo $query;
    mysqli_query($link, $query) or die(mysqli_error($link));
}


?>

<html>
<head>
<meta charset="UTF-8">
<title>Document</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Опрос.</h1>
<h2>Укажите ваш возраст.</h2>
<form method="GET" action="">
    <input type="radio" name="name" value="1">до 20 лет <br><br>
    <input type="radio" name="name" value="2">от 20 до 30 лет <br><br>
    <input type="radio" name="name" value="3">более 30 лет <br><br>
    <input type="submit"><br><br>
</form>
</body>
</html>
