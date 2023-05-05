<?
    session_start();
    require "db.php";
    $login = $_POST['login'];
    $password = $_POST['password'];

    if ($login == null || $password == null) { 
        ?>
        <p>Заполните все поля</p>
        <a href="/registration.php">Вернуться</a>
        <?
    }

    $queryUser = "SELECT * FROM `users` where `users`.`login` = '$login' AND `users`.`password` = '$password'";
    $mbUser = mysqli_query($db, $queryUser);
    $mbUser = mysqli_fetch_assoc($mbUser);

    if ($mbUser) {
        if ($login == $mbUser['login'] && $password == $mbUser['password']) {
            $_SESSION['user'] = [
                'id' => $mbUser['id'],
                'login' => $mbUser['login']
            ];
            header("Location: /index.php");
        }

        ?>
        <p>Неверный логин или пароль</p>
        <a href="/registration.php">Вернуться</a>
        <?
    } 
    else {
        ?>
        <p>Пользователь не найден</p>
        <a href="/registration.php">Вернуться</a>
        <?
    }