<html>
    <head>
        <meta charset="UTF-8">
        <title>Usuários Cadastrados</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="css/styles.css" />
        <link rel="icon" href="imagens/favicon.ico" type="imagens/x-icon" />
    </head>
    <body>
    <center>
        <nav class="navbar navbar-inverse">
            <ul class="nav navbar-nav">
                <li><a href="cadastrarPergunta.php">Cadastrar Perguntas</a></li>
                <li><a href="todasPerguntas.php">Todas as Perguntas</a></li>
                <li><a href="controleRespostas.php">Controle de Respostas</a></li>
                <li class="active"><a href="#">Usuários Cadastrados</a></li>
                <li><a href="cadastrarAdmin.php">Cadastrar Administrador</a></li>
                <li><a href="processamento/logout.php">Sair</a></li>
            </ul>
        </nav>
    </center>
    <?php
    session_start();
    if (isset($_SESSION['mensagem_editarUsuario'])) {
        echo "<center><p class='alert-successEdicaoPergunta'>" . $_SESSION['mensagem_editarUsuario'] . "</p></center>";
        unset($_SESSION['mensagem_editarUsuario']);
    }
    ?>
    <?php
    if (isset($_SESSION['mensagem_deletarUsuario'])) {
        echo "<center><p class='alert-dangerPergunta'>" . $_SESSION['mensagem_deletarUsuario'] . "</p></center>";
        unset($_SESSION['mensagem_deletarUsuario']);
    }
    ?>
    <?php
    include 'processamento/conectar.php';
    $sql = "SELECT * FROM usuarios ORDER BY nome";
    $con = $mysqli->query($sql) or die($mysqli->error);
    ?>
    <table style="margin-top: 50px;" class="table table-hover">
        <tr class="warning">
            <td><h4><b>Nome<b/></h4></td>
            <td><h4><b>Usuário<b/></h4></td>
            <td><h4><b>E-mail<b/></h4></td>
            <td style="width: 52%;"><h4><b>Senha<b/></h4></td>
            <td></td>
            <td></td>
            <td hidden="true"><h4><b>Id<b/></h4></td>
        </tr>
        <?php while ($dado = $con->fetch_array()) { ?> 
            <tr class="info">
                <td> <?php echo $dado["nome"] ?> </td>
                <td> <?php echo $dado["usuario"] ?> </td>
                <td> <?php echo $dado["email"] ?> </td>
                <td> <?php echo $dado["senha"] ?> </td>               
                <td><a href="edicaoUsuario.php?nome=<?= $dado['nome'] ?>&usuario=<?= $dado['usuario'] ?>&email=<?= $dado['email'] ?>&senha=<?= $dado['senha'] ?>&id=<?= $dado['id'] ?>" class="btn btn-warning">Editar</a></td>
                <td><a href="processamento/deletarUsuario.php?id=<?= $dado['id'] ?>" class="btn btn-danger">Deletar</a></td>
                <td hidden="true"> <?php echo $dado["id"] ?> </td>
            </tr> 
        <?php } ?>
    </table>
</body>
</html>


