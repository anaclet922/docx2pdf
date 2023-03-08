<?php

	require 'vendor/autoload.php';

	$domPdfPath = 'vendor/dompdf/dompdf';
    \PhpOffice\PhpWord\Settings::setPdfRendererPath($domPdfPath);
    \PhpOffice\PhpWord\Settings::setPdfRendererName('DomPDF');
     
    //Load word file
    $Content = \PhpOffice\PhpWord\IOFactory::load('test-files/test.docx'); 

    //Save it into PDF
    $PDFWriter = \PhpOffice\PhpWord\IOFactory::createWriter($Content,'PDF');
    $PDFWriter->save('test-files/new-result-'. time() .'.pdf'); 
    echo 'File has been successfully converted';