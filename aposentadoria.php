
<form class="form-horizontal" action="/portal-servidor/gerador-pdf/gerarpdf.php" method="post">

<div class="ba bb ph3">
    <h1 class="alinha">Comunicado de Aposentadoria</h1>
    <p><strong>Todos os campos são de preenchimento obrigatório.</strong></p>
    <br><br><br>
    <label>Nome Completo:</label>
    <input required="true" class="form-control" name="nome" id="nome" placeholder="Nome Completo" type="text" data-parsley-errors-messages-disabled>
    <br>
    <label>CPF (somente números):</label>
    <input require="true" class="form-control" name="cpf" id="cpf" placeholder="" type="number" data-parsley-errors-messages-disabled>
    <br>
    <label>Telefone:</label>
    <input required="true" class="form-control" name="tel" id="tel" placeholder="DDD 000000000" type="number" data-parsley-errors-messages-disabled>
    <br>
    <label>Data do Desligamento:
    <input required="true" class="form-control" name="dt-desl" id="dt-desl" placeholder="Data do desligamento" type="text" data-parsley-datebr="" data-parsley-errors-messages-disabled>
    <br>
    <label>Data da Liberação do INSS:
    <input required="true" class="form-control" name="dt-lib" id="dt-lib" placeholder="Data da liberação" type="text" data-parsley-datebr="" data-parsley-errors-messages-disabled>
    <br>
    <label>Número do Benefício:
    <input required="true" class="form-control" name="beneficio" id="beneficio" placeholder="Numero Beneficio" type="number" data-parsley-errors-messages-disabled>
    <br>
    <label>Tipo de Aposentadoria:</label>
    <select require="true" name="curso" class="form-control">
        <option value="">Selecione</option>
        <option value="1">Idade</option>
        <option value="2">Tempo de Contribuição</option>
        <option value="3">Invalidez</option>
        <option value="4">Especial</option>
    </select>
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