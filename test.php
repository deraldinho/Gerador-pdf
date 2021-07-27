<?php

 require_once __dir__."/vendor/autoload.php";

function convert_pdf($string){

    $mpdf = new Mpdf\Mpdf();
    $mpdf->WriteHTML($string);
    return $mpdf->Output();

}

$string = '<form class="form-horizontal" action="/portal-servidor/gerador-pdf/gerarpdf.php" method="post">

    <div class="ba bb ph3">
        <h1 class="alinha">Termo de Compromisso</h1>
        <p><strong>Todos os campos são de preenchimento obrigatório.</strong></p>
        <br><br><br>
        <label>Nome Completo:</label>
        <input required="true" class="form-control" name="nome" id="nome" placeholder="Nome Completo" type="text" data-parsley-errors-messages-disabled>
        <br>
        <label>Matricula:</label>
        <input require="true" class="form-control" name="mat" id="mat" placeholder="11111" type="number" data-parsley-errors-messages-disabled>
        <br>
        <label>CPF (somente números):</label>
        <input required="true" class="form-control" name="cpf" id="cpf" placeholder="" type="number" data-parsley-errors-messages-disabled>
        <br>
        <label>Telefone Contato (Residencial ou Celular):</label>
        <input required="true" class="form-control" name="tel-trab" id="cel" placeholder="DDD 000000000" type="number" data-parsley-errors-messages-disabled>
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
        <br>
        <br>
    </div>
</form>';
    convert_pdf($string,"/vendor/autoload.php")
?>