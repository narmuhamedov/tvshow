<?php
include('db.php');
if (isset($_POST['title'])){
    $title = $_POST['title'];
    if($title==''){
        unset($title);
    }
}


if (isset($_POST['description'])){
    $description = $_POST['description'];
    if($description==''){
        unset($description);
    }
}


if (isset($_POST['image'])){
    $image = $_POST['image'];
    if($image==''){
        unset($image);
    }
}


if (isset($_POST['id'])){
    $id = $_POST['id'];
    if($id==''){
        unset($id);
    }
}

if (isset($title) && isset($description) && isset($image)){
    $result = mysqli_query($link,
        "UPDATE horror SET title='$title', description='$description, image='$image' WHERE id='$id'");
    if ($result==true){
        echo 'Успешно обновлен';
    }
    else{
        echo 'error code';
    }
}
else{
    echo 'dont update';
}






?>
