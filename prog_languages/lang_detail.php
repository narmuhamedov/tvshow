<center>
<?php
include ('db.php');
$id = $_GET['id'];
$res = mysqli_query($link, "SELECT  * FROM programm_language WHERE id=$id");
$row = mysqli_fetch_array($res);
?>

<h2><?php echo $row['name']?></h2>
    <p><i><? echo $row['description']?></i></p>
    <p><? echo $row['rating']?></p>
    <img src="<? echo $row['image']?>" alt="">
    <p><? echo $row['date']?></p>

</center>
