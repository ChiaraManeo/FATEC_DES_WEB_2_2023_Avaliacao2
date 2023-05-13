<?php
require_once 'DBconnect.php';
$objeto1 = new DBconnect(); 


?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registros Vestibular FATEC</title>
</head>
<body>
  <h1>Registros</h1>

  <div>
      <form method="post" action="user.php">
      <label for="nome">Nome:</label>
      <input type="text" name="nome" id="nome" required>

      <label for="rg">RG:</label>
      <input type="text" name="rg" id="rg" required>

      <label for="telefone">Telefone:</label>
      <input type="text" name="telefone" id="telefone" required>
      
      <label for="tipoensino">Tipo de ensino:</label>
      <input type="text"name="tipoensino" id="tipoensino" required>

      <button type="submit">Salvar</button>
    </form>
  
  <a href="registros.php"> ir para aba de registros</a>
  </div>
</body>
</html>
