<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New Film</title>
</head>
<body>
<center>
    <form action="add_films.php" method="post" enctype="multipart/form-data">
        <h2>Название фильма</h2><br>
        <input type="text" name="title" /><br>
        <h2>Описание фильма</h2><br>
        <textarea name="description"  cols="30" rows="10"></textarea><br>
        <h2>Фото</h2>
        <input type="text" name="image" /><br>
        <button type="submit">Добавить фильм в БД</button>
    </form>

</center>

</body>
</html>