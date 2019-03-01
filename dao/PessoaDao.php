<?php

require_once("../model/Banco.php");

class PessoaDao {

    private $mysqli;

    public function __construct() {   
        $this->mysqli = Banco::getInstance()->getConnection();
    }

    public function salvar($p) {

        $stmt = $this->mysqli->prepare("INSERT INTO Pessoa (nome, data_nascimento, cpf, ocupacao)
                                        VALUES (?,?,?,?)"); 
        
        if($stmt == FALSE) printf("Error: %s.\n", $this->mysqli->error);
        else {
            $nome = $p->getNome();
            $data_nascimento = $p->getDataNascimento();
            $cpf = $p->getCpf();
            $ocupacao = $p->getOcupacao();
            $stmt->bind_param('ssss', $nome, $data_nascimento, $cpf, $ocupacao);
            return $stmt->execute();
        }
    }

    public function update($p) {

        $stmt = $this->mysqli->prepare("UPDATE Pessoa SET nome = ?, data_nascimento = ? , cpf = ?, ocupacao = ?
                                        WHERE id = ?");
        
        if($stmt == FALSE) printf("Error: %s.\n", $this->mysqli->error);
        else {
            $nome = $p->getNome();
            $data_nascimento = $p->getDataNascimento();
            $cpf = $p->getCpf();
            $ocupacao = $p->getOcupacao();
            $id = $p->getId();
            echo $id . '';
            $stmt->bind_param('ssssi', $nome, $data_nascimento, $cpf, $ocupacao, $id);
            return $stmt->execute();
        }
    }

    public function getPessoas() {
        $query = $this->mysqli->query("SELECT * FROM Pessoa");
        while ($row = $query->fetch_assoc()) {
           $result[] = $row;
        }
        return $result;
    }

    public function deletar($id) {
        if($this->mysqli->query("DELETE FROM Pessoa WHERE id = ".$id.";") == TRUE) {
            return true;
        }
        else return false;
    }

    public function getById($id) {
        $query = $this->mysqli->query("SELECT * FROM Pessoa WHERE id = ".$id.";");
        if($query->num_rows == 0) return false;
        else return $query->fetch_assoc();
    }
}

?>