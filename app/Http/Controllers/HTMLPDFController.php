<?php

namespace App\Http\Controllers;

use App\Helpers\Helpers;
use App\Models\Mobile_warranty;
use App\Models\Wallet;
use Illuminate\Http\Request;
use App\Helpers\MyCustomPDFWithWatermark;
use TCPDF;
use TCPDF_FONTS;
use URL;
use View;
use Elibyy\TCPDF\Facades\TCPDF as PDF;

class HTMLPDFController extends Controller
{
    /*public function __construct()
    {
        $this->middleware(['auth']);
    }*/
//    public function htmlPdf($id)
//    {
//        $warranty=self::getPrintWarranty($id)['warranty'];
//        $uses=self::getPrintWarranty($id)['uses'];
//
//        $view = \View::make('profile.warranty.printWarranty',compact(['warranty','uses']));
//        $html = $view->render();
//
//        $pdf = new TCPDF();
//
//        $fontname=TCPDF_FONTS::addTTFfont($_SERVER["DOCUMENT_ROOT"]."front/ttf/HiwebNazanin.ttf", '', '', 32);
//
//        $pdf->SetFont($fontname);
//        $lg = Array();
//        $lg['a_meta_charset'] = 'UTF-8';
//        $lg['a_meta_dir'] = 'rtl';
//        $lg['a_meta_language'] = 'fa';
//        $lg['w_page'] = 'page';
//        $pdf->setRTL(true);
//
//        $pdf->SetTitle('Hello World');
//        $pdf->AddPage();
//// set some language-dependent strings (optional)
//        $pdf->setLanguageArray($lg);
//        $pdf->writeHTML($html, true, false, true, false, '');
//        $pdf->Output('hello_world.pdf');
//    }

    public function htmlPdf($id)
    {
        // selecting PDF view

        $warranty=self::getPrintWarranty($id)['warranty'];
        $uses=self::getPrintWarranty($id)['uses'];
        if($warranty->owner_id==auth()->user()->id) {

            $pdf = new MyCustomPDFWithWatermark(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor('پیداسرویس');
        $pdf->SetTitle('فراگارانتی');
        $pdf->SetSubject('فراگارانتی پیداسرویس');
        $pdf->SetKeywords('TCPDF, warranty, peyda, peydaService, guide');

        //$header="<img src='".url('front/img/Logo.png')."'/>";

// set header and footer fonts
        $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
        $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
        $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
        $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
        $pdf->SetHeaderMargin(100);
        $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
        $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
        $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language dependent data:
        $lg = Array();
        $lg['a_meta_charset'] = 'UTF-8';
        $lg['a_meta_dir'] = 'rtl';
        $lg['a_meta_language'] = 'fa';
        $lg['w_page'] = 'page';

// set some language-dependent strings (optional)
        $pdf->setLanguageArray($lg);

// ---------------------------------------------------------

// set font
        $pdf->SetFont('HiwebNazanin', '', 12);

// add a page
        $pdf->AddPage();

        $header = '<img src="'.$_SERVER["DOCUMENT_ROOT"]."front/img/Logo.png".'" />';
        $mylogo=$_SERVER["DOCUMENT_ROOT"]."front/img/Logo.png";
// set default header data
        $pdf->Image($mylogo,95,2,20,20,'PNG','https://peydaservice.com','',true,'300','',false,false,0,false,false,false);
        $pdf->SetXY(15, 20);
// Persian and English content
        $htmlpersian = '';
        $pdf->WriteHTML($htmlpersian, true, 0, true, 0);

// set LTR direction for english translation
        $pdf->setRTL(false);

        $pdf->SetFontSize(10);

// print newline
        $pdf->Ln();

// Persian and English content
        $tbl_header = '<table style="width: 638px;text-align: right; padding: 10px;" cellspacing="0">';
        $tbl_footer = '</table>';
        $tbl = '';

// foreach item in your array...
        $tbl .= '

    <tr>
        <td>'.Helpers::toPersianNumOnly($warranty->start_date).'<span style="color: purple;">تاریخ شروع: </span></td>
        <td>'.$warranty->activation_code.'<span style="color: purple;">شناسه: </span></td>
    </tr>
    <tr>
        <td>'.Helpers::toPersianNumOnly($warranty->remained_days).'<span style="color: purple;">تعداد روزهای باقیمانده: </span></td>
        <td>%'.Helpers::toPersianNumOnly($warranty->usable_percentage).'<span style="color: purple;">درصد باقیمانده: </span> </td>
    </tr>
    <tr>
        <td>'.Helpers::toPersianNumOnly($warranty->User->phone_num).'<span style="color: purple;">شماره همراه: </span></td>
        <td>'.$warranty->User->getFullNameAttribute(auth()->user()).'<span style="color: purple;">نام کاربر:  </span></td>
    </tr>
    <tr>
        <td>'.Helpers::toPersianNumOnly($warranty->User->postal_code).'<span style="color: purple;">کد پستی: </span></td>
        <td>'.Helpers::toPersianNumOnly($warranty->User->melli_code).'<span style="color: purple;">کد ملی:  </span></td>
    </tr>
    <tr>
        <td colspan="2" style="text-align: right"> '.$warranty->phoneName.'<span style="color: purple;">برند و مدل گوشی: </span></td>
    </tr>
    <tr>
        <td colspan="2" style="text-align: right"> '.$warranty->User->city->name.' - '.$warranty->User->address.'<span style="color: purple;">آدرس: </span></td>
    </tr>

';

        $pdf->SetFontSize(15,true);
        $pdf->writeHTML($tbl_header . $tbl . $tbl_footer, true, 0, true, 0);

        /*$htmlpersiantranslation = '<table><thead><th>شناسه</th><th>تاریخ شروع</th></thead><tbody></tbody></table>';
        $pdf->writeHTMLCell(0,0,0,0,$htmlpersiantranslation, 0, 1, 0, true, '', false);*/

// Restore RTL direction
        $pdf->setRTL(false);

// set font

// print newline
        $pdf->Ln();

        $pdf->SetFontSize(18,true);

        $pdf->Cell(0, 6, '',0,1,'C');
        $pdf->Ln();

        $pdf->Cell(0, 12, 'استفاده های فراگارانتی',0,1,'C');

        $pdf->SetFontSize(14,true);

        $tbl_header = '<table style="border:1px solid #585858 ; padding: 8px ;
 width: 638px;text-align: right;" cellspacing="0">';
        $tbl_footer = '</table>';
        $tbl = '';

// foreach item in your array...
        $tbl .= '<tr>
        <td style="border:1px solid #585858;"><span style="color: purple; padding-left: 4px;">عنوان درخواست استفاده</span></td>
        <td style="border:1px solid #585858;"><span style="color: purple;">میزان مصرف</span></td>
        <td style="border:1px solid #585858;"><span style="color: purple;border:1px solid #5d5d5d;">تاریخ ثبت درخواست</span></td>
    </tr>';

        foreach ($uses as $use) {
            $tbl .= '
                <tr>
                    <td style="border:1px solid #585858;">' . $use["title"]. '</td>
                    <td style="border:1px solid #585858;">' . Helpers::toPersianNumOnly($use["percentage"]) . '</td>
                    <td style="border:1px solid #585858;">' .Helpers::toPersianNumOnly($use["created_at_shamsi"]) . '</td>
                </tr>';
        }

        $pdf->SetFontSize(15,true);
        $pdf->writeHTML($tbl_header . $tbl . $tbl_footer, true, 0, true, 0);

        /*$htmlpersiantranslation = '<table><thead><th>شناسه</th><th>تاریخ شروع</th></thead><tbody></tbody></table>';
        $pdf->writeHTMLCell(0,0,0,0,$htmlpersiantranslation, 0, 1, 0, true, '', false);*/

// Restore RTL direction
        $pdf->setRTL(false);

// set font

// print newline
        $pdf->Ln();

// Arabic and English content

        /*$pdf->SetFontSize(14,true);

        $pdf->Cell(0, 12, 'بِسْمِ اللهِ الرَّحْمنِ الرَّحِيمِ',0,1,'C');
        $htmlcontent = 'تمَّ بِحمد الله حلّ مشكلة الكتابة باللغة العربية في ملفات الـ<span color="#FF0000">PDF</span> مع دعم الكتابة <span color="#0000FF">من اليمين إلى اليسار</span> و<span color="#009900">الحركَات</span> .<br />تم الحل بواسطة <span color="#993399">صالح المطرفي و Asuni Nicola</span>  . ';
        $pdf->WriteHTML($htmlcontent, true, 0, true, 0);

// set LTR direction for english translation
        $pdf->setRTL(false);

// print newline
        $pdf->Ln();

        $pdf->SetFont('aealarabiya', '', 18);

// Arabic and English content
        $htmlcontent2 = '<span color="#0000ff">This is Arabic "العربية" Example With TCPDF.</span>';
        $pdf->WriteHTML($htmlcontent2, true, 0, true, 0);

// ---------------------------------------------------------*/

//Close and output PDF document
        $pdf->Output('example_018.pdf', 'I');
        }else{
            abort(404);
        }
    }
}
