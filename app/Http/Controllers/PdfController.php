<?php

namespace App\Http\Controllers;
use PDF;
use App\Models\Estudiante;
use Illuminate\Http\Request;

class PdfController extends Controller
{
    public function imprimirpersonas(Request $request)
    {
    $estudiantes=Estudiante::orderBy('id','ASC')->get();
    $pdf = \PDF::loadView('Pdf.estudiantesPDF',['estudiantes' => $estudiantes ]);
    $pdf->setPaper('carta', 'letter');
    return $pdf->stream();
    }   
}
