<?php
require_once('DBconnect.php');

$objeto1 = new DBconnect(); 


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $rg = $_POST["rg"];
    $telefone = $_POST["telefone"];
    $tipoensino = $_POST["tipoensino"];

    $objeto1->inserir_registro($nome, $rg, $telefone, $tipoensino);
    $objeto1-> mostrarInscritos($nome, $rg, $telefone, $tipoensino);
}


if (isset($_GET["action"])) {
    $action = $_GET["action"];

    if ($action == "excluir" && isset($_GET["idregistro"])) {
        $idregistro = $_GET["idregistro"];
        $objeto1->excluirRegistro($idregistro);
    }
}

if (isset($_GET["action"])) {
    $action = $_GET["action"];

    if ($action == "editar" && isset($_GET["idregistro"])) {
        $idregistro = $_GET["idregistro"];
        $objeto1->edita_Registro($idregistro);
    }
}





?>