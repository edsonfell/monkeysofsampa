<?php
//$path_parts = pathinfo(__FILE__);
//$pagina = $path_parts['filename'];

$pagina = basename($_SERVER['REQUEST_URI'], ".php");

if ($pagina == "index") { ?>
    <!-- menu de navegação para index -->
    <div id="menu-top">
        <nav>
            <div class="nav-wrapper z-depth-1">
                <a href="index" class="brand-logo center"><img class="logo-menu" src="img/logo-bar.png"></a>
                <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>

                <ul class="menu right hide-on-med-and-down">
                    <li><a href="pages/aulas" class="thin"><i class="icon-menu material-icons">perm_identity</i>Aulas</a></li>
                    <li><a href="pages/midia" class="thin"><i class="icon-menu material-icons">play_circle_filled</i>Mídia</a></li>
                    <li><a href="pages/projetos" class="thin"><i class="icon-menu material-icons">work</i>Projetos</a></li>
                </ul>

                <ul class="menu side-nav" id="mobile-demo">
                    <li class="active"><a href="index" class="thin white-text"><i class="icon-menu material-icons">store</i>Início</a></li>
                    <li><a href="pages/aulas" class="thin white-text"><i class="icon-menu material-icons">perm_identity</i>Aulas</a></li>
                    <li><a href="pages/midia" class="thin white-text"><i class="icon-menu material-icons">play_circle_filled</i>Mídia</a></li>
                    <li><a href="pages/projetos" class="thin white-text"><i class="icon-menu material-icons">work</i>Projetos</a></li>
                </ul>

            </div>
        </nav>
    </div>
<?php } else { ?>
    <!-- menu de navegação para as pages -->
    <div id="menu-top">
        <nav>
            <div class="nav-wrapper z-depth-1">
                <a href="../index" class="brand-logo center"><img class="logo-menu" src="../img/logo-bar.png"></a>
                <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>

                <ul class="menu right hide-on-med-and-down">
                    <li <?php if($pagina == 'aulas'){echo 'class="active"';} ?>><a href="aulas" class="thin"><i class="icon-menu material-icons">perm_identity</i>Aulas</a></li>
                    <li <?php if($pagina == 'midia'){echo 'class="active"';} ?>><a href="midia" class="thin"><i class="icon-menu material-icons">play_circle_filled</i>Mídia</a></li>
                    <li <?php if($pagina == 'projetos'){echo 'class="active"';} ?>><a href="projetos" class="thin"><i class="icon-menu material-icons">work</i>Projetos</a></li>
                </ul>

                <ul class="menu side-nav" id="mobile-demo">
                    <li><a href="../index" class="thin white-text"><i class="icon-menu material-icons">store</i>Início</a></li>
                    <li <?php if($pagina == 'aulas'){echo 'class="active"';} ?>><a href="aulas" class="thin white-text"><i class="icon-menu material-icons">perm_identity</i>Aulas</a></li>
                    <li <?php if($pagina == 'midia'){echo 'class="active"';} ?>><a href="midia" class="thin white-text"><i class="icon-menu material-icons">play_circle_filled</i>Mídia</a></li>
                    <li <?php if($pagina == 'projetos'){echo 'class="active"';} ?>><a href="projetos" class="thin white-text"><i class="icon-menu material-icons">work</i>Projetos</a></li>
                </ul>
            </div>
        </nav>
    </div>
<?php } ?>
