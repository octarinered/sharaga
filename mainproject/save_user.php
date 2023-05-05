<?php
    include("db.php");

    $login = $_POST["login"];
    $password = $_POST["password"];
    
    $email = $_POST["email"];
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];


    if (empty($login) or empty($password)){
        exit("Логин и пароль обязательны к заполнению");
    }
    
    $mbUser = mysqli_query($db, "SELECT * FROM `users` WHERE `users`.`login` = '$login'");
    $mbUser = mysqli_fetch_assoc($mbUser);

    if($mbUser){
        die("Пользователь есть");
    }else{
        $result2 = mysqli_query($db, "INSERT INTO users (login, password, email, first_name, last_name) VALUES ('$login', '$password', '$email', '$first_name', '$last_name')");
        if($result2 == "TRUE"){
            header("Location: http://exam030502023/login.php");
            die();
        }else{
            echo("Не удалось зарегистрироваться");
        }
    }

?>