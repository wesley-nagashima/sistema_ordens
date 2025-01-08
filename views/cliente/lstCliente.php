<main>
<br>
    <div class="container">
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a href="index.php?view=cliente&action=cadastrar"><button class="btn btn-primary me-md-2" type="button">Cadastrar</button> </a>
        </div>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">CPF</th>
                <th scope="col">Endereço</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    foreach ($clientes as $cliente): ?>
                        <tr>
                            <td><?= $cliente['id'] ?></td>
                            <td><?= $cliente['nome'] ?></td>
                            <td><?= $cliente['cpf'] ?></td>
                            <td><?= $cliente['endereco'] ?></td>

                        </tr>
                    <?php endforeach;
                ?>
            </tbody>
        </table>
    </div>
</main>