<?php require_once "global.php" ?>

<?php
    try {
        $id = $_GET['id'];
        $produto = new produto($id);
        $listacategoria = categoria::listar();
    } catch (Exception $e) {
        Erro::trataErro($e);
    }

//    print_r($produto);

?>

<?php require_once 'cabecalho.php' ?>
<div class="row">
    <div class="col-md-12">
        <h2>Editar Nova Categoria</h2>
    </div>
</div>

<form action="produtos-editar-post.php" method="post">
<input type="hidden" name="id" value = "<?php echo $produto->id ?>">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="form-group">
                <label for="nome">Nome do Produto</label>
                <input type="text" name = "nome" value="<?php echo $produto->nome ?>" class="form-control" placeholder="Nome do Produto" required>
            </div>
            <div class="form-group">
                <label for="preco">Preço da Produto</label>
                <input type="number" name = "preco" value="<?php echo $produto->preco ?>" step="0.01" min="0" class="form-control" placeholder="Preço do Produto" required>
            </div>
            <div class="form-group">
                <label for="quantidade">Quantidade do Produto</label>
                <input type="number" name = "quantidade" value="<?php echo $produto->quantidade ?>" min="0" class="form-control" placeholder="Quantidade do Produto" required>
            </div>
            <div class="form-group">
                <label for="nome">Categoria do Produto</label>
                <select class="form-control" name = "categoria_id">
                <?php $select = '' ?>
                <?php foreach ($listacategoria as $linha): ?>
                    <?php
                        if ($linha['id'] == $produto->categoria_id) {
                            $select = 'selected';
                        }
                    ?>
                    <option <?php echo $select ?> value="<?php echo $linha["id"] ?>"> <?php echo $linha["nome"] ?></option>
                    <?php $select = '' ?>
                <?php endforeach ?>
            </div>
            <input type="submit" class="btn btn-success btn-block" value="Salvar">
        </div>
    </div>
</form>

<?php require_once 'rodape.php' ?>
