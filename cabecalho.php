<!DOCTYPE html>
<html>
    <head>
        <title>IFPLUS <?php echo $nome_tela ?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0 min-scale=1.0 max-scale=10.0">
        <link type="text/css" rel="stylesheet" href="<?= BASEURL ?>View/bibliotecas/css/reset.css">
        <link type="text/css" rel="stylesheet" href="<?= BASEURL ?>View/bibliotecas/bootstrap/css/bootstrap.css">
        <link type="text/css" rel="stylesheet" href="<?= BASEURL ?>View/bibliotecas/bootstrap/css/bootstrap.min.css">
        <link type="text/css" rel="stylesheet" href="<?= BASEURL ?>View/bibliotecas/css/style.css">
        <link type="text/css" rel="stylesheet" href="<?= BASEURL ?>View/bibliotecas/css/chat.css">
        <?php if ($nome_tela == "Login Desktop"): ?>
            <link type="text/css" rel="stylesheet" href="<?= BASEURL ?>View/bibliotecas/css/login-desk.css">
        <?php endif; ?>
        <?php if ($nome_tela == "Login Mobile"): ?>
            <link type="text/css" rel="stylesheet" href="<?= BASEURL ?>View/bibliotecas/css/login-smart.css">
        <?php endif; ?>
        <?php if ($nome_tela == "Arquivos"): ?>
            <link type="text/css" rel="stylesheet" href="<?= BASEURL ?>View/bibliotecas/css/arquivo-prof.css">
        <?php endif; ?>



        <script src="<?= BASEURL ?>View/bibliotecas/js/jquery.js"></script>
        <script src="<?= BASEURL ?>View/bibliotecas/bootstrap/js/bootstrap.js"></script>
        <script src="<?= BASEURL ?>View/bibliotecas/js/functions.js"></script>

    </head>
    <body>
