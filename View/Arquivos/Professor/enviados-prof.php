<div class="row">
    <div class="panel-group col-xs-12 col-sm-11 col-md-11 col-lg-11" id="paineis-pastas">
        <?php
            $test = $user->getId_turma_prof("*");
            
            foreach ($test as $ts => $turma) {
                $arquivo = busca_arquivo($turma, $user->getId());
                //print_r($arquivo);
        ?>
        <div class="panel panel-default">
            <div class="panel-heading" data-toggle="collapse" data-target="#arquivos-<?=$turma['anoatual'] . $turma['sigla']?>" data-parent="#paineis-pastas">
                <h3 class="panel-title">
                    <span class="glyphicon glyphicon-folder-open"></span>
                    &nbsp;
                    <?=$turma['anoatual'] . "°" . $turma['sigla']?>
                </h3>
            </div>
            <div id="arquivos-<?=$turma['anoatual'] . $turma['sigla']?>" class="collapse">
                <div class="panel-body">
                    <ul id="arquivos">
                    <?php
                        if($arquivo != NULL){
                            foreach ($arquivo as $key => $value):                        
                    ?>
                        <a href="<?= BASEURL . $value['local']?>">
                            <li class="list-group-item">
                                <div class="container" id="container">
                                    <div class="row">
                                        <div class="col-xs-8">
                                        <?=$value['nome']?>
                                        </div>
                                        <span id="icon-download" class="glyphicon glyphicon-download-alt col-xs-1" aria-hidden="true"></span>
                                    </div>
                                </div>
                            </li>
                        </a>
                    <?php
                            endforeach;
                        }
                        else
                        {
                            ?>
                            <tr class = "bg-danger text-center">
                                <td colspan="3">
                                    Você ainda não enviou nenhum arquivo para <?=$turma['anoatual'] . "°" . $turma['sigla']?>
                                </td>
                            </tr>
                            <?php
                        }
                    ?>
                    </ul>
                </div>
            </div>
        </div>
        <?php
        }
        ?>
    </div>
</div>