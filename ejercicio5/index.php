<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 5 - Caixa forte</title>
    <link rel="stylesheet" href="./styles.css">
</head>

<body>
    <h1>Exercicio 5 - Caixa forte</h1>
    <p>Realiza unha aplicación para o control de acceso a unha caixa forte.
        A combinación secreta está composta de seis cifras e tan só pode haber catro intentos para
        abrir a caixa, esta cominación debe introducirse nun formulario e non se poderá ver en
        ningunha circunstancia.
        Se o usuario acerta a combinación secreta, enviarase unha mensaxe de éxito, se non, unha
        mensaxe que diga “tente de novo” (ou algo do estilo). No caso de que se esgoten tódolos
        intentos débese inhabilitar o envío de máis intentos.
        Neste exercicio, cada vez que se envíe a información do formulario deberase deixar o
        campo do formulario vacío.
        As mensaxes de erro e éxito deberán mostrarse con estilos distintos que axuden a
        transmitir a información correspondente.</p>
    <hr>
    <?php
    $diableBtn = false;
    $contador = 4;
    $password = "123456";
    $win=false;
    if (isset($_POST["numero"]) && is_numeric($_POST["numero"])) {
        $numero = $_POST["numero"];
        $contador = $_POST["cont"];

        if ($password !== $numero) {
            $contador--;

            if ($contador <= 0) {
                $diableBtn = true;
            }
        } else if($numero===$password) {
            $win=true;
            $diableBtn = true;
            $contador = 4;
        }
    }
    ?>
    <form method="post">
        <label for="numero">Introduce una constraseña de 6 dígitos:</label>
        <input id="numero" name="numero" />
        <input id="cont" name="cont" class="contador" value="<?php echo $contador ?>"></input>
        <span <?php if ($contador === 4) echo 'hidden' ?>>
            <?php
            echo "Has fallado </br>";
            echo "Intentos restasntes:$contador";
            echo "</br>";
            if ($diableBtn) echo "Intentos agotados";
            ?>
        </span>
        <span class="verde" <?php if (!$win ) echo 'hidden' ?>>Contraseña correcta </span>
        <button type="submit" <?php if ($diableBtn)
                                    echo 'disabled'; ?>>Enviar</button>
    </form>


</body>

</html>