Instruções:

Para conseguir acessar o banco de dados, siga os passos a seguir:

1 - Abra o xampp e de start em apache e mysql.
2 - Abra o banco de dados de sua preferência crie um banco chamado "vestibularfatec" e cole o seguinte cód:
CREATE TABLE `registros` (
  `idregistro` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `rg` int(11) NOT NULL,
  `telefone` int(11) DEFAULT NULL,
  `tipoensino` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

Para ter acesso ao php, siga os passos:

1 - Abra o xampp e de start em apache e mysql.
2 - Salve a pasta do programa (pode ter o nome de sua escolha) na pasta c:>xampp>htdocs.
3 - Entre no servidor, e digite na barra de pesquisa: localhost/nomedapasta.
