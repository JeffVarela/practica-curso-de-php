<?php

if ($_POST) {
    $valorA = $_POST['valorA'];
    $valorB = $_POST['valorB'];

    //suma
    $suma = $valorA+$valorB;
    //resta
    $resta = $valorA-$valorB;
    //multiplicacón
    $multiplicacion = $valorA*$valorB;
    //divición
    $divicion = $valorA/$valorB;

    echo "<br/>".$suma;
    echo "<br/>".$resta;
    echo "<br/>".$multiplicacion;
    echo "<br/>".$divicion;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Aritméticos</title>
</head>
<body>
    <form action="ejercicio8.php" method="post">
        valorA:
        <input type="text" name="valorA" id="">
        <br>
        valorB:
        <input type="text" name="valorB" id="">
        <br>
        <input type="submit" value="calcular">
    </form>
</body>
</html>