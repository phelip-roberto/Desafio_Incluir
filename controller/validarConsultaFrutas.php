<?php

session_start();

$endereco_home = "Location:../home.php";
$endereco_listarFrutas = "Location:../view/listar.php";

include_once '../model/BancoDados.php';
$bd = BancoDados::conectarBanco();
if (!$bd) {
    $_SESSION['msg_erro'] = "Erro ao tentar conectar ao banco de dados";
} else {

    $sql = "SELECT id, nome, qtd, preco FROM estoque WHERE tipo='1'";
    $stmt = mysqli_prepare($bd, $sql);
    if (!$stmt) {
        $_SESSION['msg_erro'] = "Erro ao definir a query";
    } else {
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        if (mysqli_num_rows($result) < 1) {
            $_SESSION['msg_erro'] = "Nenhum produto foi encontrado!";
        } else {
            $produtos = array();
            while ($row = mysqli_fetch_assoc($result)) {
                $produtos[] = $row;
            }
            $_SESSION['produtos'] = $produtos;
        }
        mysqli_stmt_close($stmt);
    }
    BancoDados::desconectarBanco();
}

if (!empty($_SESSION['msg_erro'])) {
    header($endereco_home);
} else {
    header($endereco_listarFrutas);
}
