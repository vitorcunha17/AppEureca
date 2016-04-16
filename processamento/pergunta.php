<?php

include 'conexao.php';

class pergunta {

    function cadastrarPergunta($datainclusao, $datafinal, $titulo, $descricao) {
        $obj = new banco();
        $sql = "INSERT INTO perguntas (datainclusao, datafinal, titulo, descricao) values ('$datainclusao', '$datafinal', '$titulo', '$descricao')";
        $retorno = $obj->insert($sql);
    }

    function editarPergunta($datainclusao, $datafinal, $titulo, $descricao, $id) {
        $obj = new banco();
        $sql = "UPDATE perguntas SET datainclusao='" . $datainclusao . "',datafinal='" . $datafinal . "',titulo='" . $titulo . "',descricao='" . $descricao . "' WHERE id = '" . $id . "'";
        $retorno = $obj->insert($sql);
    }

    function deletarPergunta($id) {
        $obj = new banco();
        $sql = "DELETE FROM perguntas WHERE id = '" . $id . "'";
        $retorno = $obj->delete($sql);
    }

}

?>