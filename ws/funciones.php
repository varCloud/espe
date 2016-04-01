<?php

include ('conexion/conexion.php');


    function calculadora($x, $y, $operacion){
        if($operacion == "suma")
            return $x + $y;
        else if($operacion == "suma")
            return $x + $y;
        else if($operacion == "resta")
            return $x - $y;
        else if($operacion == "multiplica")
            return $x * $y;
        else if($operacion == "divide")
            return $x / $y;
        return 0;

    }


    function registrarPaciente($nombre, $edad, $peso, $estatura, $resp1, $resp2, $resp3 ,$recomendacion, $imc)
    {
        $db = new MySQL();
        $sql='INSERT INTO Respuestas  values("","'.$nombre.'",'.$edad.','.$peso.','.$estatura.',"'.$resp1.'","'.$resp2.'","'.$resp3.'",'.$imc.' ,"'.$recomendacion.'")';
        //    echo $sql;
        $consulta = $db->consulta($sql);

     return  "1";

    
    }

    

?>