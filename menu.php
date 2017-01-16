<?php
//$path_parts = pathinfo(__FILE__);
//$pagina = $path_parts['filename'];

$pagina = basename($_SERVER['REQUEST_URI'], ".php");

if ($pagina == "index") { ?>
    <!-- menu de navegação para index -->
    <div id="menu-top">
        <nav>
            <div class="nav-wrapper z-depth-1">
                <a href="index.php" class="brand-logo center"><img class="logo-menu" src="img/logo-bar.png"></a>
                <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>

                <ul class="lista-menu right hide-on-med-and-down">
                    <li><a href="pages/aulas.php" class="thin"><i class="icon-menu material-icons">perm_identity</i>Aulas</a></li>
                    <li><a href="pages/midia.php" class="thin"><i class="icon-menu material-icons">play_circle_filled</i>Mídia</a></li>
                    <li><a href="pages/projetos.php" class="thin"><i class="icon-menu material-icons">work</i>Projetos</a></li>
                </ul>

                <ul class="lista-menu side-nav" id="mobile-demo">
                    <li><a href="index.php" class="thin white-text"><i class="icon-menu material-icons">store</i>Início</a></li>
                    <li><a href="pages/aulas.php" class="thin white-text"><i class="icon-menu material-icons">perm_identity</i>Aulas</a></li>
                    <li><a href="pages/midia.php" class="thin white-text"><i class="icon-menu material-icons">play_circle_filled</i>Mídia</a></li>
                    <li><a href="pages/projetos.php" class="thin white-text"><i class="icon-menu material-icons">work</i>Projetos</a></li>
                </ul>
            </div>
        </nav>
    </div>
<?php } else { ?>
    <!-- menu de navegação para as pages -->
    <div id="menu-top">
        <nav>
            <div class="nav-wrapper z-depth-1">
                <a href="../index.php" class="brand-logo center"><img class="logo-menu" src="../img/logo-bar.png"></a>
                <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>

                <ul class="lista-menu right hide-on-med-and-down">
                    <li><a href="aulas.php" class="thin"><i class="icon-menu material-icons">perm_identity</i>Aulas</a></li>
                    <li><a href="midia.php" class="thin"><i class="icon-menu material-icons">play_circle_filled</i>Mídia</a></li>
                    <li><a href="projetos.php" class="thin"><i class="icon-menu material-icons">work</i>Projetos</a></li>
                </ul>

                <ul class="lista-menu side-nav" id="mobile-demo">
                    <li><a href="../index.php" class="thin white-text"><i class="icon-menu material-icons">store</i>Início</a></li>
                    <li><a href="aulas.php" class="thin white-text"><i class="icon-menu material-icons">perm_identity</i>Aulas</a></li>
                    <li><a href="midia.php" class="thin white-text"><i class="icon-menu material-icons">play_circle_filled</i>Mídia</a></li>
                    <li><a href="projetos.php" class="thin white-text"><i class="icon-menu material-icons">work</i>Projetos</a></li>
                </ul>
            </div>
        </nav>
    </div>
<?php } ?>
