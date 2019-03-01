<?php require_once("../controller/PessoaController.php") ?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Editar Pessoa</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <?php $pessoa = $pessoaController->getById($_GET['id']); ?>

    <form method="post" action="../controller/PessoaController.php?action=update" id="form">
        <input type="hidden" value="<?php echo $pessoa['id'] ?>" name="id" required />
        <input type="text" value="<?php echo $pessoa['nome'] ?>" name="nome" required />
        <input type="text" value="<?php echo $pessoa['cpf'] ?>" name="cpf" required />
        <input type="date" value="<?php echo $pessoa['data_nasc'] ?>" name="data_nasc" required />
        <input type="text" value="<?php echo $pessoa['ocupacao'] ?>" name="ocupacao" required />

        <button type="submit" value="Cadastrar">Editar</button>
    </form>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>