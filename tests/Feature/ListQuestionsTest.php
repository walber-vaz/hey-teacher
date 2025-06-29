<?php

declare(strict_types = 1);

use App\Models\Question;
use App\Models\User;

use function Pest\Laravel\actingAs;
use function Pest\Laravel\get;

it('should list all questions', function () {
    $user      = User::factory()->create();
    $questions = Question::factory()->count(5)->create();

    actingAs($user);
    $response = get(route('dashboard'));

    /** @var Question $q */
    foreach ($questions as $q) {
        $response->assertSee($q->question);
    }
});
