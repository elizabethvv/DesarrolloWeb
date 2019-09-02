<?php
   $fila=$_POST["fila"];
   $columna=$_POST["columna"];
   $altura=$_POST["altura"];
   $ancho=$_POST["ancho"];
   echo "<table border='2' width=".$ancho." heigth=".$altura." >";
   
   for($i=1; $i<=$fila+1; $i++){
       echo "<tr>";
       
       for($j=1; $j<=$columna+1; $j++){
           echo "<td>";
           if($i==1&&$j==1){
               echo "x";
           }else{
               if($j==1){
                   echo $i-1;
               }else{
                    if($i==1){
                         echo $j-1;
                    }else{
                       echo ($i-1)*($j-1);
                   }
               }
               
           }

           echo"</td>";
       }
       echo "</tr>";
   }

    echo "</table>";

?>