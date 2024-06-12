<?php
include_once("../Model/usuarioModel.php"); /**incluye el archivo usuarioModel.php */ 

if(isset($_POST["btnProcesar"])) /**Si alguien presiona el btnProcesar */ /**Que funcion tiene el isset */
{
    /*va  al modelo* --> va a la base de datos --> true / */
    RegistrarUsuario();

    header("location: ../View/login.php");
}

// }
// if(isset($_POST["btnPagar"])) /**Si alguien presiona el btnPagar */ /**Que funcion tiene el isset */
// {

// }
// if(isset($_POST["btnEnviarCorreo"])) /**Si alguien presiona el btnEnviarCorreo  */ /**Que funcion tiene el isset */
// {
// }

?>