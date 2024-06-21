<?php

namespace App\Http\Controllers;

use Dompdf\Dompdf;
use Dompdf\Options;
use Illuminate\Support\Facades\File;

class PdfController extends Controller
{
    public function generate()
    {
        // Renderize a visão (view) 'pdf.template'
        $html = view('pdf.template')->render();

        $options = new Options();
        $options->setIsRemoteEnabled(true); 

        $dompdf = new Dompdf($options);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->loadHtml($html);
        $dompdf->render();

        $outputPdfPath = public_path('Portifólio.pdf');
        File::put($outputPdfPath, $dompdf->output());

        return response()->json(['success' => true]);
    }

    public function viewPdf()
    {
        return response()->file(public_path('Portifólio.pdf'));
    }
}
