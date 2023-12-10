<?php
    require_once('db.php');
    $firstname = $_POST["firstname"];
    $email = $_POST["email"];
    $pass = $_POST["password"];
    $lastname = $_POST["lastname"];

    if(empty($firstname) || empty($email) || empty($pass) || empty($lastname)) {
        echo"Заполните все поля";
    } else {   
        $sql = "INSERT INTO `people` (firstname, secondname, login, password) VALUES ('$firstname','$lastname','$email', '$pass')";
        if($conn -> query($sql) === TRUE) {
            echo "Успешная регистрация";
        } else {
            echo "Ошибка" . $conn -> error;
        }
    }
?>