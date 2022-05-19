 <?php
 // funcoes-fabricantes.php

 require "conecta.php";

 //ler fabricante

 function lerFabricantes($conexao){
     //1) montar a string do comando SQL
     $sql = "SELECT id, nome FROM Fabricantes";

     //2) Executar o comando
     $resultado = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));

     //3) Criar um array vario para receber os resultados
     $fabricantes = [];

     //4)loop imterado em cada resultado, e  cada fabricante que for localizado, ele é acrescentado ao array fabricante
     while( $fabricante = mysqli_fetch_assoc($resultado)){
         array_push($fabricantes, $fabricante );
     }

     //5)Retorna para fora da função
     return $fabricantes;
 }

//inserir

 function inserirFabricante($conexao, $nome){
     $sql = "INSERT INTO fabricantes(nome) VALUE('$nome')";
     mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
 }

 //ler um fabricante

 function lerUmFabricante($conexao, $id){
     $sql = "SELECT id, nome FROM fabricantes WHERE id = $id";

     $resultado = mysqli_query($conexao,$sql) or die (mysqli_error($conexao));

     return mysqli_fetch_assoc($resultado);
 }

 //atualizar fabricante
 function atualizarFabricante($conexao,$id,$nome){
     $sql = "UPDATE fabricantes SET nome = '$nome' WHERE id = $id ";
     mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
 }

 //excluir fabricante
 function excluirFabricante($conexao,$id){
     $sql = "DELETE FROM fabricantes WHERE id = $id ";
     mysqli_query($conexao,$sql) or die(mysqli_error($conexao));
 }

