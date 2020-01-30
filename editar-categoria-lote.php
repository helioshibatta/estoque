<?php

<?php require_once "global.php" ?>

$categoria = new Categoria();
$lista_de_categoria = $categoria->listar();
foreach ($lista_de_categoria as $linha) {
    $categoria_edit = new Categoria($linha['id']);
    $categoria_edit->nome = 'Categoria ' . $categoria_edit->nome;
    $categoria_edit->atualizar();
}
$nova_lista_de_categoria = $categoria->listar();
echo '<pre>';
print_r($nova_lista_de_categoria);
echo '</pre>';