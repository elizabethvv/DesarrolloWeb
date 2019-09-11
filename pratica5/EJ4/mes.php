<?php
    $numero=$_GET["numero"];
    if($numero>=1&&$numero<=7){
        switch($numero){
            case 1:
            echo "<select name='' id=''>
            <option value='lunes'>".Enero."</option>
            </select>";
            break;
            case 2:
            echo "<select name='' id=''>
            <option value='lunes'>".Febrero."</option>
            </select>";
            break;
            case 3:
            echo "<select name='' id=''>
            <option value='lunes'>".Marzo."</option>
            </select>";
            break;
            case 4:
            echo "<select name='' id=''>
            <option value='lunes'>".Abril."</option>
            </select>";
            break;
            case 5:
            echo "<select name='' id=''>
            <option value='lunes'>".Mayo."</option>
            </select>";
            break;
            case 6:
            echo "<select name='' id=''>
            <option value='lunes'>".Junio."</option>
            </select>";
            break;
            case 7:
            echo "<select name='' id=''>
            <option value='lunes'>".julio."</option>
            </select>";
            break;
            case 7:
            echo "<select name='' id=''>
            <option value='lunes'>".agosto."</option>
            </select>";
            break;
            case 7:
            echo "<select name='' id=''>
            <option value='lunes'>".septiembre."</option>
            </select>";
            break;
            case 7:
            echo "<select name='' id=''>
            <option value='lunes'>".octubre."</option>
            </select>";
            break;
            case 7:
            echo "<select name='' id=''>
            <option value='lunes'>".noviembre."</option>
            </select>";
            break;
            case 7:
            echo "<select name='' id=''>
            <option value='lunes'>".diciembre."</option>
            </select>";
            break;
        }
    }else{
        echo "valores fuera de rango";
    }
    
    
?>