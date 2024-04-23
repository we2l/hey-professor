<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Client\Response;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function store(): RedirectResponse
    {
        Question::query()->create(
            request()->validate([
                'question' => 'required',
            ])
        );
        return to_route('dashboard');
    }
}
