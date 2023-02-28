<?php include ('db.php'); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Delete film</title>
</head>
<body>
<form action="drop.php" method="post" enctype="multipart/form-data">
    <?php
        $result = mysqli_query($link, "SELECT id, title FROM horror");
        $myrow = mysqli_fetch_array($result);

        do{
            printf('
<center>
<label><input type="radio" name="id" value="%s">%s</label><br><br>

</center>', $myrow['id'],$myrow['title']);
        }
        while($myrow=mysqli_fetch_array($result));
    ?>
    <center><input type="submit" value="Удалить"></center>


</form>


</body>
</html>