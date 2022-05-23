<?php

namespace App\Http\Controllers\Admin\Topics;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Crop;
use App\Models\Topic;

class DeleteController extends Controller
{
    public function __invoke(Topic $topic)
    {
        $topic->delete();
        return redirect()->route('admin.topic.index');
    }
}
