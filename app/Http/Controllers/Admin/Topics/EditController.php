<?php

namespace App\Http\Controllers\Admin\Topics;

use App\Http\Controllers\Controller;
use App\Models\Topic;

class EditController extends Controller
{
    public function __invoke(Topic $topic)
    {
        return view ('admin.topic.edit',compact('topic'));
    }
}
