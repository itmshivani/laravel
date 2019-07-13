<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use PDFMerger;

class Mergecontroller extends Controller
{
     public function index()
    {
        // Absolute path of the PDFs to merge
        // In this example we have them inside the /public folder
        // of the project
        $pdfFile1Path = public_path() . '/upload';
        $pdfFile2Path = public_path() . '/upload';
        

        // Create an instance of PDFMerger
        $pdf = new PDFMerger();

        // Add 2 PDFs to the final PDF
        $pdf->addPDF($pdfFile1Path, 'all');
        $pdf->addPDF($pdfFile2Path, 'all');

        // Generate download of "mergedpdf.pdf"
        $pdf->merge('download', "mergedpdf.pdf");
    }
}

