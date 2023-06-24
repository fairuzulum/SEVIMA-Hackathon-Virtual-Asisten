<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use OpenAI\Laravel\Facades\OpenAI;

class QuestionController extends Controller
{
    public function index()
    {
        $messages = collect(session('messages', []))->reject(fn ($messages) => $messages['role'] == 'system');
        return view('question');
    }
    public function store(Request $request)
    {
        $messages = $request->session()->get('messages', [
            ['role' => 'system', 'content' => 'You are laravel chatgpt clone']
        ]);
        $messages[] = ['role' => 'user', 'content' => $request->input('message')];
        $response = OpenAI::chat()->create([
            'model' => 'gpt-3.5-turbo',
            'messages' => $messages
        ]);
        $messages[] = ['role' => 'assistant', 'content' => $response->choices[0]->message->content];
        $request->session()->put('messages', $messages);
        return redirect('/');
    }
}
