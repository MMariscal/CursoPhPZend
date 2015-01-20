<?php



$filas = 3;
$columnas = 4;

echo "Tabla de multiplicar";
echo"<table border=1>";

for ($i=0;$i<=$filas;$i++){
    echo "<tr>";
    for($j=0;$j<=$columnas;$j++){
        if ($i==0){
            echo "<td>";
            echo $j;
            echo "</td>";
        }else if ($j==0){
            echo "<td>";
            echo $i;
            echo "</td>";
        }
        else {
            echo "<td>";
            echo $i*$j;
            echo "</td>";
        }
    }
    echo "</tr>";
}
echo "</table>";



