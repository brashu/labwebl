<!-- Материалы -->
<?php require_once('bd.php');
$dbQuery = mysqli_query($db, "SELECT * FROM materials ORDER BY price DESC LIMIT 10");
$outputBd = mysqli_fetch_all($dbQuery);
$i=0;?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    
    <title>Материалы</title>
</head>
<body>
    

    <header>
        <div class="container">
             <center><img class="logo" src="img/logo.png" alt="Logo"></center>
               <center> <a class="navbar-brand ml-2" href="index.php">Таки купите пожалуйста</a></center>
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
                    <input class="form-control mr-sm-2" type="search" placeholder="Найти Материал" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Поиск</button>
                  </form>
                </div>
              </nav>
        </div>
    </header>

    <main>
        <div class="container">
            <!-- Добавление товара-->
            <div class="container pb-5">
                <div class="row">
                    <div class="col-sm">
                    </div>
                    <div class="col-6 p-2">
            <h3>Добавить товар</h3>
            <form method="post" name="form" action="add-material.php">
                <div class="form-group">
                    <label>Название товара</label>
                    <input type="text" class="form-control" name="name" placeholder="название товара" required>
                    <small id="name" class="form-text text-danger" hidden>введите ваше имя!</small>
                </div>
                <div class="form-group">
                    <label>Дата создания</label>
                    <input type="date" class="form-control" name="createDate" placeholder="дата создания" required>
                    <small id="createDate" class="form-text text-danger" hidden>введите дату!</small>
                </div>
                <div class="form-group">
                    <label>Поставщик (необяз.)</label>
                    <input type="text" class="form-control" name="master" placeholder="поставщик">
                    <small id="master" class="form-text text-danger" hidden>введите поставщика!</small>
                </div>
                <div class="form-group">
                    <label>Цена руб/м^2</label>
                    <input type="text" class="form-control" name="price" placeholder="цена (в долларах)" required>
                    <small id="price" class="form-text text-danger" hidden>введите цену (float число)</small>
                </div>
                    <button onclick="validateForm()" class="btn btn-primary">Добавить</button>
            </form>
                    </div>
                    <div class="col-sm">
                    </div>
                </div>
            </div>


            <h3 class="mt-5">Материалы:</h3>
            <div class="row">
                <div class="col-9">
                    <div id="accordion1">
                        <?php foreach($outputBd as $elemBd): ?>
                        <div class="card mb-1" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1" >
                            <div class="card-header" id="heading1">
                                <div class="row">
                                    <div class="col-3 text-center"><img class="card-img" src="img/2.jpg" alt="Фильм"></div>
                                    <div class="col-9">
                                        <div class="row">
                                            <div class="col text-center">
                                                <a href="#"><p>Название материала: <?php echo $elemBd[1];?></p></a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-4">
                                                <?php if(empty($elemBd[3])):?>
                                                <a href="#"><p>Поставщик: неуказано</p></a>
                                                <?php else:?>
                                                <a href="#"><p>Поставщик: <?php echo $elemBd[3];?></p></a>
                                                <?php endif;?>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6"><p>Дата производства: <?php echo $elemBd[2];?></p></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6"><p>цена: <?php echo $elemBd[4];?> руб/м^2</p></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="collapse1" class="collapse " aria-labelledby="heading1" data-parent="#accordion1">
                                <div class="card-body">
                                    Описание материала
                                </div>
                            </div>
                        </div>
                        <?php endforeach;?>
                    </div>
                </div>
                <div class="col-3">
                    <div class="row">
                    
                       
                    </div                    <div class="row float-right">
                        
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script>
        function validateForm() {
            var field1 = document.forms["form"]["name"].value;
            var field2 = document.forms["form"]["createDate"].value;
            var field3 = document.forms["form"]["price"].value;
            if (field1 == "") {
                document.getElementById("name").hidden = false;
            } else {
                document.getElementById("name").hidden = true;
            }
            if (field2 == "") {
                document.getElementById("createDate").hidden = false;
            } else {
                document.getElementById("createDate").hidden = true;
            }
            if (field3 == "" || isNaN(parseFloat(field3))) {
                document.getElementById("price").hidden = false;
            } else {
                document.getElementById("price").hidden = true;
            }
        }
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>