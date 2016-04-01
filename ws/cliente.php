<?php

    require_once('lib/nusoap.php');
    require ('conexion/conexion.php');

   $cliente = new nusoap_client("http://eespe.com.mx/ws/servicio.php");
    $resultado = $cliente->call('calculadora', array('x' => '3', 'y' => 4, 'operacion' => 'multiplica'));
    echo $resultado;


echo "<h2>Request</h2>";
echo "<pre>" . htmlspecialchars($cliente->request, ENT_QUOTES) . "</pre>";
echo "<h2>Response</h2>";
echo "<pre>" . htmlspecialchars($cliente->response, ENT_QUOTES) . "</pre>";



 $cliente = new nusoap_client("http://eespe.com.mx/ws/servicio.php");
 $resultado = $cliente->call('registrarPaciente', array("nombre" => "victor","edad" => "35","peso" => "80","estatura" => "185","resp1" => "SI","resp2" => "NO","resp3" => "SI","recomendacion" => "Ta GORDO","imc" => "23.3"));
 echo $resultado;



echo "<h2>Request</h2>";
echo "<pre>" . htmlspecialchars($cliente->request, ENT_QUOTES) . "</pre>";
echo "<h2>Response</h2>";
echo "<pre>" . htmlspecialchars($cliente->response, ENT_QUOTES) . "</pre>";

	/*
	 require_once('lib/nusoap.php');
    $cliente = new nusoap_client("http://localhost/ws/servicio.php");
    $resultado = $cliente->call('calculadora', array('x' => '3', 'y' => 4, 'operacion' => 'multiplica'));
    echo $resultado;*/
?>