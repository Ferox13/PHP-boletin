<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 3 - Numeros tolos</title>
    <link rel="stylesheet" href="./styles.css">
</head>

<body>
    <h1>Exercicio 3 - Números tolos</h1>
    <p>A aplicación debe pedir un número nun formulario, a continuación a aplicación ten que
        xerar tantos números aleatorios como se lle pediu ao usuario entre -100 e 100 e gardaraos
        nun array.
        A aplicación debe mostrar nunha táboa todos os números, pero na orde inversa ao que se
        introduciron.
        Os números teñen que mostrarse con varios estilos diferenciados seguindo as seguintes
        regras:
        • Números negativos: texto en vermello.
        • Números positivos: texto en verde.
        • Números pares con un tipo de letra.
        • Números impares con outro tipo de letra.
        • O fondo da cela da táboa ten que ir alternando entre un gris máis escuro e un gris
        máis claro..</p>
    <hr>
    <form method="get">
        <label for="numero">Introduce una número:</label>
        <input id="numero" name="numero" type="number" min="0" value="<?php echo $_GET["numero"] ?? 0; ?>">
        <button type="submit">Enviar</button>
    </form>

    <?php
    $numero;
    $arrayNums = [];
    if (isset($_GET["numero"])) {
        $numero = $_GET["numero"];

        function getClassByNum($num)
        {
            $clase = "";
            if ($num > 0) {
                $clase .= "positivo ";
            } elseif ($num < 0) {
                $clase .= "negativo ";
            }
            if ($num % 2 === 0) {
                $clase .= "par";
            } else {
                $clase .= "impar";
            }
            return $clase;//Elimina los espacios en blanco para no dar problemas con las clases css
        }


        for ($i = 0; $i < $numero; $i++) {
            $arrayNums[$i] = rand(-100, 100);
        }
        echo "<h2>Números aleatorios</h2>";
        echo "<table>";
        for ($i = count($arrayNums) - 1; $i >= 0; $i--) {
            echo "<tr>";
            $num = $arrayNums[$i];
            $clases = getClassByNum($num);
            echo "<td class='$clases'>$num</td>";
            echo "</tr>";
        }
        echo "</table>";
    }
    ?>


</body>

</html>