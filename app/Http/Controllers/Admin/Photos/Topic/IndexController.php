<?php

namespace App\Http\Controllers\Admin\Photos\Topic;

use App\Http\Controllers\Controller;
use App\Models\Topic;

class IndexController extends Controller
{
    public function __invoke(Topic $topic)
    {

        $photos = $topic->photos()->paginate(8);
        return view('admin.photo.index', compact('photos'));
    }
}
