<?php $cliente = $data['cliente']; ?>
<?php
$this->view('home/cabecalho');
?>
<form id="contactForm" name="sentMessage" novalidate="novalidate" action="http://localhost:8080/contact/adicionaCliente"
    method="POST">
    <div class="control-group">
        <div class="form-group floating-label-form-group controls mb-0 pb-2">
            <label>Nome</label>
            <input id="id" name="id" type="hidden" value="<?= $cliente->idclientes; ?>">
            <input class="form-control" id="name" type="text" value="<?= $cliente->nome; ?>" placeholder="Nome"
                required="required" data-validation-required-message="Por favor, insira seu nome." />
            <p class="help-block text-danger"></p>
        </div>
    </div>
    <div class="control-group">
        <div class="form-group floating-label-form-group controls mb-0 pb-2">
            <label>Endereço de E-mail</label>
            <input class="form-control" id="email" type="email" value="<?= $cliente->email; ?>"
                placeholder="Endereço de E-mail" required="required"
                data-validation-required-message="Por favor, insira seu endereço de E-mail." />
            <p class="help-block text-danger"></p>
        </div>
    </div>
    <div class="control-group">
        <div class="form-group floating-label-form-group controls mb-0 pb-2">
            <label>Número de Telefone</label>
            <input class="form-control" id="phone" type="tel" value="<?= $cliente->telefone; ?>"
                placeholder="Número de Telefone" required="required"
                data-validation-required-message="Por favor, insira seu número de telefone." />
            <p class="help-block text-danger"></p>
        </div>
    </div>
    <div class="control-group">
        <div class="form-group floating-label-form-group controls mb-0 pb-2">
            <label>Mensagem</label>
            <textarea class="form-control" id="message" rows="5" value="<?= $cliente->mensagem; ?>"
                placeholder="Mensagem" required="required"
                data-validation-required-message="Por favor, insira sua mensagem."></textarea>
            <p class="help-block text-danger"></p>
        </div>
    </div>
    <br />
    <div id="success"></div>
    <div class="form-group"><button class="btn btn-primary btn-xl" id="sendMessageButton" type="submit">Enviar</button>
    </div>
</form>

<?php
$this->view('home/rodape');
?>