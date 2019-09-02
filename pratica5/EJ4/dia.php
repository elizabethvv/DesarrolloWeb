<?php
    $numero=$_GET["numero"];
    if($numero>=1&&$numero<=7){
        switch($numero){
            case 1:
            echo "<select name='' id=''>
            <option value='lunes'>".lunes."</option>
            </select>";
            break;
            case 2:
            echo "<select name='' id=''>
            <option value='lunes'>".martes."</option>
            </select>";
            break;
            case 3:
            echo "<select name='' id=''>
            <option value='lunes'>".miercoles."</option>
            </select>";
            break;
            case 4:
            echo "<select name='' id=''>
            <option value='lunes'>".jueves."</option>
            </select>";
            break;
            case 5:
            echo "<select name='' id=''>
            <option value='lunes'>".viernes."</option>
            </select>";
            break;
            case 6:
            echo "<select name='' id=''>
            <option value='lunes'>".sabado."</option>
            </select>";
            break;
            case 7:
            echo "<select name='' id=''>
            <option value='lunes'>".domingo."</option>
            </select>";
            break;
        }
    }else{
        echo "valores fuera de rango";
    }
    
    
?>