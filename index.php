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

    <button><a href="newfilm.php">Добавить</a></button>
    <button><a href="edit.php">Изменить</a></button>
    <button><a href="delfilm.php">Удалить</a></button>
    <button><a href="enter.php">Войти</a></button>
</center>
    <?php
    include ('db.php');
    $result = mysqli_query($link, "SELECT * FROM horror");
    $myrow = mysqli_fetch_array($result);

    do {
        printf('
    <div>
        <ul>
            <li>
                <h2>%s</h2>
                <button><a href="index_detail.php?id=%s">More</a></button>
            </li>
        </ul>
    </div>', $myrow['title'], $myrow['id']);
    }

    while ($myrow = mysqli_fetch_array($result))
    ?>




</body>
</html>