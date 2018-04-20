<?php

session_start();

$endereco_home = "Location:../home.php";

include_once '../model/BancoDados.php';
$bd = BancoDados::conectarBanco();
if (!$bd) {
    $_SESSION['msg_erro'] = "Erro ao tentar conectar ao banco de dados";
} else {
    $i = 0;
    foreach ($_POST['id'] as $id_Prod) {
        $id = $id_Prod;
        $qtd = $_POST['novaQtd'][$i];
        $sql = "UPDATE estoque SET qtd=? WHERE id=?";
        $stmt = mysqli_prepare($bd, $sql);
        if (!$stmt) {
            $_SESSION['msg_erro'] = "Erro ao definir a query";
        } else {
            mysqli_stmt_bind_param($stmt, "ii", $qtd, $id);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);
        }

    }
    
    BancoDados::desconectarBanco();
}

if (!empty($_SESSION['msg_erro'])) {
    header($endereco_home);
} else {
    header($endereco_home);
}
