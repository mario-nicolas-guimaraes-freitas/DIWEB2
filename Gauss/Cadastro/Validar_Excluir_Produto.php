<?php  
    $id = intval($_GET['id']);
    //$sql_code = "DELETE FROM produtos WHERE id = '$id'";
    //Execução via PDO retornando em $sql_retorno
    $sql_retorno = true;
    echo '<script>';
    if ($sql_retorno) {       
      echo ' window.location = `listarProduto.php?msg="Exclusão realizada com sucesso!"`';      
    } else {
      echo ' window.location = `listarProduto.php';      
    }         
    echo '</script>';    
?>