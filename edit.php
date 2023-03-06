<?php
include ('db.php');

if (isset($_GET['id'])){
    $id = $_GET['id'];
    if ($id==''){
        unset($id);
    }
}

if (!isset($id)){
    echo '<h1>Выберите фильм для редактирования данных!</h1>';
    $result = mysqli_query($link, "SELECT id, title from horror");
    $myrow = mysqli_fetch_array($result);
    do{
        printf('<center>
            <a href="edit.php?id=%s">%s</a>
</center>', $myrow['id'], $myrow['title']);

    }
    while($myrow = mysqli_fetch_array($result));
}
else{
    $result2 = mysqli_query($link,"SELECT * FROM horror WHERE id=$id");
    $myrow2 = mysqli_fetch_array($result2);
    print <<<FORMA
        <form action="upate_films.php" method="post" enctype="multipart/form-data" id="form1">
        <h2>Название фильма</h2><br>
        <input type="text" name="title" value="$myrow2[title]" /><br>
        <h2>Описание фильма</h2><br>
        <textarea name="description"  cols="30" rows="10" >$myrow2[description]</textarea><br>
        <h2>Фото</h2>
        <input type="text" name="image" value="$myrow2[image]" /><br>
        <input type="hidden" name="id" value="$myrow2[id]">
        <button type="submit">Изменить фильм в БД</button>
    </form>
FORMA;

}


?>
