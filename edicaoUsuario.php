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
                <li><a href="todasPerguntas.php">Todas as Perguntas</a></li>
                <li><a href="controleRespostas.php">Controle de Respostas</a></li>
                <li class="active"><a href="usuariosCadastrados.php">Usuários Cadastrados</a></li>
                <li><a href="cadastrarAdmin.php">Cadastrar Administrador</a></li>
                <li><a href="processamento/logout.php">Sair</a></li>
            </ul>
        </nav>
    </center>
    <?php
    $nome = $_GET['nome'];
    $usuario = $_GET['usuario'];
    $email = $_GET['email'];
    $senha = $_GET['senha'];
    $id = $_GET['id'];
    ?>
    <div id="caixaUsuarioEditar">
        <center><h3>Edição de Usuário</h3></center>
        <form id="formularioEditarUsuario" action="processamento/processamento.php" method="POST">
            <table id="editarUsuarioTable">
                <tr>
                    <td>Nome:</td>
                    <td><input type="text" name="nome" class="form-control"  id="nome" value="<?php echo $nome ?>"</td>
                </tr> 
                <tr>
                    <td>Usuário:</td>
                    <td><input type="text" name="usuario" class="form-control"  id="usuario" value="<?php echo $usuario ?>"</td>
                </tr> 
                <tr>
                    <td>E-mail:</td>
                    <td><input type="text" name="email" class="form-control"  id="email" value="<?php echo $email ?>"</td>
                </tr> 
                <tr>
                    <td>Senha: </td>
                    <td><input type="text" name="senha" class="form-control"  id="senha" value="<?php echo $senha ?>"</td>
                </tr>
                <tr>
                    <td hidden="true">Id:</td>
                    <td hidden="true"><input type="text" name="id" class="form-control"  id="id" value="<?php echo $id ?>"</td>
                </tr> 
                <tr>
                    <td><input type="submit" name="action" class="btn btn-primary" value="Editar Usuario" id="btEditarPerguntas"/></td>
                    <td><a  href="usuariosCadastrados.php" class="btn btn-danger">Cancelar</a></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>