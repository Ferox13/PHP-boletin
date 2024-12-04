<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 2 - Diccionario</title>
    <link rel="stylesheet" href="./styles.css">
</head>

<body>
    <h1>Exercicio 2 - Diccionario</h1>
    <p>La aplicación será un diccionario de gallego a inglés que usará un array asociativo con al menos 50 palabras. La
        página web tendrá un formulario donde el usuario podrá introducir una palabra en gallego y, al enviarla,
        mostrará la traducción al inglés si existe en el diccionario. También permitirá compartir la traducción mediante
        una URL específica para cada palabra, de manera que otra persona pueda ver la misma traducción al abrir el
        enlace. Si el usuario introduce una palabra que no está en el diccionario, la página le avisará.</p>
    <hr>
    <?php
    $traduccion = "";
    $nocontent = "La palabra no está en el diccionario";
    $dicionario = [
        "casa" => "house",
        "escola" => "school",
        "xardín" => "garden",
        "cidade" => "city",
        "aldea" => "village",
        "pobo" => "town",
        "estrada" => "road",
        "rúa" => "street",
        "ponte" => "bridge",
        "igrexa" => "church",
        "biblioteca" => "library",
        "mercado" => "market",
        "tenda" => "store",
        "hospital" => "hospital",
        "parque" => "park",
        "museo" => "museum",
        "cine" => "cinema",
        "teatro" => "theater",
        "restaurante" => "restaurant",
        "hotel" => "hotel",
        "cociña" => "kitchen",
        "sala" => "living room",
        "cuarto" => "bedroom",
        "baño" => "bathroom",
        "xanela" => "window",
        "porta" => "door",
        "mesa" => "table",
        "cadeira" => "chair",
        "sofá" => "sofa",
        "luz" => "light",
        "libraría" => "bookcase",
        "espello" => "mirror",
        "cadro" => "painting",
        "alfombra" => "carpet",
        "escaleira" => "staircase",
        "teléfono" => "phone",
        "computadora" => "computer",
        "papel" => "paper",
        "lápis" => "pencil",
        "caderno" => "notebook",
        "bolígrafo" => "pen",
        "reloxo" => "clock",
        "bicicleta" => "bicycle",
        "tren" => "train",
        "avión" => "plane",
        "barco" => "boat",
        "coche" => "car",
        "motocicleta" => "motorcycle",
        "camión" => "truck",
        "taxi" => "taxi",
        "autobús" => "bus"
    ];

    if (isset($_GET["palabra"])) {
        $palabra = $_GET["palabra"];
        function buscarDiccionario($dicionario, $palabra)
        {
            return $dicionario[$palabra] ?? "La palabra no está en el diccionario";
        }
        $traduccion = buscarDiccionario($dicionario, strtolower($palabra));
    }
    ?>
    <form method="get">
        <label for="palabra">Introduce una palabra:</label>
        <input id="palabra" name="palabra" value="<?php echo $_GET["palabra"] ?? ""; ?>">
        <button type="submit">Buscar palabra</button>
        <label for="traduccion">Traducción</label>
        <input id="traduccion" name="traduccion" disabled
            value="<?php echo ($traduccion != $nocontent) ? $traduccion : ''; ?>">
        <span <?php if ($traduccion !== $nocontent) echo 'hidden' ?>>La palabra no está en el diccionario</span>

    </form>


</body>

</html>