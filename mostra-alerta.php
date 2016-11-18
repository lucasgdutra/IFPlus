<?php
session_start();

function mostraAlerta($tipo) {
    if (isset($_SESSION[$tipo])) {
        ?>
        <div class="alert alert-warning alert-dismissible fade in alert-<?= $tipo ?>" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
            <p class="text-center"><?= $_SESSION[$tipo] ?></p>
        </div>
        <?php
        unset($_SESSION[$tipo]);
    }
}
?>

