<!DOCTYPE html>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link type="text/css" rel="stylesheet" href="../bibliotecas/css/reset.css">
        <link type="text/css" rel="stylesheet" href="../bibliotecas/bootstrap/css/bootstrap.css">
        <link type="text/css" rel="stylesheet" href="../bibliotecas/css/style.css">
        <link type="text/css" rel="stylesheet" href="../bibliotecas/css/chat.css">
    </head>
    <body>
        <?php $nome_tela = "Caderno" ?>
        <?php require '../header.php'; ?>
        <div  class="container-fluid">

            <div class="row">

                <div class="col-sm-9 col-md-10 no-padding">
                    <div style="padding: 0" class="container-fluid">
                        <div style="margin-top: 50px;" class="">
                            <div id="submenu">
                                <!-- Nav tabs -->
                                <ul class="nav  nav-tabs row" role="tablist">
                                    <li role="presentation" class="active col-xs-6"><a href="#caderno-disc" aria-controls="caderno-disc" role="tab" data-toggle="tab">Disciplinas</a></li>
                                    <li role="presentation" class="col-xs-6"><a href="#caderno-aula" aria-controls="caderno-aula" role="tab" data-toggle="tab">Aulas</a></li>
                                </ul>
                            </div>
                        </div>
                        <div style="padding: 10px" class="tab-content ">

                            <div role="tabpanel" class="tab-pane active " id="caderno-disc">
                                <a href="#" aria-controls="caderno-aula" class="list-group-item ">
                                    <h4>Matematica</h4>
                                </a>
                            </div>

                            <div role="tabpanel" class="tab-pane" id="caderno-aula">
                                <div class="list-group">
                                    <div class="list-group">
                                        <?php for ($i = 1; $i <= 35; $i++): ?>
                                            <a href="#" class="list-group-item ">
                                                <h4 class="list-group-item-heading">Matematica</h4>
                                                <p class="list-group-item-text">Aula 1 | Funções de primeiro grau</p>
                                            </a>
                                        <?php endfor; ?>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-3 col-md-2 hidden-xs no-padding">
                    <div  class="affix" style=" padding-top: 50px; height: 100vh; background-color: #ccc">
                        <aside style="height: 85vh; overflow: auto; padding: 10px; ">
                            <div class="list-group">
                                <?php for ($i = 1; $i <= 70; $i++): ?>
                                    <a href="#"  class="list-group-item" style="">
                                        <div class="row no-margin">
                                            <div class="col-sm-2 no-padding vertical-bottom">
                                                <img class="img img-responsive img-circle " src="../bibliotecas/img/breno.png" border="0">
                                            </div>
                                            <div class="col-sm-8 no-padding vertical-bottom">
                                                Breno Mendes
                                            </div>
                                            <div class="col-sm-2 no-padding vertical-bottom">
                                                <span  class="status off "></span>
                                            </div>
                                        </div>
                                    </a>
                                <?php endfor; ?>
                            </div>

                        </aside>
                        <div style="height: 20vh; padding: 10px;">
                            <div class="input-group">
                                <input class="form-control" aria-label="Pesquisar" placeholder="Pesquisar Aluno" type="text">
                                <div class="input-group-btn">
                                    <button type="button" class="btn btn-default" aria-label="Pesquisar">
                                        <span class="glyphicon glyphicon-search"></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!--<aside id="chats">
                            <div class="window" id="janela_x">
                                <div class="header_window">
                                    <a href="#" class="close">x</a>
                                    <span class="name">breno mendes</span>
                                    <span id="5" class="status on"></span>
                                </div>
                                <div class="body">
                                    <div class="mensagens">
                                        <ul>
                                            <li class="eu"><p> exemplo de msg</p></li>
                                            <li class=""><p> exemplo de msg q eu estou usando para reproduzir uma mensagem de verdde</p><div class="imgSmall">
                                                    <img src="../bibliotecas/img/breno.png" border="0">
                                                </div></li>
                                            <div class="imgSmall">
                                                <img src="img/breno.png" border="0">
                                            </div>
                                        </ul>
                                    </div>
                                    <div class ="send_message" id="3:5">
                                        <input type="text" name="message" class="msg" id="3:5"/>
                                    </div>
                                </div>
                            </div>
                        </aside>-->
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade " id="AulaModal" tabindex="-1" role="dialog" aria-labelledby="AulaModal">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Aula 2 - História do Brasil - Período Joanino e o processo de independência do Brasil</h4>
                    </div>
                    <div class="modal-body">
                        <p>
                            A chegada da família real portuguesa no Brasil marcou intensamente os destinos do Brasil e da Europa. Pela primeira vez na história, um rei europeu transferia a capital de seu governo para o continente americano. Escoltados por embarcações britânicas, cerca de 10 mil pessoas fizeram a viagem que atravessou o oceano Atlântico. Sofrendo diversos inconvenientes durante a viagem, os súditos da Coroa Portuguesa enfrentaram uma forte tempestade que separou o comboio de embarcações. Parte dos viajantes aportou primeiramente na Bahia e o restante na cidade do Rio de Janeiro.<br>
                            <br>
                            Responsabilizados por escoltar a Família Real e defender as terras portuguesas da invasão napoleônica, os ingleses esperavam vantagens econômicas em troca do apoio oferecido. Já na Bahia, D. João, orientado pelo economista Luz José da Silva Lisboa, instituiu na Carta Régia de 1808 a abertura dos portos a “todas as nações amigas”. A medida encerrava o antigo pacto colonial que conduziu a dinâmica econômica do país até aquele momento.<br>
                            <br>
                            Além de liberar o comércio, essas medidas trouxeram outras importantes conseqüências de ordem econômica. O contrabando sofreu uma significativa diminuição e os recursos arrecadados pela Coroa também aumentaram. Ao mesmo tempo, os produtos ingleses tomaram conta do país, impedindo o desenvolvimento de manufaturas no Brasil, as cidades portuárias tiveram notório desenvolvimento. Dois anos mais tarde, o decreto de 1808 transformou-se em um tratado permanente.<br>
                            <br>
                            No ano de 1810, os Tratados de Aliança e Amizade e de Comércio e Navegação, fixaram os interesses britânicos no mercado brasileiro. Foram estabelecidas taxas alfandegárias preferenciais aos produtos ingleses. Os produtos ingleses pagavam taxas de 15%, os portugueses de 16% e as demais nações estrangeiras pagariam uma alíquota de 24%. Além desses valores, o tratado firmava um compromisso em que o tráfico negreiro seria posteriormente extinguido.<br>
                            <br>
                            Além de trazer transformações no jogo econômico, o governo de Dom João VI empreendeu outras mudanças. Adotada como capital do império, a cidade do Rio de Janeiro sofreu diversas modificações. Missões estrangeiras vieram ao país avaliar as riquezas da região, a Biblioteca Real foi construída, o primeiro jornal do país foi criado. Além disso, novos prédios públicos foram estabelecidos. A Casa da Moeda, Banco do Brasil, a Academia Real Militar e o Jardim Botânico foram algumas das obras públicas do período joanino.<br>
                            <br>
                            Nas questões externas, Dom João VI empreendeu duas campanhas militares nas fronteiras do país. No ano de 1809, tropas britânicas e portuguesas conquistaram a cidade de Caiena, capital da Guina Francesa. A manobra, que tinha por objetivo agredir o governo francês, colocou a região sob o domínio do Brasil até quando o Congresso de Viena restituiu a região à França. No ano de 1817, as tropas imperiais invadiram a Província Cisplatina.<br>
                            <br>
                            Essa nova investida militar era importante por razões diversas. Além de ser uma região de rico potencial econômico, o domínio sob a região da Cisplatina impedia uma possível invasão napoleônica às colônias da Espanha, que havia sido dominada pelas tropas francesas. Dez anos depois, um movimento de independência pôs fim à anexação da Cisplatina, dando origem ao Uruguai.<br>
                            <br>
                            Em 1815, a administração joanina elevou o Brasil à condição de Reino Unido. Essa nova nomeação extinguiu politicamente a condição colonial do país. Inconformados, os lusitanos que permaneceram em Portugal se mostravam insatisfeitos com o fato do Brasil tornar-se a sede administrativa do governo português. Foi quando, em 1820, um movimento revolucionário lutou pelo fim da condição política secundária de Portugal. A chamada Revolução do Porto criou um governo provisório e exigiu o retorno de Dom João VI a Portugal.<br>
                            <br>
                            Temendo a perda do seu poder, Dom João VI foi pra Portugal e deixou o seu filho, Dom Pedro I, como príncipe regente do Brasil. Os revolucionários, mesmo inspirados por princípios liberais, exigiram a volta do pacto colonial. No Brasil, as repercussões desses acontecimentos impulsionaram a formação de um movimento que possibilitou a independência do Brasil.
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Tab panes -->

        <script src="../bibliotecas/js/jquery.js"></script>
        <script src="../bibliotecas/bootstrap/js/bootstrap.js"></script>
    </body>
</html>