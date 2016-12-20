/**
 * Passa os dados do aula para o Modal, e atualiza o link para exclusão
 */
$('#add-modal').on('show.bs.modal', function (event) {

    var button = $(event.relatedTarget);
    var id = button.data('customer');

    var modal = $(this);
    modal.find('.modal-title').text('Vizualizar aula #' + id);
    $("#conteudoModaladd").load('add.php');

});

/**
 * Passa os dados do aula para o Modal, e atualiza o link para exclusão
 */
$('#view-modal').on('show.bs.modal', function (event) {

    var button = $(event.relatedTarget);
    var id = button.data('customer');

    var modal = $(this);
    modal.find('.modal-title').text('Vizualizar Aula');
    $("#conteudoModalview").load('view.php?id=' + id);

});

$('#edit-modal').on('show.bs.modal', function (event) {

    var button = $(event.relatedTarget);
    var id = button.data('customer');

    var modal = $(this);
    modal.find('.modal-title').text('Atualizar aula');
    $("#conteudoModaledit").load('edit.php?id=' + id);

});

$('#delete-modal').on('show.bs.modal', function (event) {

    var button = $(event.relatedTarget);
    var id = button.data('customer');

    var modal = $(this);
    modal.find('.modal-title').text('Excluir aula');
    modal.find('#confirm').attr('href', 'delete.php?id=' + id);
});