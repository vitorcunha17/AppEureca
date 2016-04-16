<?php

include 'conexao.php';

class usuario {

    function editarUsuario($nome, $usuario, $email, $senha, $id) {
        $obj = new banco();
        $sql = "UPDATE usuarios SET nome='" . $nome . "',usuario='" . $usuario . "',email='" . $email . "',senha='" . $senha . "' WHERE id = '" . $id . "'";
        $retorno = $obj->insert($sql);
    }

    function deletarUsuario($id){
        $obj = new banco();
        $sql = "DELETE FROM usuarios WHERE id = '" . $id . "'";
        $retorno = $obj->delete($sql);
    }
}

?>