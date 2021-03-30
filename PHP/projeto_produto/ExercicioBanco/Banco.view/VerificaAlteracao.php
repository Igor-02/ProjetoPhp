<?php
    include ("../Banco/conexao.php");
    include ("../Banco.dao/banco-produto.php");
    $prod_id = ($_POST['txtprod_id']);
    $prod_nome= ($_POST['txtprod_nome']);
    $prod_desc = ($_POST['txtprod_desc']);
    $prod_preco = ($_POST['txtprod_preco']);
    $prod_qtd =($_POST['txtprod_qtd']);
    
    if(alterar($conexao, $prod_nome, $prod_desc, $prod_preco, $prod_qtd, $prod_id))
    {
        header("Location: Lista-Produtos.php");
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

