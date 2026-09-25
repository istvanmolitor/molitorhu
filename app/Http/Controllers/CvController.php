<?php

namespace App\Http\Controllers;

use App\Repositories\PortfolioRepository;
use Barryvdh\DomPDF\Facade\Pdf;
use Symfony\Component\HttpFoundation\Response;

class CvController extends Controller
{
    public function __construct(private readonly PortfolioRepository $portfolio) {}

    /**
     * Handle the incoming request.
     */
    public function __invoke(): Response
    {
        $pdf = Pdf::loadView('cv', $this->portfolio->data());

        $filename = app()->getLocale() === 'en'
            ? 'Istvan-Molitor-CV.pdf'
            : 'Molitor-Istvan-Oneletrajz.pdf';

        return $pdf->download($filename);
    }
}
