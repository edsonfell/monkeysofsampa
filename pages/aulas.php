<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css" media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="../css/style.css" media="screen,projection"/>
    <link href="../css/style.css" rel="stylesheet" type="text/css"/>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="icon" type="image/png" href="../img/favicon.ico">
    <title>Aulas | Monkeys Of Sampa</title>
</head>

<body>
<?php include "../menu.php" ?>

<div class="container">
    <h4 class="thin"> Aulas dinâmicas para todas as necessidades.</h4>
    <div class="divider"></div>
    <div class="section">
        <h5 class="thin white-text">Cursos</h5>
        <div class=row>
            <div class="col l4">
                <div class="card hoverable">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="../img/salto1.jpg">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Ape<i class="material-icons right">more_vert</i></span>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Ape<i
                                    class="material-icons right">close</i></span>
                        <p>O curso APE apresenta a base do Parkour, desenvolve o acervo motor do aluno e o prepara
                            física e mentalmente para o aprendizado de técnicas mais avançadas. Nele o aluno aprende a
                            transpor obstáculos, aterrissar de forma segura, realizar saltos e subidas de muros
                            pequenos.</p>
                    </div>
                </div>
            </div>
            <div class="col l4">
                <div class="card hoverable">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="../img/salto2.jpg">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Lemur<i class="material-icons right">more_vert</i></span>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Lemur<i class="material-icons right">close</i></span>
                        <p>O Lemur desenvolve as habilidades acrobatas, como um percurso fluido, movimentação leve e
                            precisa. Neste curso o aluno aprende a movimentação mais avançada que no Ape, realiza
                            transposições de obstáculos, aterrissagens mais altas, além de fortalecimento muscular.</p>
                    </div>
                </div>
            </div>

            <div class="col l4">
                <div class="card hoverable">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="../img/salto3.jpg">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Kong<i class="material-icons right">more_vert</i></span>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Kong<i
                                    class="material-icons right">close</i></span>
                        <p>O Kong supera o limite físico e mental do aluno, o preparando para explorar ao máximo das
                            técnicas aprendidas com distâncias e alturas avançadas e combinação de movimentos mais
                            complexos. É fornecido o entendimento biomecânico do Parkour.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="divider"></div>
    <div class="section">
        <h5 class="thin white-text">Aulas particulares</h5>

        <div class="row">
            <div class="col s12 m6 l6">
                <div class="card hoverable">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="../img/particular.jpg">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Exclusivas<i
                                    class="material-icons right">more_vert</i></span>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Exclusivas<i
                                    class="material-icons right">close</i></span>
                        <p>Voltadas para aqueles que preferem aulas diretas, apenas aluno e professor.</p>
                        <p>Nesse modelo de aula o instrutor consegue acompanhar ainda com mais atenção todo o
                            desenvolvimento e necessidades do aluno, permitindo assim uma maior evolução e
                            aprendizado.</p>
                    </div>
                </div>
            </div>

            <div class="col s12 m6 l6">
                <div class="card hoverable">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="../img/grupo.jpg">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Turmas<i
                                    class="material-icons right">more_vert</i></span>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Turmas<i class="material-icons right">close</i></span>
                        <p>Voltadas para aqueles que gostam de treinos em grupos, fazer novos amigos e aprender com
                            outros praticantes.</p>
                        <p>Em grupo é possível que haja uma interação entre praticantes de níveis diferentes, permitindo
                            que o aluno aprenda não apenas com o professor, mas também com seus colegas de aula.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <blockquote>
                <h3 class="grey-text text-darken-4 thin">Matrícula e Informações</h3>
                <p class="grey-text text-lighten-5">Para maiores informações sobre horários, turmas, locais e matrícula
                    das aulas, entre em contato conosco.</p>
            </blockquote>
        </div>
    </div>
</div>
<?php include "../modal.php" ?>
<?php include "../footer.php" ?>
<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="../js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="../js/materialize.min.js"></script>
<script type="text/javascript" src="../js/document.js"></script>
</body>
</html>