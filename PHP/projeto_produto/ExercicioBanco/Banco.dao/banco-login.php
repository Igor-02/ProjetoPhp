<?php

function efetuarLogin($conexao,$user,$senha){
    
    $sql = "select * from tb_usuario where tb_usuario_login='{$user}'"
    . "and tb_usuario_senha='{$senha}'";
    $resultado = mysqli_query($conexao, $sql);
    return mysqli_fetch_assoc($resultado);
    
}    
    
   
?>
