<?php

$destino = "toni.ramos@tecsup.edu.pe";
//Esto es al correo que se enviarÃ¡ el mensaje

$nombre = $_POST['nombre']; 


$empresa = $_POST['empresa'];
$ruc = $_POST['ruc'];


$email = $_POST['email'];
$telefono = $_POST['telefono'];


$tipo = $_POST['tipo'];
$lugar = $_POST['lugar'];


$potencia = $_POST['potencia'];


$motivo = $_POST['motivo'];


$mensaje = $_POST['mensaje'];



///Mensaje que para el correo
$header = "Enviado desde formulario de contacto en La pagina Web de Electromatic";

$mensajeCompleto = 
                    "\n Nombre: " . $nombre .
                        "\n" . "Empresa :" . $empresa .
                        "\n" . "RUC :" . $ruc .
                        "\n" . "Email: " . $email .
                        "\n" . "Télefono :" . $telefono .
                        "\n" . "Tipo cliente: " . $tipo .
                        "\n" . "Lugar de la instalacion :" . $lugar .
                        "\n" . "Potencia del equipo :" . $potencia .
                        "\n" . "Necesita: " . $motivo .
                        "\n". "Mensaje :" . $mensaje;

mail($destino, $asunto, $mensajeCompleto, $header);
header('Location: contacto.blade.php');

