<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>tablas de calculo</title>
</head>
<body>
    
<center>
    <h1>tabla </h1>
    <form action="mot.php"method="GET">
        <input type="number" min="1"name="cajanumero" required>
        <input type="sumit" value="crear tabla">

    </form>
    <?php

    if(isset($_GET('cajanumero')))
    {
        $numeroingresado = $_GET['cajanumero'];
        echo "<tabla border='1'><br>";
        echo "<h3>tabla del $numeroingresado</h3>";
        for($i=1; $i<count($numeroingresado);>)
    }

    ?>
</center>
</body>
</html>