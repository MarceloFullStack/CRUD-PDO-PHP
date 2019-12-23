<?php
require_once 'Conexao.php';
$nome = $_POST['nome'];
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
$cargo = $_POST['cargo'];

$clientes = new Conexao();

$params = array(
    ':nome' => $nome,
    ':usuario' => $usuario,
    ':senha' => $senha,
    ':cargo' => $cargo
);

$sql = "insert into login.usuarios (nome,usuario,senha,cargo)";
$sql .= "VALUES  (:nome,:usuario,:senha,:cargo)";

$clientes->executeSQL($sql,$params);

header("Location:clientes.php");

?>