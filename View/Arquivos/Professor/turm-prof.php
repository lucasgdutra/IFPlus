<div class="row">
    <div class="panel-group col-xs-12 col-sm-11 col-md-11 col-lg-11" id="paineis-info">
    <?php
        $test = $user->getId_turma_prof("*");

        foreach ($test as $ts => $turma) {
    ?>
        <div class="panel panel-default">
            <div class="panel-heading" data-toggle="collapse" data-target="#info-<?=$turma['anoatual'] . $turma['sigla']?>" data-parent="#paineis-info">
                <h3 class="panel-title">
                    <span class="glyphicon glyphicon-info-sign"></span>
                    &nbsp;
                    <?=$turma['anoatual'] . "°" .$turma['sigla']?>
                </h3>
            </div>
            <div id="info-<?=$turma['anoatual'] . $turma['sigla']?>" class="collapse">
                <div class="panel-body">
                    <p>Esse eh o 1C</p>
                </div>
            </div>
        </div>
    <?php
        }
    ?>
    </div>
</div>