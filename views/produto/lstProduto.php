<main>
<br>
    <div class="container">
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a href="index.php?view=produto&action=cadastrar"><button class="btn btn-primary me-md-2" type="button">Cadastrar</button> </a>
        </div>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Descrição</th>
                <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    foreach ($produtos as $produto): ?>
                        <tr>
                            <td><?= $produto['id'] ?></td>
                            <td><?= $produto['descricao'] ?></td>
                            <td><?= $produto['status'] ?></td>

                        </tr>
                    <?php endforeach;
                ?>
            </tbody>
        </table>
    </div>
</main>