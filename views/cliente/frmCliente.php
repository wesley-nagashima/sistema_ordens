<main>
    <br>
    <div class="container">
        <h2>Cadastrar Cliente</h2>
        <form action="../../index.php?view=cliente&action=salvar" method="POST">
            <div class="row">
                <div class="col">
                    <label class="form-label">Nome</label>
                    <input type="text" class="form-control" name="nome_cliente" placeholder="Nome" required>
                </div>
                <div class="col">
                    <label class="form-label">Endereço</label>
                    <input type="text" class="form-control" name="endereco_cliente" placeholder="Endereço" required>
                </div>
                <div class="col">
                    <label class="form-label">CPF</label>
                    <input type="text" class="form-control" name="cpf_cliente" placeholder="CPF" required>
                </div>
            </div>
            <br>
            <button class="btn btn-primary me-md-2" type="submit">Cadastrar</button>
        </form>
    </div>
</main>