<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400&display=swap" rel="stylesheet">
    <title>Вход</title>
    <link rel="shortcut icon" href="../style/img/CyberClub-logo.png" type="image/x-icon">   
</head>
<body>
    <div class="container">
        <header class="header">
            <a class="logo-link" href="../index.html"> 
                <img class="logo" src="../style/img/CyberClub-logo.png" alt="logo">
            </a>   
        <a class="logo-text" href="../index.html">киберклуб <br> чувгу</a>
        <ul class="menu">
            <li class="menu-item"><a href="../index.html">ГЛАВНАЯ</a> </li>
            <li class="menu-item"><a class="cybersport-link" href="../o_kibersporte.html" target="_blank">О КИБЕРСПОРТЕ</a> </li>
            <li class="menu-item"><a href="../deyatelnost.html">ДЕЯТЕЛЬНОСТЬ</a> </li>
            <li class="menu-item"><a href="../rukovodstvo.html">РУКОВОДСТВО</a> </li>
            <li class="menu-item"><a class="team__search-link" href="../poisk_komandy.html">ПОИСК КОМАНДЫ</a> </li>
            <li class="menu-item"><a href="../partnerstvo.html">ПАРТНЕРСТВО</a> </li>
            <li class="menu-item"><a href="../php/vhod.php">ВОЙТИ</a> </li>   
        </ul>      
    </header>
    <div class="panel">
    </div>
    <div class="title__wrapper">
        <h2 class="title-text">ВХОД</h2>
    </div>
    <div class="authorization">
     <!--форма авторизации-->
    <form name="form" class="form" method="POST" action="./php/check.php">
        <!--label - текст(Логин:)-->
        <label class="login-label" for="login" >Логин: </label>
            <!--input - ввод данных логин и пароль-->
            <input class="login-control" type="email" name="login">
            <!--input - ввод данных-->
   
        <!--label - текст-->
        <label class="password-label" for="password">Пароль:</label>
            <!--input - ввод пароля-->
            <input class="password-control" type="password" name="password">
            <!--input - ввод пароля-->
            <!--кнопки авторизации-->
            <div class="authorization-button">
                <!--кнопка вход-->
                <button class="vhod-button" type="submit">Вход</button>
                <!--кнопка регистрация-->
                <button class="registration-button" type="submit">Регистрация</button>
            </div>
            <!--кнопки авторизации-->
        </form>
       

    <!--форма авториации-->
</div>
    <footer class="footer__container">
        <div class="footer-text">© Киберклуб ЧУВГУ. Все права защищены.</div>
    </footer>
</div>
</body>
</html>