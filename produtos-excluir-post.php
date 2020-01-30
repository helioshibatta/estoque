<?php require_once "global.php" ;

try {
    $id = $_GET['id'];
    $produto = new produto($id);
    $produto->excluir();

    header('Location: produtos.php');

} catch (Esception $e) {
    Erro::trataErro($e);

}

?>