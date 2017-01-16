<!--MODAL-->
<div id="mail-modal" class="modal">
    <div class="modal-content modal-background">
        <form name="form-mail" action="mail.php" method="POST" class="form-horizontal" id="form-mail">

            <div class="row">
                <h5 class="center-align white-text thin">Fale conosco</h5>

                <div class="conteudo">
                    <div class="input-field col s12 m6 l6">
                        <input type="email" name="email" class="form-control white-text" required/>
                        <label>Seu E-mail</label>
                    </div>

                    <div class="input-field col s12 m6 l6">
                        <input type="text" name="assunto" class="form-control white-text" required/>
                        <label>Assunto</label>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="row input-field col s12 m12 l12">
                    <textarea name="mensagem" class="materialize-textarea textarea-color white-text" required></textarea>
                    <label for="textarea">Mensagem</label>
                </div>
            </div>
            <div class="row">
                <div class="form-group">
                    <div class="col s6 m6 l6 center-align">
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                    <div class="col s6 m6 l6 center-align">
                        <button type="reset" class="btn btn-primary">Limpar</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<!--FIM MODAL-->

<!--BTN PARA MODAL-->
<div class="fixed-action-btn horizontal" style="bottom: 45px; right: 24px;">
    <!--Para os botões que chamam modal, adiciona-se a classe modal-trigger e tag a, e no hrel insere-se o ID da modal a chamar-->

    <a class="btn tooltipped btn-floating btn-large modal-trigger" data-position="top" data-delay="30"
       data-tooltip="Contato" id="mailBtn" href="#mail-modal">
        <i class="large material-icons">email</i>
    </a>
    <a class="btn tooltipped btn-floating btn-large red" data-position="left" data-delay="30"
       data-tooltip="Voltar para o topo" id="topBtn" href="#menu-top">
        <i class="material-icons">navigation</i>
    </a>
</div>