<html>
    <head>
        <meta charset="UTF-8">
        <title>Todas as Perguntas</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="css/styles.css" />
        <link rel="icon" href="imagens/favicon.ico" type="imagens/x-icon" />
    </head>
    <body>
    <center>
        <nav class="navbar navbar-inverse">
            <ul class="nav navbar-nav">
                <li><a href="cadastrarPergunta.php">Cadastrar Perguntas</a></li>
                <li class="active"><a href="#">Todas as Perguntas</a></li>
                <li><a href="controleRespostas.php">Controle de Respostas</a></li>
                <li><a href="usuariosCadastrados.php">Usuários Cadastrados</a></li>
                <li><a href="cadastrarAdmin.php">Cadastrar Administrador</a></li>
                <li><a href="processamento/logout.php">Sair</a></li>
            </ul>
        </nav>
    </center>
    <?php
    session_start();
    if (isset($_SESSION['mensagem_editarPergunta'])) {
        echo "<center><p class='alert-successEdicaoPergunta'>" . $_SESSION['mensagem_editarPergunta'] . "</p></center>";
        unset($_SESSION['mensagem_editarPergunta']);
    }
    ?>
    <?php
    if (isset($_SESSION['mensagem_deletarPergunta'])) {
        echo "<center><p class='alert-dangerPergunta'>" . $_SESSION['mensagem_deletarPergunta'] . "</p></center>";
        unset($_SESSION['mensagem_deletarPergunta']);
    }
    ?>
    <?php
    include 'processamento/conectar.php';
    $sql = "SELECT * FROM perguntas ORDER BY datainclusao";
    $con = $mysqli->query($sql) or die($mysqli->error);
    ?>
    <table style="margin-top: 50px;" class="table table-hover">
        <tr class="warning">
            <td><h4><b>Data da Inclusão<b/></h4></td>
            <td><h4><b>Data Final<b/></h4></td>
            <td><h4><b>Título<b/></h4></td>
            <td style="width: 63%;"><h4><b>Descrição<b/></h4></td>
            <td></td>
            <td></td>
            <td hidden="true"><h4><b>id</b></h4></td>
        </tr>
        <?php while ($dado = $con->fetch_array()) { ?> 
            <tr class="info">
                <td> <?php echo date('d/m/Y', strtotime($dado["datainclusao"])) ?> </td>
                <td> <?php echo date('d/m/Y', strtotime($dado["datafinal"])) ?> </td>
                <td> <?php echo $dado["titulo"] ?> </td>
                <td> <?php echo $dado["descricao"] ?> </td>
                <td hidden="true"> <?php echo $dado["id"] ?> </td>
                <td><a href="edicaoPergunta.php?datainclusao=<?= $dado['datainclusao'] ?>&datafinal=<?= $dado['datafinal'] ?>&titulo=<?= $dado['titulo'] ?>&descricao=<?= $dado['descricao'] ?>&id=<?= $dado['id'] ?>" class="btn btn-warning">Editar</a></td>
                <td><a href="processamento/deletarPergunta.php?id=<?= $dado['id'] ?>" class="btn btn-danger">Deletar</a></td>
            </tr> 
        <?php } ?>
    </table>
</body>
</html>