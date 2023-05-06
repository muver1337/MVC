<div class="center">
    <h1>Регистрация</h1>
    <div class="worker">
        <div class="forms3">
            <form action="<?php app()->route->getUrl('/worker'); ?>" method="post">
            <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>

            <label>Имя <input type="text" name="name"></label>
            <label>Фамилия <input type="text" name="family"></label><br>
            <label>Отчество <input type="text" name="middle"></label>
            <label>Пол <input type="text" name="gender"></label><br>
            <label>Дата рождения<input type="date" name="date"></label>
            <label>Адрес прописки<input type="text" name="addres"></label><br>
                <label for="disciplin_id">Дисциплина:</label><br>
                <select name="discipline_id">
                    <?php
                    foreach ($discipline as $disciplin) {
                        ?>
                        <option value="<?= $disciplin->id ?>"><?= $disciplin->discipline ?></option>
                    <?php }
                    ?>
                </select> <br>
                <label for="division_id">Подразделение:</label><br>
                <select name="division_id">
                    <?php
                    foreach ($divisionn as $divisi) {
                        ?>
                        <option value="<?= $divisi->id ?>"><?= $divisi->name ?></option>
                    <?php }
                    ?>
                </select>
                <button class="button">Зарегистрировать</button>
            </form>
        </div>
    </div>
</div>