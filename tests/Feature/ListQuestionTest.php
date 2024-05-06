<?php

use App\Models\Question;
use App\Models\User;
use function Pest\Laravel\actingAs;

it('should list all the questions', function () {
    $user = User::factory()->create();

    actingAs($user);
    $questions = Question::factory()->count(5)->create();

    $response = \Pest\Laravel\get('dashboard');

    /** @var  Question $q */
    foreach($questions as $q) {
        $response->assertSee($q->question);
    }
});
