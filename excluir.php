<?php
require_once('DBconnect.php');
$objeto1 = new DBconnect(); 

if (isset($_GET["action"])) {
    $action = $_GET["action"];

    if ($action == "excluir" && isset($_GET["idregistro"])) {
        $idregistro = $_GET["idregistro"];
        $objeto1->excluirRegistro($idregistro);
    }
}



?>