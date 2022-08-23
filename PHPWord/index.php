<?php

require __DIR__.'/bootstrap.php';

//Cria Template
$templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor('docs/modelos/DEDETIZACAO.docx');

//Edita dados
// $templateProcessor->setValue('valor1', 'Nicolau');
// $templateProcessor->setValue('valor2', 'Foda');
// $templateProcessor->setValue('valor3', 'Ambientalis');

$templateProcessor->setValues(array(
    'socialname' => 'Empresa do Nicollas Feitosa', 
    'logradouro' => 'Avenida Maestro Rubens Parada',
    'numero' => '676',
    'bairro' => 'Jardim Boa Esperança',
    'municipio' => 'Araras-SP',
    'cep' => '13604-131',
    'cnpj' => '05.570.714/0001-59',
    'dataexecucao' => '30/09/2020',
    'datavalidadeDede' => '30/03/2021',
    'datavalidadeRato' => '31/12/2020',
    'mesdigito' => '03',
    'mesextenso' => 'tres',
    'dataextenso' => '30 de Setembro de 2020'
));

header("Content-Disposition: attachment; filename='exemplo.docx'");
$templateProcessor->saveAs('docs/documento.docx');
