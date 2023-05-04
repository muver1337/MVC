
<form class="forms" method="post">
    <h6> Подразделения: </h6>
    <select aria-label="Default select example">
        <?php
        foreach ($division as $div) {
            ?>
            <option value="<?= $div->division ?>"><?= $div->division ?></option>
        <?php }
        ?>
    </select>
</form>


