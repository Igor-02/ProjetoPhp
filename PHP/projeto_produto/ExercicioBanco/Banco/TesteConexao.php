<?php
    include ("conexao.php");
    
    if(!$conexao)
    {
        echo "Não foi possivel conectar ao banco";
        exit;
    }
    else
    {
        echo "Conexão estabelida";
    }
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

