<div class="lol">
<form class="forms" method="post">
    <label>Логин <input type="text" name="login"></label>
    <h6> Роль: </h6>
    <select class="form-select" aria-label="Default select example" name="role_id">
        <?php
        foreach ($roles as $role) {
            ?>
            <option class="dis" value="<?= $role->id ?>"><?= $role->name ?></option>
            <?php }
        ?>
    </select>
    <label>Пароль <input type="password" name="password"></label>
    <button>Зарегистрироваться</button>
</form>
</div>