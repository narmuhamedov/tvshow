<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail</title>
</head>
<body>
<?php
include('db.php');
$id = $_GET['id'];
$result = mysqli_query($link, "SELECT * FROM horror WHERE id=$id");
$myrow = mysqli_fetch_array($result);
?>

<h1><? echo $myrow['title']  ?></h1>
<p><? echo $myrow['description']?></p>
<img src="<? echo $myrow['image']?>" alt="">
<p><? echo $myrow['created_date']?></p>
</body>
</html>