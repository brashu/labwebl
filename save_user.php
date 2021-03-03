<?php
    if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} } 
    if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }
    
 if (empty($login) or empty($password)) 
    {
    exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
    }

$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
$password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);
if ((mb_strlen($login) < 5) or (mb_strlen($login) > 15)) 
    {
    exit("Недопустимая длина логина! Логин должен быть от 5 до 14 символов");
    }
if ((mb_strlen($password) < 5) or (mb_strlen($password) > 50)) 
    {
    exit("Недопустимая длина пароля! Пароль должен быть от 5 до 50 символов");
    }

    
    $login = stripslashes($login);
    $login = htmlspecialchars($login);
 $password = stripslashes($password);
    $password = htmlspecialchars($password);
 
    $login = trim($login);
    $password = trim($password);
 
    include ("bd.php");

    $result = mysqli_query($db, "SELECT id FROM `users` WHERE login='$login'");
    $myrow = mysqli_fetch_array($result);
    if (!empty($myrow['id'])) {
    exit ("Извините, введённый вами логин уже зарегистрирован. Введите другой логин.");
    }
    $result2 = mysqli_query ($db, "INSERT INTO users (login,password) VALUES('$login','$password')");
    
    if ($result2=='TRUE')
    {
    echo "Вы успешно зарегистрированы! Теперь вы можете зайти на сайт. <a href='index.php'>Главная страница</a>";
    }
 else {
    echo "Ошибка! Вы не зарегистрированы.";
    }
    ?>