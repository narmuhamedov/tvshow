<?php
include ('db.php');
if (isset($_POST['name'])){
    $name = $_POST['name'];
    if ($name==''){
        unset($name);
    }
}


if (isset($_POST['rating'])){
    $rating = $_POST['rating'];
    if ($rating==''){
        unset($rating);
    }
}



if (isset($_POST['image'])){
    $image = $_POST['image'];
    if ($image==''){
        unset($image);
    }
}


if (isset($_POST['description'])){
    $description = $_POST['description'];
    if ($description==''){
        unset($description);
    }
}


if (isset($_POST['date'])){
    $date = $_POST['date'];
    if ($date==''){
        unset($date);
    }
}

if (isset($name)&& isset($rating)&& isset($image)&& isset($description)&& isset($date)){
    $result = mysqli_query($link,"INSERT INTO programm_language(name, rating, image, description,date)VALUES('$name','$rating',
                                                                          '$image', '$description', '$date') 
                                                                       ");
    if ($result==true){
        echo 'Успешно добавлен';
    }
    else{
        echo 'bbbb';
    }

}




?>