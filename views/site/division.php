<div class="alr">
    <div class="left">
        <form method="post">
            <h6> Подразделения: </h6>
            <select aria-label="Default select example">
                <?php
                foreach ($division as $div) {
                    ?>
                    <option value="<?= $div->id ?>"><?= $div->name; ?></option>
                <?php }
                ?>
            </select>
        </form>
        <div class="listwork">
            <p>Сотрудники</p>
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
        <h6 class="newdiv"> Добавить подразделение: </h6>
        <div>
            <div>
                <form action="<?php app()->route->getUrl('/division'); ?>" method="post">
                    <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
                    <label>Название подразделения <br><input class="podrazdelenie" type="text" name="name"></label>
                    <button type="submit" class="buttonn">Добавить</button>
                </form>
                <p class="rabotay">Дисциплины:</p><br>
                <div class="listback2">
                    <?php
                    foreach ($discipline as $discip) {
                        ?>
                        <option value="<?= $discip->id ?>"><?= $discip->discipline ?></option>
                    <?php }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

