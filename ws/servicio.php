<?php
    require_once('lib/nusoap.php');
    require_once('funciones.php');
      
    $server = new nusoap_server();
	$server->configureWSDL("servicio", "urn:servicio");

    $server->register("calculadora",
        array("x" => "xsd:string","y" => "xsd:string","operacion" => "xsd:string"),
        array("return" => "xsd:string"),
        "urn:servicio",
        "urn:servicio#calculadora",
        "rpc",
        "encoded",
        "es una suma");
	

    $server->register("registrarPaciente",
        array("nombre" => "xsd:string","edad" => "xsd:string","peso" => "xsd:string","estatura" => "xsd:string",
              "resp1" => "xsd:string","resp2" => "xsd:string","resp3" => "xsd:string","recomendacion" => "xsd:string","imc" => "xsd:string"),
        array("return" => "xsd:string"),
        "urn:servicio",
        "urn:servicio#registrarPaciente",
        "rpc",
        "encoded",
        "registra un person con sus respuestas");

	
    $HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : '';
    $server->service($HTTP_RAW_POST_DATA);
?>