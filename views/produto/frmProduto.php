<main>
    <br>
    <div class="container">
        <h2>Cadastrar Produto</h2>
        <form action="../../index.php?view=produto&action=salvar" method="POST">
            <div class="row">
                <div class="col">
                    <label class="form-label">Descrição</label>
                    <input type="text" class="form-control" name="descricao_produto" placeholder="Descrição" required>
                </div>
                <div class="col">
                    <label class="form-label">Status</label>
                    <input type="text" class="form-control" name="status_produto"    placeholder="Status"    required>
                </div>
            </div>
            <br>
            <button class="btn btn-primary me-md-2" type="submit">Cadastrar</button>
        </form>
    </div>
</main>