<div class="alr">
    <div class="left">
        <form method="post">
            <h6> Подразделения: </h6>
            <select aria-label="Default select example">
                <?php
                foreach ($division as $div) {
                    ?>
                    <option value="<?= $div->division ?>"><?= $div->discipline ?></option>
                <?php }
                ?>
            </select>
        </form>
        <div class="listwork">
            <p>Сотрудники</p>
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
        <h6 class="newdiv"> Добавить подразделение: </h6>
        <div>
            <div>
            <label>Название подразделения <br><input type="text" name="newdiv"></label> <button class="buttonn">Добавить</button>
                <p>Дисциплины</p>
                <div class="listback2">
                    <?php
                    foreach ($worker as $wor) {
                        ?>
                        <li value="<?= $wor->id ?>"><?= $wor->discipline_id ?></li>
                    <?php }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

