<?php

namespace App\Http\Controllers;

use App\Models\MyUser;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PdfGeneratorController extends Controller
{
    public function index(Request $request, $id){
        $user=MyUser::where('id', $id)->first();
        $pdf=PDF::loadView('resume', compact('user'));
        return $pdf->stream('resume.pdf');
    }
}
