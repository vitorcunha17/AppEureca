<meta charset="UTF-8">
<?php
session_start();
switch ($_POST["action"]) {
    case 'Login': logar($_POST["login"], $_POST["senha"]);
        break;
    case 'Cadastrar Pergunta': cadastrarPergunta($_POST["datainclusao"], $_POST["datafinal"], $_POST["titulo"], $_POST["descricao"]);
        break;
    case 'Editar Pergunta': editarPergunta($_POST["datainclusao"], $_POST["datafinal"], $_POST["titulo"], $_POST["descricao"], $_POST["id"]);
        break;
    case 'Cadastrar Administrador': cadastroAdmin($_POST["nome"], $_POST["login"], $_POST["senha"], $_POST["senha2"]);
        break;
    case 'Editar Usuario': editarUsuario($_POST["nome"], $_POST["usuario"], $_POST["email"], $_POST["senha"], $_POST["id"]);
        break;
}

function logar($login, $senha) {
    include 'logar.php';
    $obj = new login();
    $retorno = $obj->logar($login, md5($senha));
    if (isset($_SESSION['logado']) && $_SESSION['logado'] == TRUE) {
        header("Location: ../cadastrarPergunta.php");
    } else {
        $_SESSION['mensagem_login'] = "Login ou senha incorretos!";
        header("Location: ../index.php");
    }
}

function cadastrarPergunta($datainclusao, $datafinal, $titulo, $descricao) {
    include 'pergunta.php';
    $obj = new pergunta();
    $retorno = $obj->cadastrarPergunta($datainclusao, $datafinal, $titulo, $descricao);
    $_SESSION['mensagem_cadastroPergunta'] = "Cadastro da pergunta efetuado com sucesso!";
    header("Location: ../cadastrarPergunta.php");
}

function editarPergunta($datainclusao, $datafinal, $titulo, $descricao, $id) {
    include 'pergunta.php';
    $obj = new pergunta();
    $retorno = $obj->editarPergunta($datainclusao, $datafinal, $titulo, $descricao, $id);
    $_SESSION['mensagem_editarPergunta'] = "Pergunta editada com sucesso!";
    header("Location: ../todasPerguntas.php");
}

function cadastroAdmin($nome, $login, $senha, $senha2) {
    if ($senha == $senha2) {
        include 'admin.php';
        $obj = new admin();
        $retorno = $obj->cadastrarAdmin($nome, $login, md5($senha));
        $_SESSION['mensagem_cadastroAdmin'] = "Administrados cadastrado com sucesso!";
        header("Location: ../cadastrarAdmin.php");
    } else {
        header("Location: ../cadastrarAdmin.php");
        $_SESSION['mensagem_senhas'] = "Senhas Diferentes!";
    }
}

function editarUsuario($nome, $usuario, $email, $senha, $id) {
    include 'usuario.php';
    $obj = new usuario();
    $retorno = $obj->editarUsuario($nome, $usuario, $email, $senha, $id);
    $_SESSION['mensagem_editarUsuario'] = "Usuário editada com sucesso!";
    header("Location: ../usuariosCadastrados.php");
}
?>