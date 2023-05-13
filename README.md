<h1> Instrções: </h1>
<br>
Para conseguir acessar o banco de dados, siga os passos a seguir:
<br>

1 - Abra o xampp e de start em apache e mysql. <br>
2 - Abra o banco de dados de sua preferência crie um banco chamado "vestibularfatec" e cole o seguinte cód: <br>
<br>
CREATE TABLE `registros` ( <br>
  `idregistro` int(11) NOT NULL, <br>
  `nome` varchar(255) NOT NULL, <br>
  `rg` int(11) NOT NULL, <br>
  `telefone` int(11) DEFAULT NULL, <br>
  `tipoensino` varchar(255) NOT NULL <br>
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;<br> 
<br>
Para ter acesso ao php, siga os passos:

1 - Abra o xampp e de start em apache e mysql.<br>
2 - Salve a pasta do programa (pode ter o nome de sua escolha) na pasta c:>xampp>htdocs.<br>
3 - Entre no servidor, e digite na barra de pesquisa: localhost/nomedapasta.
