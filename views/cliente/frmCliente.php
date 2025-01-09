<script src="/views/js/script.js" defer></script>
<main>
    <br>
    <div class="container">
        <h2>Cadastrar Cliente</h2>
        <form action="../../index.php?view=cliente&action=salvar" method="POST" name="formCliente" onsubmit="return validarCliente();">
            <div class="row">
                <div class="col">
                    <label class="form-label">Nome</label>
                    <input id="nome_cliente" type="text" class="form-control" name="nome_cliente" placeholder="Nome" required>
                </div>
                <div class="col">
                    <label class="form-label">Endereço</label>
                    <input type="text" class="form-control" name="endereco_cliente" placeholder="Endereço" required>
                </div>
                <div class="col">
                    <label class="form-label">CPF</label>
                    <input type="text" class="form-control" name="cpf_cliente" placeholder="Ex: 99999999910">
                </div>
            </div>
            <br>
            <button class="btn btn-primary me-md-2" type="submit">Cadastrar</button>
        </form>
    </div>
</main>