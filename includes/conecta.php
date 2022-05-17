<?php

//parametros do servidor de BD
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "vendas_maiky";

//conctando ao servidor
$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

//Habilitar o suporte ao charset utf8
mysqli_set_charset($conexao, "utf8");

/* teste */
/*  if($conexao){
    echo "tudo okay";
} */