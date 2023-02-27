<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Домашняя работа</title>
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <header>
        <div class="header-div wrapper__header">
            <img src="../img/poli.png" alt="Логотип" class="logo">
            <span class="text-header__position">Домашняя работа: Feedback Form</span>
        </div>
    </header>
    <main class="wrapper__main">
        <h1 class="hidden">PHP</h1>
        <textarea rows="18" cols="50">
        <?php
        $url = "http://www.example.com";
        print_r(get_headers($url));
        ?>
        </textarea>
        <p class="a__p"><a href="./index.html" class="a">Первая страница</a></p>
    </main>
    <footer>
        <div class="wrapper__footer">
            <p class="footer__text">Изучаем PHP</p>
        </div>
    </footer>
</body>

</html>