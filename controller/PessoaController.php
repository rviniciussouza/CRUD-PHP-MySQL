<?php

require_once("../dao/PessoaDao.php");
require_once("../model/Pessoa.php");

class PessoaController {

    private $pessoaDao;

    public function __construct() {
        $this->pessoaDao = new PessoaDao();
    }


    public function salvar() {

        $pessoa = new Pessoa();
        $pessoa->setNome($_POST['nome']);
        $pessoa->setDataNascimento($_POST['data_nasc']);
        $pessoa->setCpf($_POST['cpf']);
        $pessoa->setOcupacao($_POST['ocupacao']);
        if($this->pessoaDao->salvar($pessoa)) {
            echo "<script>alert('Registro incluído com sucesso!');document.location='../view/cadastrar_pessoa.php'</script>";
        }else{
            echo "<script>alert('Erro ao gravar registro!');history.back()</script>";
        }
        
    }

    public function listar() {
        $row = $this->pessoaDao->getPessoas();
        foreach ($row as $value){
            echo "<tr>";
            echo "<th>".$value['id'] ."</th>";
            echo "<td>".$value['nome'] ."</td>";
            echo "<td>".$value['data_nascimento'] ."</td>";
            echo "<td>".$value['cpf'] ."</td>";
            echo "<td>".$value['ocupacao'] ."</td>";
            echo "<td><a class='btn btn-warning' href='editar_pessoa.php?id=".$value['id']."'>Editar</a>
                      <a class='btn btn-danger' href='../controller/PessoaController.php?action=excluir&id=".$value['id']."'>Excluir</a></td>";
            echo "</tr>";
        }
    }

    public function deletar($id) {
        $this->pessoaDao->deletar($id);
        echo "<script>alert('Registro deletado com sucesso!');document.location='../view/index.php'</script>";
    }

    public function getById($id) {
        $result = $this->pessoaDao->getById($id);
        return $result;
    }

    public function update() {

        $pessoa = new Pessoa();
        $pessoa->setId($_POST['id']);
        $pessoa->setNome($_POST['nome']);
        $pessoa->setDataNascimento($_POST['data_nasc']);
        $pessoa->setCpf($_POST['cpf']);
        $pessoa->setOcupacao($_POST['ocupacao']);
        if($this->pessoaDao->update($pessoa)) {
            echo "<script>alert('Registro editado com sucesso!');document.location='../view/index.php'</script>";
        }else{
            echo "<script>alert('Erro ao atualizar registro!');history.back()</script>";
        }
        
    }

}


$pessoaController = new PessoaController();

if(isset($_GET['action']) && $_GET['action'] == 'salvar') {
    $pessoaController->salvar();
}

else if(isset($_GET['action']) && $_GET['action'] == 'update') {
    $pessoaController->update();
}

else if(isset($_GET['action']) && $_GET['action'] == 'excluir') {
    $id = $_GET["id"];
    $pessoaController->deletar($id);
}

?>