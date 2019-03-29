<?php
include 'connect_db.php';

    $query = "SELECT COUNT(id) as count FROM interview";
  //  echo $query;
    mysqli_query($link, $query) or die(mysqli_error($link));
    $result = mysqli_query($link, $query) or die(mysqli_error($link));
    for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row) ;

    $query = "SELECT COUNT(age_1) as count1 FROM interview WHERE age_1='1'";
    // echo $query;
     mysqli_query($link, $query) or die(mysqli_error($link));
     $result = mysqli_query($link, $query) or die(mysqli_error($link));
     for ($data1 = []; $row = mysqli_fetch_assoc($result); $data1[] = $row) ;

    $query = "SELECT COUNT(age_2) as count2 FROM interview WHERE age_2='1'";
    // echo $query;
    mysqli_query($link, $query) or die(mysqli_error($link));
$result = mysqli_query($link, $query) or die(mysqli_error($link));
for ($data2 = []; $row = mysqli_fetch_assoc($result); $data2[] = $row) ;

$query = "SELECT COUNT(age_3) as count3 FROM interview WHERE age_3='1'";
//echo $query;
mysqli_query($link, $query) or die(mysqli_error($link));
$result = mysqli_query($link, $query) or die(mysqli_error($link));
for ($data3 = []; $row = mysqli_fetch_assoc($result); $data3[] = $row) ;
?>


<html>
<head>
<meta charset="UTF-8">
<title>Document</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Результат опроса:</h1>
<p>
    Общее количество опрошенных:<?php foreach($data as $item): ?>
    <strong> <?php $count = $item["count"]; echo $count;?></strong>
    <?php endforeach;?>
</p>
<p>
    До 20 лет:<?php foreach($data1 as $item): ?>
    <strong> <?php $count_1 = $item["count1"]; echo $count_1;?> человек</p><br> <?=$count_1*100/$count; ?> % опрошенных</strong>
    <?php endforeach;?>
</p>

<p>
    От 20 до 30 лет:<?php foreach($data2 as $item): ?>
        <strong> <?php $count_2 = $item["count2"]; echo $count_2;?> человек</p><br> <?=$count_2*100/$count; ?> % опрошенных</strong>
    <?php endforeach;?>
</p>

<p>
    Более 30 лет(зрелые):<?php foreach($data3 as $item): ?>
        <strong> <?php $count_3 = $item["count3"]; echo $count_3;?> человек</p> <br> <?=$count_3*100/$count; ?> % опрошенных</strong>
    <?php endforeach;?>
</p>
</body>
</html>