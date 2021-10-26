
<html>
<head>
<meta charset="UTF-8">
</head>
<body>
    

    <h1>tabla </h1>
    <form action="mot.php"method="GET">
        <input type="number" min="1"name="cajanumero" required>
        <input type="submit" value="crear tabla">

    </form>
    <?php

    if(isset($_GET['cajanumero']))
    {
        $numeroingresado = $_GET['cajanumero'];
        echo "<tabla border='1'><br>";
        echo "<h3>tabla del $numeroingresado</h3>";
        for($i=1; $i<=12; $i++)
        {
            $valor = $i*$numeroingresado;
            echo "<tr>";
            echo "<td>$i x $numeroingresado</td>";
            echo "<td>$valor</td>";
            echo "</tr>";
        }
        echo "</table>";
    }

    ?>
</body>
</html>