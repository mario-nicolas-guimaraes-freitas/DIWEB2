<!doctype html>
<html lang='pt-BR'>
<head>
   <meta charset='utf-8'>
   <title>Produtos Cadastrados</title>
   <script src="funcoes.js"></script>
</head>
<body>
<h1>Produtos Cadastrados</h1>
<table>
<tr>
<th>Cód.</th><th>NOME PRODUTO</th><th>Operação</th>
</tr>
<tr>
<td>001</td><td>Teclado Dell</td>
<td><button id="btExcluir" onclick="confirmaExclusao('1');">Excluir</button> 
<button id="btAlterar" onclick="alterarProduto('1');">Alterar</button>
</td>
</tr>
<td>003</td><td>Mouse Dell</td>
<td><button id="btExcluir" onclick="confirmaExclusao('109');">Excluir</button> 
<button id="btAlterar" onclick="alterarProduto('109');">Alterar</button>
</td>
</tr>
</table>
<?php 
  if(isset($_GET["msg"])){
    echo '<script>';
    echo "alert(`Exclusão realizada com sucesso!`)";
    echo '</script>';    
  }      
?>
</body>
<html>