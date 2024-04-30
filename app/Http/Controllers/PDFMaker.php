<?php

namespace App\Http\Controllers;

use App\Exports\PDFdataExport;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\ExpressionDesBessoins as ModelsExpressionDesBessoins;
use Maatwebsite\Excel\Facades\Excel;

class PDFMaker extends Controller
{
    public function MYPDF(Request $request)
    {

        $PDFdata = $request->session()->get('PDFdata', []);

        $PDFdataAttributes = array_map(function ($item) {
            return $item->getAttributes();
        }, $PDFdata);

        // dd($PDFdataAttributes);

        // $domaines = array_column($PDFdataAttributes, 'theme');
        //dd($domaines);



        return view('PDFView', [
            'PDFdata' => $PDFdataAttributes
        ]);
    }

    public function OpenPDF(Request $request)
    {


        $PDFdata = $request->session()->get('PDFdata', []);
        $pdf = Pdf::loadView('PDFView', compact('PDFdata'));
        return $pdf->stream('expressionDesBessoins.pdf');
    }

    // public function DownlodPDF(Request $request){

    //     $PDFdata = $request->session()->get('PDFdata', []);  
    //     return Excel::download(new PDFdataExport($PDFdata), 'Expression-des-besoins.xlsx');
    // }
    public function DownlodPDF(Request $request)
    {
        $PDFdata = $request->session()->get('PDFdata', []);
        $pdf = Pdf::loadView('PDFView', compact('PDFdata'));    
          return $pdf->download('expressionDesBessoins.pdf');
    }
}
