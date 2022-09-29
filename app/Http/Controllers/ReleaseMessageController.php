<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Artisan;

class ReleaseMessageController extends Controller
{
    public function __invoke(string $uuid): RedirectResponse
    {
        Artisan::call('queue:retry ' . $uuid);
        flash(__('views.messages.released'))->success();

        return redirect()->route('index');
    }
}
