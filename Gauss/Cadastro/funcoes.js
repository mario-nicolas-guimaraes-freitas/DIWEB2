function confirmaExclusao(id){
  var confirma = confirm(`Confirma a exclusão do produto ${id}?`);
  if(confirma == 1){
    window.location = `Validar_Excluir_Produto.php?id=1`;
  }
}