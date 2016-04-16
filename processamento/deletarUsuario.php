<?php
session_start();

if (isset($_GET['id'])){    
include 'usuario.php';
        $obj = new usuario();
        $retorno = $obj->deletarUsuario($_GET['id']);
        $_SESSION['mensagem_deletarUsuario'] = 'Usuário deletado com sucesso!';
        header("Location: ../usuariosCadastrados.php");
    }

?>