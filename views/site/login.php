<div class="lol">

<h3><?= app()->auth->user()->name ?? ''; ?></h3>
<?php
if (!app()->auth::check()):
    ?>
    <form class="forms"  method="post">
        <h2 class="auth">Авторизация</h2>
        <h4><?= $message ?? ''; ?></h4>
        <label>Логин <br><input type="text" name="login"></label>
        <label>Пароль <br><input type="password" name="password"></label>
        <button>Войти</button>
    </form>
</div>
<?php endif;