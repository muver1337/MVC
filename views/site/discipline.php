
<form class="forms2" method="post">
     <h6> Дисциплины: </h6>
    <select aria-label="Default select example">
    <?php
    foreach ($discipline as $dis) {
        ?>
        <option value="<?= $dis->discipline ?>"><?= $dis->discipline ?></option>
    <?php }
    ?>
    </select>
</form>


