<?php

use Src\Auth\Auth;

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Main site</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="./public/css/style.css" rel="stylesheet" >
</head>
<body>
<header class="lol">
    <nav>
        <a class="hello" href="<?= app()->route->getUrl('/hello') ?>">Главная</a> &ensp;
        <?php
        if (!app()->auth::check()):
            ?>
            <a class="login" href="<?= app()->route->getUrl('/login') ?>">Войти</a> &emsp;
        <?php
        else:
            ?>
            <?php if (Auth::user()->role->name === 'Админ' && Auth::user()->role->name !== null): ?>
            <a class="reg" href="<?= app()->route->getUrl('/signup') ?>">Регистрация пользователя</a> &emsp;
            <?php endif; ?>

            <a class="work" href="<?= app()->route->getUrl('/worker') ?>">Добавление сотрудников</a> &emsp;
            <a class="dis" href="<?= app()->route->getUrl('/discipline') ?>">Дисциплины</a> &emsp;
            <a class="pod" href="<?= app()->route->getUrl('/division') ?>">Подразделение</a> &emsp;
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
