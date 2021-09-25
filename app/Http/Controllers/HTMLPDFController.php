<?php

namespace App\Http\Controllers;

use App\Models\Mobile_warranty;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;

class HTMLPDFController extends Controller
{
    /*public function __construct()
    {
        $this->middleware(['auth']);
    }*/

    public function htmlPdf($id)
    {
        // selecting PDF view

        $warranty=self::getPrintWarranty($id)['warranty'];
        $uses=self::getPrintWarranty($id)['uses'];

        $pdf = PDF::loadView('profile.warranty.printWarranty',['warranty'=>$warranty,'uses'=>$uses])->setPaper('a4');

        // download pdf file
        return $pdf->stream('فراگارانتی.pdf', array('Attachment'=>0));
    }
}
