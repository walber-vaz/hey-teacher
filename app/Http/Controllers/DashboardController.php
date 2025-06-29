<?php

declare(strict_types = 1);

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function __invoke(): View
    {
        return view('dashboard', [
            'questions' => Question::all(),
        ]);
    }
}
