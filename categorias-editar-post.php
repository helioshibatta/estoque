<?php require_once "global.php" ?>

<?php
try {
    $id = $_POST["id"];
    $nome = $_POST["nome"];

   /* echo $id;
    echo "<br>";
    echo $nome;*/

    $categoria = new categoria($id);
    $categoria->nome = $nome;

    $categoria->atualizar();

    header("Location: categorias.php");
} catch (Exception $e) {
    Erro::trataErro($e);
}
?>