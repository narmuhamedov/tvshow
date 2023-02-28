<?php
include ('db.php');
if (isset($_POST['id'])) {
    $id = $_POST['id'];
    if ($id == '') {
        unset($id);
    }
}
if (isset($id)) {
    $result = mysqli_query($link, "DELETE FROM horror WHERE id='$id' ");
    if ($result==true){
        echo 'Deleted';
    }
    else{
        echo 'error code....';
    }
}
else{
    echo 'Not deleted';
}







?>
