<?php
    include ("../Banco/conexao.php");
    include ("../Banco.dao/banco-produto.php");
    
    $prod_nome= ($_POST['txtprod_nome']);
    $prod_desc = ($_POST['txtprod_desc']);
    $prod_preco = ($_POST['txtprod_preco']);
    $prod_qtd =($_POST['txtprod_qtd']);
    
    if(inserir($conexao, $prod_nome, $prod_desc, $prod_preco, $prod_qtd))
    {
        header("Location: Lista-Produtos");
        
    }
    
    else
    {
        $msg = mysqli_connect_errno($conexao);
        echo $msg;
    }
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

