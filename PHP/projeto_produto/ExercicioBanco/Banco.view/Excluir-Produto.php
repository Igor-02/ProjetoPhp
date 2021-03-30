<?php
    include ("../Banco/conexao.php");
    include ("../Banco.dao/banco-produto.php");
    
    $id = $_GET['tb_produto_id'];
    
    if(excluir($conexao, $id))
    {
        echo "Excluido com sucesso";
        
        header("Location: Lista-Produtos.php");
        
        die();
    }
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

