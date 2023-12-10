<?php
require_once('db.php');

$email = $_POST['email'];
$pass = $_POST['password'];

if(empty($email) || empty($pass)) {
    echo'Заполните поля';
} else {
    $sql = "SELECT * FROM `people` WHERE login = '$email' AND password = '$pass'";
    $result = $conn->query($sql);

    if($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo"Добро пожаловать";
        }
    } else {
        echo "нет такого пользователя";
    }
}
?>