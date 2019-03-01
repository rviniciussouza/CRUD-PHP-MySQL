<!DOCTYPE HTML>
<html>

<head>
    <title>Cdastrar Pessoa</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <div style="width: 500px" >

    <form method="post" action="../controller/PessoaController.php?action=salvar" id="form">

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputNome">Nome</label>
                <input type="text" class="form-control" name="nome" id="inputNome" placeholder="Nome" required>
            </div>
            <div class="form-group col-md-6">
                <label for="inputCpf">CPF</label>
                <input type="text" class="form-control" id="inputCpf" name="cpf" required>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputDataNasc">Data de nascimento</label>
                <input type="date" class="form-control" id="inputDataNasc" name="data_nasc" required>
            </div>
            <div class="form-group col-md-6">
                <label for="inputOcupacap">Ocupação</label>
                <input type="text" class="form-control" id="inputOcupacap" name="ocupacao" required>
            </div>
        </div>

        <button type="submit" class="btn btn-primary" >Cadastrar</button>    
    </form>

    </div>

</body>

</html> 