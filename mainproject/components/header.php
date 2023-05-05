<header>
    
<?
    if (($_SESSION['user'] ?? '') === '') { 
    ?>
        <a href="/registration.php">Регистрация</a>
        <a href="/login.php">Войти</a>
    <? 
    } 
    else { 
    ?>  
        <h3><? echo ($_SESSION['user']['login']) ?></h3>
        <a href="/user_account.php">Профиль</a>
        <a href="/logout.php">Выход</a>
    <? 
    }  
    if (isset($_SESSION['user'])) {
        if (($_SESSION['user']['role'] == 'admin') == true) 
        { 
        ?>
            <a href="/admin.php">Админка</a>
        <? 
        }
    }
    ?>
    <ul class="nav_menu">
        <li class="nav_menu_item"><a href="index.php" class="nav_menu_item_link">Главная</a></li>
        <li class="nav_menu_item"><a href="registration.php" class="nav_menu_item_link">Регистрация</a></li>
        <li class="nav_menu_item"><a href="login.php" class="nav_menu_item_link">Авторизация</a></li>
        <li class="nav_menu_item"><a href="logout.php" class="nav_menu_item_link">Выйти</a></li>
    </ul>
</header>
