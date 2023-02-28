<center>
    <button><a href="create_lang.php" style="text-decoration: none"><h2>Добавить</h2></a></button>
    <button><a href="delete_lang.php" style="text-decoration: none"><h2>Удалить</h2></a></button>
    <button><a href="" style="text-decoration: none"><h2>Изменить</h2></a></button>
    <style>
        button{
            background-color: blanchedalmond;
        }
        li{
            font-size:40px;
        }
    </style>
</center>
    <div>
    <ul>

    <?php
include ('db.php');
$res = mysqli_query($link, "SELECT * FROM programm_language");
$row = mysqli_fetch_array($res);

do{
    printf('
        <li>%s</li>
        <button><a href="lang_detail.php?id=%s">More</a></button>               
    ', $row['name'], $row['id']);
}
while($row = mysqli_fetch_array($res))
?>
    </ul>
</div>

