<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;

class HTMLPDFController extends Controller
{
    /*public function __construct()
    {
        $this->middleware(['auth']);
    }*/

    public function htmlPdf()
    {
        // selecting PDF view
        //dd('inja');
        $pdf = PDF::loadView('profile.htmlPdf');

        // download pdf file
        return $pdf->download('pdfview.pdf');
    }
}
