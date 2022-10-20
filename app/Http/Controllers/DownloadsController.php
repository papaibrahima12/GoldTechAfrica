<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class DownloadsController extends Controller
{
    public function getDownload()
{
    //PDF file is stored under project/public/download/info.pdf
    $file= public_path(). "\docs\projet.pdf";

    $headers = array(
              'Content-Type: application/pdf',
            );

    return Response::download($file, 'projet_kiganda.pdf', $headers);
}
}
