<style>
    .alinha{
        text-align: center !important
    }
</style>
<form class="form-horizontal" action="/portal-servidor/gerador-pdf/gerarpdf.php" method="post">

<div class="ba bb ph3">
    <h1 class="alinha">Requerimento para Fins de Aposentadoria</h1>
    <p><strong>Todos os campos são de preenchimento obrigatório.</strong></p>
    <br><br><br>
    <label>Nome Completo:</label>
    <input required="true" class="form-control" name="nome" id="nome" placeholder="Nome Completo" type="text" data-parsley-errors-messages-disabled>
    <br>
    <label>Matricula:</label>
    <input require="true" class="form-control" name="mat" id="mat" placeholder="11111" type="number" data-parsley-errors-messages-disabled>
    <br>
    <label>Data do Nascimento:
    <input required="true" class="form-control" name="dt-nasc" id="dt-nasc" placeholder="Data de nascimento" type="text" data-parsley-datebr="" data-parsley-errors-messages-disabled>
    <br>
    <label>Endereço:</label>
    <input required="true" class="form-control" name="end" id="end" placeholder="" type="text" data-parsley-errors-messages-disabled>
    <br>
    <label>Bairro</label>
    <input required="true" class="form-control" name="bairro" id="bairro" placeholder="" type="text" data-parsley-errors-messages-disabled>
    <br>
    <label>Cidade:</label>
    <input required="true" class="form-control" name="cidade" id="cidade" placeholder="" type="text" data-parsley-errors-messages-disabled>
    <br>
    <label>Local de Trabalho:</label>
    <input required="true" class="form-control" name="trabalho" id="trabalho" placeholder="Secretaria e setor" type="text" data-parsley-errors-messages-disabled>
    <br>
    <label>Telefone do Local de Trabalho:</label>
    <input required="true" class="form-control" name="tel-trab" id="tel-trab" placeholder="DDD 000000000" type="number" data-parsley-errors-messages-disabled>
    <br>
    <label>Telefone Contato (Residencial/Celular):</label>
    <input required="true" class="form-control" name="tel-trab" id="cel" placeholder="DDD 000000000" type="number" data-parsley-errors-messages-disabled>
    <br>
    <label>Email:</label>
    <input required="true" class="form-control" name="email" id="email" placeholder="" type="text" data-parsley-errors-messages-disabled>
    <br>
    <br>
    <h3 class="alinha">DOCUMENTOS PESSOAIS</h3>
    <br>
    <label>CPF (somente números):</label>
    <input required="true" class="form-control" name="cpf" id="cpf" placeholder="" type="number" data-parsley-errors-messages-disabled>
    <br>
    <label>PIS/PASEP:</label>
    <input required="true" class="form-control" name="pis" id="pis" placeholder="" type="number" data-parsley-errors-messages-disabled>
    <br>
    <label>Título de Eleitor:</label>
    <input required="true" class="form-control" name="titulo" id="titulo" placeholder="" type="number" data-parsley-errors-messages-disabled>
    <br>
    <label>RG (somente números):</label>
    <input required="true" class="form-control" name="rg" id="rg" placeholder="" type="number" data-parsley-errors-messages-disabled>
    <br>
    <label>Data de Expedição:</label>
    <input required="true" class="form-control" name="dt-rg" id="dt-rg" placeholder="" type="text" data-parsley-datebr="" data-parsley-errors-messages-disabled>
    <br>
    <br>
    <h3 class="alinha">FILIAÇÃO</h3>
    <br>
    <label>Nome do Pai:</label>
    <input required="true" class="form-control" name="nome-pai" id="nome-pai" placeholder="" type="text" data-parsley-errors-messages-disabled>
    <br>
    <label>Nome da Mãe:</label>
    <input required="true" class="form-control" name="nome-mae" id="nome-mae" placeholder="" type="text" data-parsley-errors-messages-disabled>
    <br>
    <label>Observações:</label>
    <input required="true" class="form-control" name="obs" id="obs" placeholder="" type="text" data-parsley-errors-messages-disabled>
    <br>
    <button name="upload" type="submit" class="btn btn-primary" id="solicitacao" onclick='return confirma();'>Gerar Solicitação</button>
    <br>
</div>
</form>

<script>
function confirma(){
    return confirm ('Os dados estão corretos? Confirme para gerar o arquivo PDF!');
}
</script>