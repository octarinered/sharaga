<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Зарегистрироваться</title>
    <?php include 'components/styles_input.php'; ?>
</head>
<body>
    <div class="wrapper">
        <?php include 'components/header.php'; ?>
        
        <h2>Регистрация</h2>

        <form action="save_user.php" method="POST" class="log_reg_form">
            <input name="login" type="text" class="log_reg_input" placeholder="Логин">
            <input name="email" type="email" class="log_reg_input" placeholder="Email">
            <input name="first_name" type="text" class="log_reg_input" placeholder="Имя">
            <input name="last_name" type="text" class="log_reg_input" placeholder="Фамилия">
            <input name="password" type="password" class="log_reg_input" placeholder="Пароль">
            <button type="submit" class="submit">Зарегистрироваться</button>
        </form>

        <?php include 'components/footer.php'; ?>
    </div>
</body>
</html>