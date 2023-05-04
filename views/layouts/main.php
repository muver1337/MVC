<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Main site</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="/public/css/style.css" rel="stylesheet" >
</head>
<body>
<header class="lol">
    <nav>
        <a class="hello" href="<?= app()->route->getUrl('/hello') ?>">Главная</a>
        <?php
        if (!app()->auth::check()):
            ?>
            <a class="login" href="<?= app()->route->getUrl('/login') ?>">Войти</a>
        <?php
        else:
            ?>
            <a class="reg" href="<?= app()->route->getUrl('/signup') ?>">Регистрация пользователя</a>
            <a class="work" href="<?= app()->route->getUrl('/worker') ?>">Добавление сотрудников</a>
            <a class="dis" href="<?= app()->route->getUrl('/discipline') ?>">Дисциплины</a>
            <a class="pod" href="<?= app()->route->getUrl('/division') ?>">Подразделение</a>
            <a class="logout" href="<?= app()->route->getUrl('/logout') ?>">Выход (<?= app()->auth::user()->name ?>)</a>
        <?php
        endif;
        ?>
    </nav>
</header>
<main>
    <?= $content ?? '' ?>
</main>

</body>
</html>
