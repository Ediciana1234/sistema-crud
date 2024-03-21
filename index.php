<?php
require_once "./actions/config.php";
$sql = "SELECT * FROM usuários";

$stmt = $conn->query($sql);
$usuários = $stmt->fetchALL(PDO::FETCH_ASSOC);

?>


<?php include "./Layout/Header.php"; ?>

<div class="container">

    <div class="d-flex justify-content-between mt-5">
        <div>
            <h4>Usuários</h4>
        </div>

        <div>
            <a href="Adicionar.php" class= "btn btn-primary">Adicionar</a>
        </div>

    </div>

    <div class= "mt-5">
        <table class= "table table-striped table-houve">
            <thead>
                <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>opções</th>
                </tr>
            </thead>
            <thead>
                <tr>
                <td>Nome</td>
                <td>Email</td>
                <td>Telefone</td>
                <td>
                    <button class="btn btn-prinmary">Editar</button>
                    <button class="btn btn-danger">Excluir</button>
                </td>
                </tr>
            </thead>

        </table>

    </div>

</div>

<?php include "./Layout/Footer.php"; ?>

