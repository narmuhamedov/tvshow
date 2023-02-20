<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Films</title>
</head>
<body>
<center>


    <?php
    include ('db.php');
    $result = mysqli_query($link, "SELECT * FROM horror");
    $myrow = mysqli_fetch_array($result);

    do {
        printf('<h1>%s</h1>
    <p>%s</p>
    <img src="%s" alt="">', $myrow['title'], $myrow['description'], $myrow['image']);
    }

    while ($myrow = mysqli_fetch_array($result))




    ?>

</center>

</body>
</html>