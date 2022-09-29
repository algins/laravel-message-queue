<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddMessageRequest;
use App\Mail\Message;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Mail;

class AddMessageController extends Controller
{
    public function __invoke(AddMessageRequest $request): RedirectResponse
    {
        $message = new Message($request->input('text'));
        Mail::to('email@example.com')->queue($message);
        flash(__('views.messages.added'))->success();

        return redirect()->route('index');
    }
}
