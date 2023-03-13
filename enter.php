
<?php
session_start();
    $admin = "asan";
    $pass = "12345";
    if ($_SESSION['admin']){
        header("Location: admin/index.php");
        exit;
    }
    if ($_POST['submit']){
    if($admin == $_POST['user'] AND $pass == $_POST['pass']){
    $_SESSION['admin'] = $admin;
    header("Location: admin/index.php");
    exit;
    }
    else $login = "<h2 style='color: red'>Логин или пароль не верны</h2>";

}

?>


<center>
    <form method="post">
        <h1>Авторизация</h1>
        <input type="text" name="user"  />
        <br><br>
        <input type="password" name="pass"" />
        <br><br>
        <input type="submit" name="submit" value="Log In">
    </form>
<? echo "<center> ".$login."<center>" ?>
</center>
