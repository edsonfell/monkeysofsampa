<?php
//$path_parts = pathinfo(__FILE__);
//$pagina = $path_parts['filename'];

$pagina = basename($_SERVER['REQUEST_URI'], ".php");

if ($pagina == "index") { ?>

    <footer class="page-footer">
        <div class="container">
            <div class="row">
                <div class="col l12 s12 m12">
                    <div class="container center-align">
                        <img class="logo-menu responsive-img" src="img/logo-bar.png">
                    </div>
                </div>
                <div class="col l12 s12 center-align">
                    <p class=" thin grey-text text-lighten-4">Siga-nos</p>
                    <a href="https://www.facebook.com/MonkeysOfSampa/" target="_blank"><img class="icon"
                                                                                            src="img/face-icon.png"></a>
                    <a href="https://www.instagram.com/monkeysofsampa/" target="_blank"><img class="icon"
                                                                                             src="img/insta-icon.png"></a>

                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                <h6 class="center">Desenvolvido por <a href="https://br.linkedin.com/in/edsonfell/pt" target="_blank"
                                                       class="">Edson Fell</a> e <a
                            href="https://br.linkedin.com/in/william-queiroz" target="_blank">William Queiroz</a>.</h6>
            </div>
        </div>
    </footer>

<?php } else { ?>

    <footer class="page-footer">
        <div class="container">
            <div class="row">
                <div class="col l12 s12 m12">
                    <div class="container center-align">
                        <img class="logo-menu responsive-img" src="../img/logo-bar.png">
                    </div>
                </div>
                <div class="col l12 s12 center-align">
                    <p class=" thin grey-text text-lighten-4">Siga-nos</p>
                    <a href="https://www.facebook.com/MonkeysOfSampa/" target="_blank"><img class="icon"
                                                                                            src="../img/face-icon.png"></a>
                    <a href="https://www.instagram.com/monkeysofsampa/" target="_blank"><img class="icon"
                                                                                             src="../img/insta-icon.png"></a>

                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                <h6 class="center">Desenvolvido por <a href="https://br.linkedin.com/in/edsonfell/pt" target="_blank"
                                                       class="">Edson Fell</a> e <a
                            href="https://br.linkedin.com/in/william-queiroz" target="_blank">William Queiroz</a>.</h6>
            </div>
        </div>
    </footer>
<?php } ?>