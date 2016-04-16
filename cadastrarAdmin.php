<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastro de Perguntas</title>
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
                <li><a href="usuariosCadastrados.php">Usuários Cadastrados</a></li>
                <li class="active"><a href="#">Cadastrar Administrador</a></li>
                <li><a href="processamento/logout.php">Sair</a></li>
            </ul>
        </nav>
    </center>
    <?php
    session_start();
    if (isset($_SESSION['mensagem_cadastroAdmin'])) {
        echo "<center><p class='alert-successCadastroAdmin'>" . $_SESSION['mensagem_cadastroAdmin'] . "</p></center>";
        unset($_SESSION['mensagem_cadastroAdmin']);
    }
    ?>
    <?php
    if (isset($_SESSION['mensagem_senhas'])) {
        echo "<center><p class='alert-dangerSenhaDiferente'>" . $_SESSION['mensagem_senhas'] . "</p></center>";
        unset($_SESSION['mensagem_senhas']);
    }
    ?>
    <div id="caixaCadastroAdmin">           
        <form id="formularioAdmin" action="processamento/processamento.php" method="POST">
            <table id="cadastrarAdminTable">
                <tr>
                    <td>Nome:</td>
                    <td><input type="text" name="nome" class="form-control"  id="datainclusao" required="true"</td>
                </tr> 
                <tr>
                    <td>Login:</td>
                    <td><input type="text" name="login" class="form-control"  id="datafinal" required="true"</td>
                </tr> 
                <tr>
                    <td>Senha: </td>
                    <td><input type="password" name="senha" class="form-control" id="senha" required="true" maxlengh="10"/></td>
                </tr>
                <tr>
                    <td>Confirmar Senha: </td>
                    <td><input type="password" name="senha2" class="form-control" id="senha2" required="true" maxlengh="10"/></td>                   
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" name="action" class="btn btn-primary" value="Cadastrar Administrador" id="btCadastrarPerguntas"/></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>
