<?php

declare(strict_types = 1);

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\RedirectResponse;

class QuestionController extends Controller
{
    public function store(): RedirectResponse
    {
        $validatedData = request()->validate([
            'question' => ['required', 'string', 'min:10'],
        ]);
        Question::query()->create($validatedData);

        return to_route('dashboard');
    }
}
