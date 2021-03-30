<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form method="post">
            <pre>
            <h1>Cadastro de Usuário</h1><br>
            Usuário:<input type="text" name="txtu"<br><br>
            Senha: <input type="text" name="txts"><br><br>
            <input type="submit" value="Logar"><br><br>
            </pre>
        </form>
        <?php
        include("../Banco/conexao.php");
        include ("../Banco.dao/banco-login.php");
        
        if($_POST){
            
            $user = $_POST['txtusu'];
            $senha = $_POST['txtssenha'];
            
            if(efetuarLogin($conexao, $user, $senha)){
               
                echo "Logado!!";
                header("Location: Lista-Produtos");
            }
            else{
                echo "Usuario ou senha incorretos!! ";
                $msg = mysqli_errno($conexao);
                echo $msg;  
            }   
        }
        
        ?>
    </body>
</html>
