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
                <li class="active"><a href="#">Cadastrar Perguntas</a></li>
                <li><a href="todasPerguntas.php">Todas as Perguntas</a></li>
                <li><a href="controleRespostas.php">Controle de Respostas</a></li>
                <li><a href="usuariosCadastrados.php">Usuários Cadastrados</a></li>
                <li><a href="cadastrarAdmin.php">Cadastrar Administrador</a></li>
                <li><a href="processamento/logout.php">Sair</a></li>
            </ul>
        </nav>
    </center>
        <?php
        session_start();
        if (isset($_SESSION['mensagem_cadastroPergunta'])) {
            echo "<center><p class='alert-successCadastroPergunta'>" . $_SESSION['mensagem_cadastroPergunta'] . "</p></center>";
            unset($_SESSION['mensagem_cadastroPergunta']);
        }
        ?>
        <?php
        if (isset($_SESSION['mensagem_pergunta'])) {
            echo "<center><p class='alert-dangerLogin'>" . $_SESSION['mensagem_pergunta'] . "</p></center>";
            unset($_SESSION['mensagem_pergunta']);
        }
        ?>
        <?php
            //date_default_timezone_set('America/Sao_Paulo');
            //$data = date('d/m/Y');
        ?>
    <div id="caixaPergunta">           
        <form id="formularioPergunta" action="processamento/processamento.php" method="POST">
            <table id="cadastrarPerguntaTable">
                <tr>
                    <td>Data da inclusão:</td>
                    <td><input type="date" name="datainclusao" class="form-control" id="datainclusao" required="true"</td>
                </tr> 
                <tr>
                    <td>Data final:</td>
                    <td><input type="date" name="datafinal" class="form-control" id="datafinal" required="true"</td>
                </tr> 
                <tr>
                    <td>Título:</td>
                    <td><input type="text" name="titulo" class="form-control" id="titulo" required="true"</td>
                </tr> 
                <tr>
                    <td>Descrição: </td>
                    <td><textarea name="descricao" class="form-control" id="descricao" required="true"></textarea></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" name="action" class="btn btn-primary" value="Cadastrar Pergunta" id="btCadastrarPerguntas"/></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>