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
    $datainclusao = $_GET['datainclusao'];
    $datafinal = $_GET['datafinal'];
    $titulo = $_GET['titulo'];
    $descricao = $_GET['descricao'];
    $id = $_GET["id"];
    ?>
    <div id="caixaPerguntaEditar">
        <center><h3>Edição de Pergunta</h3></center>
        <form id="formularioEditarPergunta" action="processamento/processamento.php" method="POST">
            <table id="cadastrarPerguntaTable">
                <tr>
                    <td>Data da inclusão:</td>
                    <td><input type="date" name="datainclusao" class="form-control" id="datainclusao" value="<?php echo $datainclusao ?>"</td>
                </tr> 
                <tr>
                    <td>Data final:</td>
                    <td><input type="date" name="datafinal" class="form-control"  id="datafinal" value="<?php echo $datafinal ?>"</td>
                </tr> 
                <tr>
                    <td>Título:</td>
                    <td><input type="text" name="titulo" class="form-control"  id="titulo" value="<?php echo $titulo ?>"</td>
                </tr> 
                <tr>
                    <td>Descrição: </td>
                    <td><textarea name="descricao" class="form-control" id="descricao"><?php echo $descricao ?></textarea></td>
                </tr>
                <tr>
                    <td hidden="true">Id:</td>
                    <td hidden="true"><input type="text" name="id" class="form-control"  id="id" value="<?php echo $id ?>"</td>
                </tr>
                <tr>
                    <td><input type="submit" name="action" class="btn btn-primary" value="Editar Pergunta" id="btEditarPerguntas"/></td>
                    <td><a  href="todasPerguntas.php" class="btn btn-danger">Cancelar</a></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>