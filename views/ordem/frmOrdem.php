<main>
    <br>
    <div class="container">
        <h2>Cadastrar Ordem</h2>
        <form action="../../index.php?view=ordem&action=salvar" method="POST">
            <div class="row">
                <div class="col">
                    <label class="form-label">Nome do Consumidor</label>
                    <input type="text" class="form-control" name="nome_consumidor" placeholder="Nome do Consumidor" required>
                </div>
                <div class="col">
                    <label class="form-label">CPF do consumidor</label>
                    <input type="text" class="form-control" name="cpf_consumidor" placeholder="CPF do Consumidor" required>
                </div>
                <div class="col">
                    <label class="form-label">Produto</label>
                    <select name="produto_id" class="form-select">
                        <option selected>Selecione um produto</option>
                            <?php foreach ($produtos as $produto): ?>
                                <option value="<?= $produto['id']; ?>">
                                    <?= $produto['descricao']; ?>
                                </option>
                            <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <br>
            <button class="btn btn-primary me-md-2" type="submit">Cadastrar</button>
        </form>
    </div>
</main>