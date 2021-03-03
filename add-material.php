<?php
include("bd.php");
if (isset($_POST))
{
    $name = strip_tags(mysqli_real_escape_string($db, $_POST['name']));
    $createDate = strip_tags(mysqli_real_escape_string($db, $_POST['createDate']));
    $price =strip_tags( mysqli_real_escape_string($db, $_POST['price']));
    $master = strip_tags(mysqli_real_escape_string($db, $_POST['master']));
    if (!empty($master))
    {
        mysqli_query($db, "INSERT INTO materials ( name, price, create_date , master) VALUES ( '" . $name . "', '"
            . $price . "', '" . $createDate . "', '" . $master . "')");
    } else
    {
        mysqli_query($db, "INSERT INTO materials ( name, price, create_date ) VALUES ( '" . $name . "', '"
            . $price . "', '" . $createDate . "')");
    }
    echo "INSERT INTO materials ( name, price, createDate) VALUES ( '" . $name . "', '"
        . $price . "', '" . $createDate . "')";
    header('Location: http://' . $_SERVER['SERVER_NAME'] . '/Materials.php');
}
?>