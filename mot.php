
<html>
<head>
<meta charset="UTF-8">
</head>
<body>
    

    <h1>tabla </h1>
    <form action="mot.php"method="GET">
        <input type="number" min="1"name="columna" required>
        <input type="number" min="1"name="fila" required>
        <input type="number" min="1"name="multiplicador" required>
        <input type="submit" value="crear tabla">

    </form>
    
<table width="100%" border="1">
  <tr>
  <?php

if(isset($_GET['multiplicador']))
{
    $m1 = $_GET['multiplicador'];
    $m2 = $_GET['fila'];
    $m3 = $_GET['columna'];

    echo "<tabla border='1'><br>";
    echo "<h3>tabla del $m1</h3>";

    for($i=1; $i<=$m2; $i++)
    {
        for($j=1; $j<=$m3; $j++)
        {
            echo "<td>";
            $auxx=$i*$j;
            echo "$i x $j=$auxx";
            echo "<br>";
            echo "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}

?>
    <td>

    </td>
    
  </tr>
  
</table>

        
</body>
</html>