<?php

namespace App\Http\Controllers;

use App\Result;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        Carbon::setLocale('es');
        setlocale(LC_TIME, 'es_ES');
    }
    public function index() {
        $results= Result::latest()->paginate(6);
        return view('dashboard.index', compact('results') );
    }
}
