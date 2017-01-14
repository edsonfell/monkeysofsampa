<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection"/>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/document.js"></script>
    <link type="text/css" rel="stylesheet" href="css/style.css" media="screen,projection"/>
</head>


<body>
<?php include "menu.php" ?>
<div class="container conteudo">
    <div class="row">
        <div class="col s12 m5 l5">
            <h3 class="center-align grey-text text-darken-4 thin">Monkeys of Sampa</h3>
            <p class="flow-text grey-text text-lighten-5">Experimente romper barreiras e ir além do que jamais imaginou.
                O Parkour sob uma perspectiva diferente.</p>
        </div>
        <div class="col s12 m7 l7">
            <div class="slider">
                <ul class="slides">
                    <li>
                        <img src="img/salto1.jpg">
                        <div class="caption left-align">
                            <h3></h3>
                            <h5 class="light grey-text text-lighten-3"></h5>
                        </div>
                    </li>
                    <li>
                        <img src="img/salto2.jpg">
                        <div class="caption left-align">
                            <h3></h3>
                            <h5 class="light grey-text text-lighten-3"></h5>
                        </div>
                    </li>
                    <li>
                        <img src="img/aluno1.jpg">
                        <div class="caption left-align">
                            <h3></h3>
                            <h5 class="light grey-text text-lighten-3"></h5>
                        </div>
                    </li>
                    <li>
                        <img src="img/aluno2.jpg">
                        <div class="caption left-align">
                            <h3></h3>
                            <h5 class="light grey-text text-lighten-3"></h5>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </div>

    <div class="centralizar">
        <div class="row">
            <div class="col s12 m6 l6">
                <div class="center-align">
                    <a href="pages/aulas.php" class="zoom"><img class="icon-medium" src="img/runner.png"></a>
                </div>
                <h3 class="thin center-align title">Aulas</h3>
                <h5 class="white-text thin justify">Para aqueles que estão cansado de atividades comuns e pouco
                    desafiadoras, o nosso Parkour te ajuda a trabalhar o seu físico e também a sua mente, servindo como
                    uma
                    prática para levar junto com a academia, meditação, yoga e para sua vida. Faça sua matrícula hoje
                    mesmo!</h5>
            </div>
            <div class="col s12 m6 l6">
                <div class="center-align">
                    <a class="modal-trigger" href="#mail-modal"><img class="icon-medium" src="img/eventos.png"></a>
                </div>
                <h3 class="thin center-align title">Eventos</h3>
                <h5 class="white-text thin justify">Precisa de uma apresentação impactante para seu evento
                    corporativo ou social? Produzimos apresentações de acordo com a sua necessidade, seja em duração,
                    espaço ou publico alvo. O Monkeys of Sampa é um grupo certo independente da sua necessidade.</h5>
            </div>
        </div>
    </div>
</div>

<?php include "modal.php" ?>
<?php include "footer.php" ?>


</body>
</html>
