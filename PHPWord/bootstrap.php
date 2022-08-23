<?php

require __DIR__.'/vendor/autoload.php';

define('PHPWORD_BASE_DIR', realpath(__DIR__));

$domPdfPath = realpath(PHPWORD_BASE_DIR . '/vendor/dompdf/dompdf');
\PhpOffice\PhpWord\Settings::setPdfRendererPath($domPdfPath);
\PhpOffice\PhpWord\Settings::setPdfRendererName('DomPDF');