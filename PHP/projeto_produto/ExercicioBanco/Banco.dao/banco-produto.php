<?php
    function inserir($conexao,$prod_nome,$prod_desc,$prod_preco, $prod_qtd)
    {
        $sql = "insert into tb_produto"
                ."(tb_produto_nome,tb_produto_desc,tb_produto_preco,tb_produto_quant)"
                ."values('$prod_nome','$prod_desc',$prod_preco,$prod_qtd)";
        
        return mysqli_query($conexao,$sql);
    }
    
    function alterar($conexao,$prod_nome,$prod_desc,$prod_preco,$prod_qtd,$prod_id)
    {
        $sql="update tb_produto set tb_produto_nome = '$prod_nome',tb_produto_desc = '$prod_desc',"
            . "tb_produto_preco = $prod_preco,tb_produto_quant=$prod_qtd where tb_produto_id =$prod_id";
        
        return mysqli_query($conexao,$sql);
    }
    
    function excluir($conexao, $prod_id)
{
    $sql = "delete from tb_produto where tb_produto_id= $prod_id";
    
    return mysqli_query($conexao, $sql);
}

function ListaProdutos($conexao)
{
    $produtos = array();
    
    $result = mysqli_query($conexao, "select*from tb_produto");
    
    while($produto = mysqli_fetch_assoc($result))
    {
        array_push($produtos, $produto);
    }
    
    return $produtos;
}

function busca($conexao, $prod_id)
{
    $result = mysqli_query($conexao, "select*from tb_produto where tb_produto_id = $prod_id");
    
    return mysqli_fetch_assoc($result);
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

