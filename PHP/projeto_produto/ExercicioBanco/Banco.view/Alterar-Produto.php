<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
    include ("../Banco/conexao.php");
    include("../Banco.dao/banco-produto.php");
    
    $prod_id = $_GET['id'];
    $produto = busca($conexao, $prod_id);
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Alterar Produto</h1>
        
        <form method="post" action="verificaAlteracao.php">
            <pre>
                Código Produto: <input type="text" name="txtprod_id" value="<?php echo $produto['tb_produto_id']?>"><br>
                Nome:        <input type="text" name="txtprod_nome" value="<?php echo $produto['tb_produto_nome']?>"><br>
                Telefone:    <input type="text" name="txtprod_desc" value="<?php echo $produto['tb_produto_desc']?>"><br>
                Endereço:    <input type="text" name="txtprod_preco" value="<?php echo $produto['tb_produto_preco']?>"><br>
                Quantidade:       <input type="text" name="txtprod_qtd" value="<?php echo $produto['tb_produto_quant']?>"><br>
                <input type="submit" value="Alterar" name="btn"><br>
            </pre>
        </form>
        
        <?php
        // put your code here
        ?>
    </body>
</html>
