<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastro de Produtos</title>
    </head>
    <body>
        <H1>Cadastro de Clientes</H1>
        <form method="post">
			<pre>
				Nome      : <input type="text" name="txtprod_nome"><br>
				Descrição : <textarea type="text" name="txtprod_desc"></textarea><br>
				preço     : <input type="text" name="txtprod_preco"><br>
				Quantidade: <input type="text" name="txtprod_qtd"><br>
				
				<input type="subnit" value="Cadastrar" name="btn"><br>
			</pre>
		</form>
        <?php
        // put your code here
        ?>
    </body>
</html>
