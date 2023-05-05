<div class="lol">

<h3><?= app()->auth->user()->name ?? ''; ?></h3>
<?php
if (!app()->auth::check()):
    ?>
    <form class="forms"  method="post" >
        <h2 class="auth">Авторизация</h2>
        <h4><?= $message ?? ''; ?></h4>
        <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
        <label>Логин <br><input type="text" name="login" placeholder="Логин"></label>
        <label>Пароль <br><input type="password" name="password"></label>
        <button>Войти</button>
    </form>
</div>
<?php endif;