<?php
include ('db.php');

if (isset($_POST['title'])){
    $title = $_POST['title'];
    if ($title == ''){
        unset($title);
    }
}

if (isset($_POST['description'])){
    $description = $_POST['description'];
    if ($description == ''){
        unset($description);
    }
}

if (isset($_POST['image'])){
    $image = $_POST['image'];
    if ($image == ''){
        unset($image);
    }
}

if (isset($title) && isset($description) && isset($image))
{
    $result = mysqli_query($link, "INSERT INTO horror(title, description, image)VALUES('$title','$description','$image')");
   if ($result == 'true'){
       echo 'Фильм успешно добавлен';
   }
   else{
       echo 'Ошибка в коде';
   }
}
else{
    echo 'Заполнили не все поля';
}














?>