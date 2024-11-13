<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <title> Домашняя страничка </title>
        <link rel="stylesheet" href="styles/main.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300..700&display=swap" rel="stylesheet">
    </head>
    <body class="bod">
        <header class="header">
            <div class="container">
                <nav class="main-menu">
                    <a href="index.php" class="aut">Назад</a>
                </nav>
            </div>
        </header>
        <div class="auth-form-container">
        <form action="db_connect.php" method="post" enctype="multipart/form-data">
                <p class="form-label">Подключение к БД</p>
                <div class="form-group">
                    <label for="adres" class="form-label">Адрес</label>
                    <input id="adres" type="text" name="adres" placeholder="Адрес" required>
                </div>
                <div class="form-group">
                    <label for="nik" class="form-label">Имя пользователя</label>
                    <input id="nik" type="text" name="nik" placeholder="Имя пользователя" required>
                </div>
                <div class="form-group">
                    <label for="pass" class="form-label">Пароль</label>
                    <input id="pass" type="text" name="pass" placeholder="Пароль">
                </div>
                <div class="form-group">
                    <label for="name" class="form-label">Имя БД</label>
                    <input id="name" type="text" name="name" placeholder="Имя БД" required>
                </div>
                
                
                <input type="submit" class="botton" value="Отправить">
            </form>
        </div>
    </body>
</html>
