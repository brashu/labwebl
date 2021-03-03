<!-- Список купленных материалов -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

    <title>Список Заказчиков</title>
</head>
<body>
    
  <header>
    <center><img class="logo" src="img/logo.png" alt="Logo"></center>
            <center><a class="navbar-brand ml-2" href="index.php">Таки купите пожалуйста</a></center>
    <div class="container">
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
                      <a class="dropdown-item" href="Films.php">Другое</a>
                    </div>
                  </li>
                <li class="nav-item">
                  <a class="nav-link" href="DirectorList.php">Поставщики</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">Войти</a>
                  </li>
              </ul>
              <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Найти материал" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Поиск</button>
              </form>
            </div>
          </nav>
    </div>
</header>

    <main>
        <div class="container">
            <h4 class="mt-5">Заказчики<h4>
            <table class="table table-borderless mt-5">
                <thead>
                  <tr>
                    <th scope="col">№</th>
                    <th scope="col">Имя</th>
                    <th scope="col">Дата заказа</th>
                    <th scope="col">Счёт</th>
                    <th scope="col">Сумма заказа &#8381</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Имя1</td>
                    <td>24.09.2020</td>
                    <td><a href="#">Счёт</a></td>
                    <td>6666778</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Имя2</td>
                    <td>24.09.2020</td>
                    <td><a href="#">Счёт</a></td>
                    <td>123423</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Имя3</td>
                    <td>24.09.2020</td>
                    <td><a href="#">Счёт</a></td>
                    <td>100000</td>
                  </tr>
                </tbody>
              </table>
        </div>
    </main>

    <footer class="footer">
      <div class="container">
          <div class="row">
              <div class="col-3">
                  <img class="logo" src="img/logo.png" alt="Logo">
              </div>
              <div class="col-5">
                  <h5><a href="#">Задайте нам вопрос</a></h5>
                  <br>
                  <h5><a href="#">Соглашение на обработку персональных данных</a></h5>
              </div>
              <div class="footer_3 col-4">
                  <br><br><br><br>
                  <h4>8 904 888 90 44</h4>
              </div>
          </div>
      </div>
    </footer>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>