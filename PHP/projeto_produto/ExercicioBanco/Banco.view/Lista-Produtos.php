<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
    /*include ("../Banco/conexao.php");
    include ("../Banco.dao/banco-produto.php");*/
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Lista de produtos</title>
    </head>
    <body>
        <h1>Clientes Cadastrados</h1>
    <table border="1">
        
      <tr>
        <td>Id</td>
        <td>Nome</td>
        <td>Descrição</td>
        <td>Preço</td>
        <td>QUantidade</td>        
      </tr>
      
      <?php
      $produtos = ListaProdutos($conexao);
      foreach ($produto as $produto):
      ?>
      
      <tr>
          <td><?php echo $produto['tb_produto_id_produto']?></td>
          <td><?php echo $produto['tb_produto_nome']?></td>
          <td><?php echo $produto['tb_produto_desc']?></td>
          <td><?php echo $produto['tb_produto_preco']?></td>
          <td><?php echo $produto['tb_produto_quant']?></td>        
          <td><a href="Excluir-Produto.php?tb_produto_id=
                 <?php echo $produto['tb_produto_id']?>">
              Excluir</a></td>
              
              <td><a href="Alterar-Produto.php?tb_produto_id
                     <?php echo $produto['tb_produto_id']?>>
                  Alterar</a></td>    
          
      </tr>
      
<?php
    endforeach;
?>
    </table>
        <?php
        // put your code here
        ?>
        <a href="Cadastro.php">Cadastrar Produtos</a>
    </body>
</html>
