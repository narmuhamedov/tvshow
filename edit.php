<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
</head>
<body>
<center>
    <h1>Выберите фильм для редактирования</h1>
    <?php
    include ('db.php');
    if (isset($_GET['id'])){
        $id=$_GET['id'];
        if ($id==''){
            unset($id);
        }
    }
    if (!isset($id)){
        $result = mysqli_query($link, "SELECT id, title FROM horror");
        $myrow = mysqli_fetch_array($result);

        do{
            printf('<h1><a href="edit.php?id=%s">%s</a></h1><br>', $myrow['id'], $myrow['title']);
        }
        while($myrow=mysqli_fetch_array($result));
    }
    else{
        $result2 = mysqli_query($link, "SELECT * FROM horror where id=$id");
        $myrow2 = mysqli_fetch_array($result2);
        print <<<FORMA
        <form action="update_film.php" method="post" enctype="multipart/form-data">
        <h2>Название фильма</h2><br>
        <input type="text" name="title" value="$myrow2[title]" /><br>
        <h2>Описание фильма</h2><br>
        <textarea name="description"  cols="30" rows="10">$myrow2[description]</textarea><br>
        <h2>Фото</h2>
        <input type="text" name="image" value="$myrow2[image]" /><br>
        <input type="hidden" name="id" value="$myrow2[id]">
        <button type="submit">Изменить фильм в БД</button>
    </form>
FORMA;

    }
    ?>




</center>

</body>
</html>