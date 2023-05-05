<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Войти</title>
    <?php include 'components/styles_input.php'; ?>
</head>
<body>
    <div class="wrapper">
        <?php include 'components/header.php'; ?>
        
        <h2>Авторизация</h2>

        <form action="login_user.php" method="POST" class="log_reg_form">
            <input name="login" type="text" class="log_reg_input" placeholder="Логин">
            <input name="password" type="password" class="log_reg_input" placeholder="Пароль">
            <button type="submit" class="submit">Войти</button>
        </form>

        <?php include 'components/footer.php'; ?>
    </div>
</body>
</html>