
<html>
<head>
<meta charset="UTF-8">
</head>
<body>
<h1>link de github "https://github.com/juanpablo415/tarea.git " </h1>

    <h1>tabla </h1>
    <form action="mot.php"method="GET">
    <center>
    columna <input type="number" min="1"name="columna" required><br>
    fila<input type="number" min="1"name="fila" required ><br>
    multiplicador<input type="number" min="1"name="multiplicador" required><br>
       
        <input type="submit" value="crear tabla">
</center>

    </form>
    
<table width="100%" border="1">
  <?php

if(isset($_GET['multiplicador']))
{
    $m1 = $_GET['multiplicador'];
    $m2 = $_GET['fila'];
    $m3 = $_GET['columna'];

    $m4=0;
   
    for($i=1; $i<=$m2; $i++)
    { 
      
        echo "<tr>";
        
        
        for($j=1; $j<=$m3; $j++)
        { 
            $m4++;
            echo "<td>";
            for($k=1; $k<=$m1; $k++)
            { $m5=$m1;
               
  
                 
                $auxx=$k*$m4;
            echo "$m4 x $k=$auxx";
            
            echo "<br>";

            }
            
            
           
            
            echo "</td>";
        }
        echo "</tr>";
    }  
   
    
}

?>
  
</table>

        
</body>
</html>