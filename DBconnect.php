<?php

class DBconnect {
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "vestibularfatec";
    private $conn;

    public function __construct() {
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);

        if ($this->conn->connect_error) {
            die("Falha na conexão com o banco de dados: " . $this->conn->connect_error);
        }
    }

    public function __destruct() {
        $this->conn->close();
    }

    public function inserir_registro($nome, $rg, $telefone, $tipoensino) {
        $sql = "INSERT INTO registros (nome, rg, telefone, tipoensino) VALUES ('$nome', '$rg', '$telefone', '$tipoensino')";

        if ($this->conn->query($sql) === TRUE) {
            echo "Candidato registrado com sucesso!";
        } else {
            echo "Erro ao registrar o candidato: " . $this->conn->error;
        }
    }

    public function mostrarInscritos($nome, $rg, $telefone, $tipoensino) {
        $sql = "SELECT * FROM registros";
        $registros = $this->conn->query($sql);

        if ($registros->num_rows > 0) {
            echo "<h2>Lista de Inscritos</h2>";
            echo "<table>";
            echo "<tr><th>ID</th><th>Nome</th><th>RG</th><th>Telefone</th><th>Tipo Ensino</th></tr>";

            while ($row = $registros->fetch_assoc()) {
                echo "<tr>";
                echo "<td>".$row['idregistro']."</td>";
                echo "<td>".$row['nome']."</td>";
                echo "<td>".$row['rg']."</td>";
                echo "<td>".$row['telefone']."</td>";
                echo "<td>".$row['tipoensino']."</td>";
                echo "<td><a href='excluir.php'".$row['idregistro']."'>Excluir</a></td>";
                echo "</tr>";
            }
            
            echo "</table>";
        } else {
            echo "Nenhum candidato encontrado.";
        }
    }

    public function edita_Registro($idregistro, $nome, $rg, $telefone, $tipoensino) {
        $sql = "UPDATE registros SET nome='$nome', rg='$rg', telefone='$telefone', tipoensino='$tipoensino' WHERE idregistro='$idregistro'";

        if ($this->conn->query($sql) === TRUE) {
            echo "Registro atualizado com sucesso!";
        } else {
            echo "Erro ao atualizar o registro: " . $this->conn->error;
        }
    }

    public function excluirRegistro($idregistro) {
        $sql = "DELETE FROM registros WHERE idregistro='$idregistro'";

        if ($this->conn->query($sql) === TRUE) {
            echo "Registro excluído com sucesso!";
        } else {
            echo "Erro ao excluir o Registro: " . $this->conn->error;
        }
    }
    
}