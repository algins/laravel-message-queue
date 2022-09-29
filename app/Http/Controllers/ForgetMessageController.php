<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Artisan;

class ForgetMessageController extends Controller
{
    public function __invoke(string $uuid): RedirectResponse
    {
        Artisan::call('queue:forget ' . $uuid);
        flash(__('views.messages.forgot'))->success();

        return redirect()->route('index');
    }
}
