<?php

namespace App\Http\Controllers\Admin\Topics;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Crop;
use App\Models\Topic;

class ShowController extends Controller
{
    public function __invoke(Topic $topic)
    {
        return view('admin.topic.show',compact('topic'));
    }
}
