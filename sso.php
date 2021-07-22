<style>
    .alinha{
        text-align: center !important
    }
</style>

<form class="form-horizontal" action="/portal-servidor/gerador-pdf/gerarpdf.php" method="post">
    <div class="ba bb ph3">
        <h1 class="alinha">Comunicado de Aposentadoria</h1>
        <p><strong>Todos os campos são de preenchimento obrigatório.</strong></p>
        <br><br><br>
        <label>Nome Completo:</label>
        <input required="true" class="form-control" name="nome" id="nome" placeholder="Nome Completo" type="text" data-parsley-errors-messages-disabled>
        <br>
        <label>Matricula:</label>
        <input require="true" class="form-control" name="mat" id="mat" placeholder="11111" type="number" data-parsley-errors-messages-disabled>
        <br>
        <label>Secretaria/Setor:</label>
        <input required="true" class="form-control" name="setor" id="setor" placeholder="Secretaria e setor" type="text" data-parsley-errors-messages-disabled>
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
        <label>CEP:</label>
        <input required="true" class="form-control" name="cep" id="cep" placeholder="00000-000" type="text" data-parsley-errors-messages-disabled>
        <br>
        <label>Telefone:</label>
        <input required="true" class="form-control" name="cel" id="cel" placeholder="DDD 000000000" type="number" data-parsley-errors-messages-disabled>
        <br>
        <label>Chefia Imediata:</label>
        <input required="true" class="form-control" name="chefia" id="chefia" placeholder="" type="text" data-parsley-errors-messages-disabled>
        <br>
        <h3 class="alinha">SAÚDE OCUPACIONAL</h3><br>
        <br>
        <input type="checkbox" id="doc-inss" name="doc-inss" value="">
        <label for="op1"> Documentação INSS</label><br>
        <input type="checkbox" id="declaracao" name="declaracao" value="">
        <label for="op2"> Declarações</label><br>
        <input type="checkbox" id="ret-inss" name="ret-inss" value="">
        <label for="op3"> Retorno INSS</label><br>
        <input type="checkbox" id="ajuste" name="ajuste" value="">
        <label for="op4"> Ajustamento Funcional</label><br>
        <br>
        <h3 class="alinha">SEGURANÇA DO TRABALHO</h3><br>
        <br>
        <input type="checkbox" id="" name="" value="">
        <label for="vehicle1"> Adiocional de Insalubridade e Periculosidade</label><br>
        <input type="checkbox" id="" name="" value="">
        <label for="vehicle1"> Perfil Profissiográfico Previdenciário</label><br>
        <input type="checkbox" id="" name="" value="">
        <label for="vehicle1"> Equipamento de Proteção Individual</label><br>
        <input type="checkbox" id="" name="" value="">
        <label for="vehicle1"> Comunicação de Acidente de Trabalho</label><br>
        <input type="checkbox" id="" name="" value="">
        <label for="vehicle1"> Visita Técnica</label><br>
        <br>
        <h3 class="alinha">SERVIÇO SOCIAL</h3><br>
        <br>
        <input type="checkbox" id="" name="" value="">
        <label for="vehicle1"> Acompanhamento de Servidor</label><br>
        <input type="checkbox" id="" name="" value="">
        <label for="vehicle1"> Declarações</label><br>
        <input type="checkbox" id="" name="" value="">
        <label for="vehicle1"> Seguro de Vida</label><br>
        <input type="checkbox" id="" name="" value="">
        <label for="vehicle1"> Parecer</label><br>
        <input type="checkbox" id="" name="" value="">
        <label for="vehicle1"> Visita Domiciliar/Institucional</label><br>
        <input type="checkbox" id="" name="" value="">
        <label for="vehicle1"> Ajustamento Funcional</label><br>
        <br>
        <labe>Outros:</label>
        <input required="true" class="form-control" name="outros" id="outros" placeholder="" type="text" data-parsley-errors-messages-disabled>
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