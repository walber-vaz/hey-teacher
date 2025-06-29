<?php

declare(strict_types = 1);

use App\Models\User;

use function Pest\Laravel\actingAs;
use function Pest\Laravel\assertDatabaseCount;
use function Pest\Laravel\assertDatabaseHas;
use function Pest\Laravel\post;

it('should be able to create a new question bigger than 255 characters', function () {
    $user = User::factory()->create();
    actingAs($user);

    $request = post(route('question.store'), [
        'question' => str_repeat('a', 260) . '?',
    ]);

    $request->assertRedirect(route('dashboard'));
    assertDatabaseCount('questions', 1);
    assertDatabaseHas('questions', ['question' => str_repeat('a', 260) . '?']);
});

it('should have a question ending with a question mark', function () {
    $user = User::factory()->create();
    actingAs($user);

    $request = post(route('question.store'), [
        'question' => 'This is a question',
    ]);

    $request->assertSessionHasErrors(['question' => 'A pergunta deve terminar com um ponto de interrogação (?).']);
    assertDatabaseCount('questions', 0);
});

it('should have at least 10 characters in the question', function () {
    $user = User::factory()->create();
    actingAs($user);

    $request = post(route('question.store'), [
        'question' => str_repeat('a', 8) . '?',
    ]);

    $request->assertSessionHasErrors(['question' => 'A pergunta deve ter pelo menos 10 caracteres.']);
    assertDatabaseCount('questions', 0);
});
