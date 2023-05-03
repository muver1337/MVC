<div class="lol">
<h2>Регистрация нового пользователя</h2>
<form method="post">
    <label>Логин <input type="text" name="login"></label>
    <h6> Роль: </h6>
    <select class="form-select" aria-label="Default select example" name="role">
        <?php
        foreach ($roles as $role) {
            ?>
            <option value="<?= $role->id ?>"><?= $role->name ?></option>
            <?php
        }
        ?>
    </select>
    <label>Пароль <input type="password" name="password"></label>
    <button>Зарегистрироваться</button>
</form>
</div>