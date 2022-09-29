<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redis;

class MessageController extends Controller
{
    public function index(): View
    {
        $queuedMessages = Redis::connection()->command('lrange', ['queues:default', 0, -1]);
        $failedMessages = DB::table('failed_jobs')->get();

        return view('messages', compact('queuedMessages', 'failedMessages'));
    }
}
