<?php
require_once "./config/conexao.php";

$nome = $_POST["nome"];
$rmail = $_POST["email"];
$senha = $_POST["senha"];

$senha = password_hash($senha, password_default);

$sql = "INSERT INTO usuarios (nome, email, senha) VALUES (:nome, :email, :senha)";
$stmt = $conn->prepare($sql);
$stmt->bindValue(":nome", $nome);
$stmt->bindValue(":email", $email);
$stmt->bindValue(":senha", $senha);
$stmt->execute();

if($stmt->rowCount() > 0){
   header("Location: ../index.php");

} else{
    echo "Erro ao tentar adicionar usuário";
}


