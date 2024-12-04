<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 4 - Números primos</title>
    <link rel="stylesheet" href="./styles.css">
</head>

<body>
    <h1>Exercicio 4 - Números primos</h1>
    <p>A aplicación debe pedir por pantalla dous números.
        Ao enviar a información, deberemos mostrar todos os números primos que están entre os
        dous número que se introduciron.</p>
    <hr>
    <form method="get">
        <label for="numero">Introduce una número:</label>
        <input id="numero1" name="numero1" type="number" value="<?php echo $_GET["numero1"] ?? 0; ?>">
        <input id="numero2" name="numero2" type="number" value="<?php echo $_GET["numero2"] ?? 0; ?>">
        <button type="submit">Enviar</button>
    </form>
    <?php
    if (isset($_GET["numero1"], $_GET["numero2"]) && (is_numeric($_GET["numero1"]) && is_numeric($_GET["numero1"]))) {
        $numero1 = $_GET["numero1"];
        $numero2 = $_GET["numero2"];
        for ($i = $numero1; $i <= $numero2; $i++) {
            $contador = 0;
            for ($j = 1; $j <= $i; $j++) {
                if ($i % $j === 0) {
                    $contador++;
                }
            }
            if ($contador === 2 && $i != 1) {
                echo "<span>$i</span>";
            }
        }
    }
    ?>
</body>

</html> 