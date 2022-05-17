 <?php
 // funcoes-fabricantes.php

 require "conecta.php";

 function lerFabricantes($conexao){
     //1) montar a string do comando SQL
     $sql = "SELECT id, nome FROM Fabricantes";

     //2) Executar o comando
     $resultado = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));

     //3) Criar um array vario para receber os resultados
     $fabricantes = [];

     //4)loop 
     while( $fabricante = mysqli_fetch_assoc($resultado)){
         array_push($fabricantes, $fabricante );
     }

     //5)
     return $fabricantes;
 }

 //var_dump(lerFabricantes($conexao));//teste

 function inserirFabricante($conexao, $nome){
     $sql = "INSERT INTO fabricantes(nome) VALUE('$nome')";
     mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
 }