<?php

namespace App\Http\Controllers;

use App\Repositories\PortfolioRepository;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function __construct(private readonly PortfolioRepository $portfolio) {}

    /**
     * Handle the incoming request.
     */
    public function __invoke(): View
    {
        return view('welcome', $this->portfolio->data());
    }
}
