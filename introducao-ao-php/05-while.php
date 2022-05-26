<select>

    <option selected>-- selecione o ano --</option>
    <?php
        $ano = 2022;
        while ($ano >= 1900) {
            echo "<option>{$ano}</option>";
            $ano--;
        }
    ?>
</select>

<select>
    <option selected>-- selecione o mês --</option>
    <?php
    for ($i = 1; $i < 13; $i++) {
        echo "<option>{$i}</option>";
    }
    ?>
</select>

<select>
    <option selected>-- selecione o dia --</option>
    <?php
    for ($i = 1; $i < 32; $i++) {
        echo "<option>{$i}</option>";
    }
    ?>
</select>