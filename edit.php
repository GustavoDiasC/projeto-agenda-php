<?php
    include_once("templates/header.php");
?>

<div>
    <?php include_once("templates/backbtn.php") ?>    
    <h1 id="main-title">Editar contato</h1>
    <form id="create-form" action="<?= $BASE_URL ?>config/process.php" method="POST">
    <input type="hidden" name="type" value="edit">
    <input type="hidden" name="type" value="<?= $contact['id'] ?>">
    <div class="form-group">
        <label for="name">Nome do contato:</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Digite o nome" value="<?= $contact['name'] ?>" required>
    </div>
    <div class="form-group">
        <label for="phone">Telefone do contato:</label>
        <input type="text" class="form-control" id="phone" name="phone" placeholder="Digite o telefone" value="<?= $contact['phone'] ?>" required>
    </div>
    <div class="form-group">
        <label for="observations">Observações:</label>
        <textarea type="text" class="form-control" id="observations" name="observations" placeholder="insira as observações" value="<?= $contact['observations'] ?>" required rows="3"></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>
</div>

<?php
    include_once("templates/footer.php")
?>