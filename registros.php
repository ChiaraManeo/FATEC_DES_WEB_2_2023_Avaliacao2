<?php
require_once('DBconnect.php');
$objeto1 = new DBconnect(); 
$nome = ["nome"];
$rg = ["rg"];
$telefone = ["telefone"];
$tipoensino = ["tipoensino"];

    $objeto1-> mostrarInscritos($nome, $rg, $telefone, $tipoensino);



?>