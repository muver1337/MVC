<div class="alr">
    <div class="left">
        <form method="post">
            <h6> Дисциплины: </h6>
            <select class="forms2" aria-label="Default select example">
                <?php
                foreach ($discipline as $dis) {
                    ?>
                    <option value="<?= $dis->id ?>"><?= $dis->discipline ?></option>
                <?php }
                ?>
            </select>
        </form>
        <div class="listwork">
            <h6>Сотрудники</h6>
            <div class="listback">
                <?php
                foreach ($discipline as $disciplinee) {
                    ?>
                    <option value="<?= $disciplinee->id ?>"><?= $disciplinee->name ?></option>
                <?php }
                ?>
            </div>
        </div>
    </div>
    <div class="right">
        <h6 class="h66"> Добавить дисциплину: </h6>
        <form action="<?php app()->route->getUrl('/discipline'); ?>" method="post">
            <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
            <label>Новая дисциплина <br><input class="podrazdelenie" type="text" name="discipline"></label> <button type="submit" class="buttonn">Добавить</button>
            <label for="division_id">Подразделение:</label><br>
                <select class="forms2" aria-label="Default select example" name="division_id">
                <?php
                foreach ($divisionn as $division) {
                    ?>
                    <option value="<?= $division->id ?>"><?= $division->name ?></option>
                <?php }
                ?>
            </select>
        </form>
    </div>
</div>

