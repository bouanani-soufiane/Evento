<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use PDF;

use Illuminate\Http\Request;

class PDFController extends Controller
{

    public function index()
    {
        return view('pdf_ticket');
    }

    public function generatePDF(Request $request)
    {
        $data = $request->all();
        $data['username'] = Auth::user()->name;
        $pdf = PDF::loadView('pdf_ticket', compact('data'));
        return $pdf->download('document.pdf');
    }
}
