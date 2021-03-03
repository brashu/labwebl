<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Пиломатериалы. Главная страница</title>
</head>

<?php
    session_start();
    ?>

<body>
    <div class="container">
        <header>
            <center><img class="logo" src="img/logo.png" alt="Logo"></center>
            <center><a class="navbar-brand ml-2" href="index.php">Таки купите пожалуйста</a></center>
            <nav class="navbar navbar-expand-lg navbar-light">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                



    <form action="testreg.php" method="post">

    
 <p>
    <label>Ваш логин:<br></label>
    <input name="login" type="text" size="15" maxlength="15">
    </p>

 
    <p>

    <label>Ваш пароль:<br></label>
    <input name="password" type="password" size="15" maxlength="15">
    </p>

    <p>
    <input type="submit" name="submit" value="Войти">

<br>

<a href="reg.php">Зарегистрироваться</a> 
    </p></form>
    <br>
    <?php

    if (empty($_SESSION['login']) or empty($_SESSION['id']))
    {
  
    echo "Вы вошли на сайт, как гость";
    }
    else
    {

 
    echo "Вы вошли на сайт, как ".$_SESSION['login'].'<br><a href="exit.php">Выход</a>';
   

    }
    ?>
    






                <div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Материалы
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="#">Доска</a>
                          <a class="dropdown-item" href="#">Горбыль</a>
                          <a class="dropdown-item" href="#">Брус</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="Materials.php">Другое</a>
                        </div>
                      </li>
                    <li class="nav-item">
                      <a class="nav-link" href="PostavkiList.php">Поставщики</a>
                    </li>
                    
                  </ul>
                  <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Найти материал" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Поиск</button>
                  </form>
                </div>
              </nav>
        </header>

        <main class="">
            
            <h3 class="mt-5">Рекомендуем:</h3>
            <div class="card-header" id="heading11">
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <img class="card-img" src="img/1.jpg" alt="Материал">
            <h2>
                Название материала
            </h2>
            
            <div class="row">
                <div class="col-4">
                    <a href="file:///C:/Users/79275/Desktop/%D0%B0/index.html#"></a>
                    <p>
                        Поставщик: (Имя)
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <p>
                        Год производства: (Дата)
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <p>
                        Краткое описание
                    </p>
                </div>
            </div>
            
            <p>
                <a class="btn" href="#">Подробнее »</a>
            </p>
        </div>
        <div class="col-md-4"><img class="card-img" src="img/2.jpg" alt="Материал">
            <h2>
                Название материала
            </h2>
            
            <div class="row">
                <div class="col-4">
                    <a href="file:///C:/Users/79275/Desktop/%D0%B0/index.html#"></a>
                    <p>
                        Поставщик: (Имя)
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <p>
                        Год производства: (Дата)
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <p>
                        Краткое описание
                    </p>
                </div>
            </div>
            
            <p>
                <a class="btn" href="#">Подробнее »</a>
            </p>
        </div>
        <div class="col-md-4"><img class="card-img" src="img/3.jpg" alt="Материал">
            <h2>
                Название материала
            </h2>
            
            <div class="row">
                <div class="col-4">
                    <a href="file:///C:/Users/79275/Desktop/%D0%B0/index.html#"></a>
                    <p>
                        Поставщик: (Имя)
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <p>
                        Год производства: (Дата)
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <p>
                        Краткое описание
                    </p>
                </div>
            </div>
            
            <p>
                <a class="btn" href="#">Подробнее »</a>
            </p>
        </div>
    </div>
</div>
</div>
<h3 class="mt-5">Лучшая цена:</h3>
<div class="card-header" id="heading11">
<div class="container">
    <div class="row">
        <div class="col-md-4"><img class="card-img" src="img/1.jpg" alt="Материал">
            <h2>
                Название материала
            </h2>
            
            <div class="row">
                <div class="col-4">
                    <a href="file:///C:/Users/79275/Desktop/%D0%B0/index.html#"></a>
                    <p>
                        Поставщик: (Имя)
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <p>
                        Год производства: (Дата)
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <p>
                        Краткое описание
                    </p>
                </div>
            </div>
            
            <p>
                <a class="btn" href="#">Подробнее »</a>
            </p>
        </div>
        <div class="col-md-4"><img class="card-img" src="img/2.jpg" alt="Материал">
            <h2>
                Название материала
            </h2>
            
            <div class="row">
                <div class="col-4">
                    <a href="file:///C:/Users/79275/Desktop/%D0%B0/index.html#"></a>
                    <p>
                        Поставщик: (Имя)
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <p>
                        Год производства: (Дата)
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <p>
                        Краткое описание
                    </p>
                </div>
            </div>
            
            <p>
                <a class="btn" href="#">Подробнее »</a>
            </p>
        </div>
        <div class="col-md-4"><img class="card-img" src="img/3.jpg" alt="Материал">
            <h2>
                Название материала
            </h2>
            
            <div class="row">
                <div class="col-4">
                    <a href="file:///C:/Users/79275/Desktop/%D0%B0/index.php#"></a>
                    <p>
                        Поставщик: (Имя)
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <p>
                        Год производства: (Дата)
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <p>
                        Краткое описание
                    </p>
                </div>
            </div>
            
            <p>
                <a class="btn" href="#">Подробнее »</a>
            </p>
        </div>
    </div>
</div>
<form method="POST">

<form action="" method="post">

<input name="token" type="hidden" value="<?= $_SESSION['token'] ?>" >

<input type="text" name="text" >

<p><button name="sent">Отправить!</button></p>

</form>
   <?php

include 'code.php';

if(isset($_POST["send"]))

{

echo 'Комментарий: ', safety_request($_REQUEST["comment"]);

}

function get_token( ) {

return $_SESSION['token'] = substr( str_shuffle( 'qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM' ), 0, 10 );

}

if (isset($_POST["sent"]))

{

if ($_POST['token'] === $_SESSION['token'])

{

echo '<p>Токены идентичны. Ваши данные приняты.</p>';
echo safety_request($_POST['text']);

} else

{

echo '<p>Токены не совпадают. Ваши данные отклонены.</p>';

}

}

else

{

$_SESSION['token'] = get_token();

} 
?>


</form>
</div>
        </main>
        
    </div>

  

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>