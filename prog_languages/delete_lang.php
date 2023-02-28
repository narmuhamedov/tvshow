<center><h1>Выберите язык для удаления</h1></center>
<form action="drop_lang.php" method="post" enctype="multipart/form-data">
<?php
include ('db.php');
$res = mysqli_query($link, "SELECT id, name FROM programm_language");
$row = mysqli_fetch_array($res);
do{
    printf('
    <center>    
    <input type="radio" name="id" value=%s />%s<br>   
    </center>
    ', $row['id'], $row['name']);
}
while($row = mysqli_fetch_array($res))
?>
<center><input type="submit" value="Удалить"></center>
</form>