 <?php
 // funcoes-fabricantes.php

 require "conecta.php";

 //ler fabricante

 function lerProdutos($conexao){
   $sql= "SELECT id, nome, preco, quantidade, descricao, fabricante_id FROM produtos ORDER BY nome";
   
   $resultado= mysqli_query($conexao, $sql) or die (mysqli_error($conexao));
   
   $produtos=[];

   while ($produto = mysqli_fetch_assoc($resultado)){
       array_push($produtos, $produto);
   };

   return $produtos;
 }

//inserir

 function inserirProduto($conexao, $nome){
   
     mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
 }

 //ler um fabricante

 function lerUmProduto($conexao, $id){
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

