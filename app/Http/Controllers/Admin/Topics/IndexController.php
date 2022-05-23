<?php

namespace App\Http\Controllers\Admin\Topics;

use App\Http\Controllers\Controller;
use App\Http\Filters\ClientFilter;
use App\Http\Requests\Admin\Clients\FilterRequest;
use App\Models\Client;
use App\Models\Topic;

class IndexController extends Controller
{
    public function __invoke()
    {
        $topics = Topic::all();
        return view('admin.topic.index', compact('topics'));
    }
}
