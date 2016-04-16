<?php
session_start();
include 'conexao.php';

class login {

    function logar($login, $senha) {
        $obj = new banco();
        $sql = "Select * from admins where login = '$login' and senha = '$senha'";
        $row = $obj->select($sql);
        if (isset($row)){
            $_SESSION['nome'] = $row['nome'];
            $_SESSION['id'] = $row['id'];
            $_SESSION['perfil_adm'] = array('id' => $row['id'],'nome' => $row['nome'],'login' => $row['login'], 'senha' => $row['senha']); 
            $_SESSION['logado'] = true;
        }
        else{
            $_SESSION['logado'] = false;            
        }
    }

}
?>