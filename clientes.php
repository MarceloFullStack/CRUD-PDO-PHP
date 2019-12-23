<?php
require_once "Conexao.php";
$clientes = new Conexao();

$params = array(':id1'=> 1,
                ':id2'=> 2
                );

$clientes->ExecuteSQL("SELECT * FROM login.usuarios", $params);


foreach ($clientes->listarDados() as $lista):
    echo '<br> Nome: '.$lista['id'];
    echo '<br> Nome: '.$lista['nome'];
    echo '<br> Nome: '.$lista['cargo'];
    echo '<br> Nome: '.$lista['senha'];
    echo "<hr>";
endforeach;
echo "<a href='paginaInserir.php'>Cadastre mais pessoas</a>";
?>