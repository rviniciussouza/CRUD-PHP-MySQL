<?php

class Pessoa {

    private $id;
    private $nome;
    private $data_nascimento;
    private $cpf;
    private $ocupacao;

    public function setId($id) {
        $this->id = $id;
    } 

    public function getId() {
        return $this->id;
    }


    public function setNome($nome) {
        $this->nome = $nome;
    } 

    public function getNome() {
        return $this->nome;
    }

    public function setDataNascimento($data_nascimento) {
        $this->data_nascimento = $data_nascimento;
    } 

    public function getDataNascimento() {
        return $this->data_nascimento;
    }

    public function setCpf($cpf) {
        $this->cpf = $cpf;
    } 

    public function getCpf() {
        return $this->cpf;
    }

    public function setOcupacao($ocupacao) {
        $this->ocupacao = $ocupacao;
    } 

    public function getOcupacao() {
        return $this->ocupacao;
    }
}

?>