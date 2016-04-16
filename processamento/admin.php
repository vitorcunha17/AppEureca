<?php

include 'conexao.php';

class admin {

    function cadastrarAdmin($nome, $login, $senha) {
        $obj = new banco();
        $sql = "INSERT INTO admins (nome, login, senha) values ('$nome', '$login', '$senha')";
        $retorno = $obj->insert($sql);
    }
}

?>