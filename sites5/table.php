
<?php
session_start();
$server = $_SESSION['adres'];    // Адрес сервера
$username = $_SESSION['nik'];    // Имя пользователя
$password = $_SESSION['pass'];   // Пароль пользователя
$dbname = $_SESSION['name'];     // Имя базы данных

$conn = new mysqli($server, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Ошибка подключения к базе данных: " . $conn->connect_error);
}

$sql = "SELECT terms, discr FROM term";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  
    echo '
    <!DOCTYPE html>
    <html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Табличный вывод терминов</title>
        <link rel="stylesheet" href="styles/main.css"> <!-- Подключение внешнего CSS -->
    </head>
    <body>
    <header class="header">
        <div class="container">
            <nav class="main-menu">
                <a href="index.php">Назад</a>
                <a href="home.php" class="aut">Добавление записей</a>
            </nav>
        </div>
    </header>
    <h1>Таблица терминов</h1>
    <table>
        <tr>
            <th>Термин (картинка)</th>
            <th>Описание</th>
        </tr>
    ';


    while ($row = $result->fetch_assoc()) {
        $term = htmlspecialchars($row['terms']);
        $description = htmlspecialchars($row['discr']);
        $imagePath = 'images/' . $term . '.jpg'; 

        echo '<tr>';
        echo '<td>';

        if (file_exists($imagePath)) {
        
            echo "<img src='$imagePath' alt='$term' title='$term' class='term-image'>";
        } else {
         
            echo $term;
        }

        echo '</td>';
        echo "<td>$description</td>";
        echo '</tr>';
    }

    echo '
    </table>
    </body>
    </html>
    ';
} else {
    echo "Нет данных для отображения";
}

$conn->close();
?>