$(document).ready(function () {
    $('#checkBtn').click(function() {
      checked = $("input[type=checkbox]:checked").length;

      if(!checked) {
        alert("Escolha pelo menos uma turma para enviar o arquivo!");
        return false;
      }

    });
});