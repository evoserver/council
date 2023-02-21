<?php

namespace App\Http\Controllers\Api;

use App\Channel;
use App\Http\Controllers\Controller;

class ChannelsController extends Controller
{
    /**
     * Fetch all channels.
     */
    public function index()
    {
            $channels = Channel::withoutGlobalScopes()->orderBy('name', 'asc')
                                    ->withCount('threads')->get();

            return view('admin.channels.index', compact('channels'));
//        return cache()->rememberForever('channels', function () {
//            return Channel::all();
        });
    }
}