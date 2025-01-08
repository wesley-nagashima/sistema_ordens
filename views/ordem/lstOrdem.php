<main>
<br>
    <div class="container">
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a href="index.php?view=ordem&action=cadastrar"><button class="btn btn-primary me-md-2" type="button">Cadastrar</button> </a>
        </div>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Data</th>
                <th scope="col">Nome cliente</th>
                <th scope="col">CPF cliente</th>
                <th scope="col">Produto</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    foreach ($ordens as $ordem): ?>
                        <tr>
                            <td><?= $ordem['ordem_id'] ?></td>
                            <td><?= 
                                    $date = date('d/m/Y H:i:s', strtotime($ordem['data_abertura']));
                                ?>
                            </td>
                            <td><?= $ordem['nome_consumidor'] ?></td>
                            <td><?= $ordem['cpf_consumidor'] ?></td>
                            <td><?= $ordem['produto_descricao'] ?></td>
                        </tr>
                    <?php endforeach;
                ?>
            </tbody>
        </table>
    </div>
</main>