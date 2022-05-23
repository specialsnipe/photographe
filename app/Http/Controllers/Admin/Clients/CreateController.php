<?php

namespace App\Http\Controllers\Admin\Clients;

use App\Http\Controllers\Controller;
use App\Models\Topic;

class CreateController extends Controller
{
    public function __invoke()
    {
        $topics = Topic::all();
        return view ('admin.client.create',compact('topics'));
    }
}
