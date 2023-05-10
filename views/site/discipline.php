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
            <form action="<?php app()->route->getUrl('/discipline'); ?>" method="post" class="form-wrap">
                <input type="hidden" name="type" value="search">
                <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
                <input id="title-search-input" type="text" name="name" value="" class="search-form @error('s') is-invalid @enderror" required placeholder="Поиск">
                <button type="submit" class="search-btn"></button>
            </form>
            <div class="listback">

                <?php
                foreach ($worker as $worke) {
                    ?>
                    <option value="<?= $worke->id ?>"><?= $worke->family. ' '.$worke->name. ' '. $worke->middle. '  ' .$worke->date ?></option>
                <?php }
                ?>
            </div>
        </div>
    </div>
    <div class="right">
        <h6 class="h66"> Добавить дисциплину: </h6>
        <form action="<?php app()->route->getUrl('/discipline'); ?>" method="post">
            <input type="hidden" name="type" value="add">
            <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
            <label>Новая дисциплина <br><input class="podrazdelenie" type="text" name="discipline"></label> <button type="submit" class="buttonn">Добавить</button>
            <label for="division_id">Подразделение:</label><br>
                <select class="forms5" aria-label="Default select example" name="division_id">
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

