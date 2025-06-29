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
            'question' => ['required', 'string', 'min:10', 'ends_with:?'],
        ], [
            'question.required'  => 'A pergunta é obrigatória.',
            'question.string'    => 'A pergunta deve ser um texto válido.',
            'question.min'       => 'A pergunta deve ter pelo menos 10 caracteres.',
            'question.ends_with' => 'A pergunta deve terminar com um ponto de interrogação (?).',
        ]);
        Question::query()->create($validatedData);

        return to_route('dashboard');
    }
}
