<div class="alr">
    <div class="left">
        <form method="post">
            <h6> Дисциплины: </h6>
            <select class="forms2" aria-label="Default select example">
                <?php
                foreach ($discipline as $dis) {
                    ?>
                    <option value="<?= $dis->discipline ?>"><?= $dis->discipline ?></option>
                <?php }
                ?>
            </select>
        </form>
        <div class="listwork">
            <h6>Сотрудники</h6>
            <div class="listback">
                <?php
                foreach ($worker as $wor) {
                    ?>
                    <li value="<?= $wor->id ?>"><?= $wor->discipline_id ?></li>
                <?php }
                ?>
            </div>
        </div>
    </div>
    <div class="right">
        <h6 class="h66"> Добавить дисциплину: </h6>
        <label>Новая дисциплина <br><input type="text" name="newdis"></label>
        <label>Подразделение <br><input type="text" name="div"></label>
        <button>Войти</button>
    </div>
</div>

