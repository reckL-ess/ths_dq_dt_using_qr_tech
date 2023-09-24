<?php

namespace App\Http\Controllers;

use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Http\Request;
use App\Models\Document;

class QRCodeController extends Controller
{
    public function generateQRCode($documentId)
    {
        $url = route('document.view', ['id' => $documentId]);

        return QrCode::size(300)->generate($url);
    }
}
