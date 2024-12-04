<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 1 - Táboa de multiplicar</title>
    <link rel="stylesheet" href="./styles.css">
</head>

<body>
    <h1>Exercicio 1 - Táboa de multiplicar</h1>
    <p>A páxina web pedirá un número mediante un formulario. Ao enviar a información do
        formulario, deberase mostrar a táboa de multiplicar do número enviado.</p>
    <hr>
    <form method="post">
        <label for="numero">Introduce un número:</label>
        <input type="number" id="numero" name="numero" value="<?php echo $_POST['numero'] ?? ''; ?>">
        <button type="submit">Crear tabla</button>
    </form>
    <?php
    if (isset($_POST['numero']) && is_numeric($_POST['numero'])) {
        $num = $_POST['numero'];
        echo "<h2>Tabla de multiplicar de $num</h2>";
        echo "<table>";
        for ($i = 0; $i <= 10; $i++) {
            echo "<tr>";
            echo "<td>$num x $i</td>";
            echo "<td>" . ($num * $i) . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    }
    ?>
</body>

</html>