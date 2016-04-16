<?php
session_start();

if (isset($_GET['id'])){    
include 'pergunta.php';
        $obj = new pergunta();
        $retorno = $obj->deletarPergunta($_GET['id']);
        $_SESSION['mensagem_deletarPergunta'] = 'Pergunta deletada com sucesso!';
        header("Location: ../todasPerguntas.php");
    }
    
?>
