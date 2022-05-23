<?php

namespace App\Http\Controllers\Admin\Photos;

use App\Http\Controllers\Controller;
use App\Models\Photo;
use App\Models\Topic;

class EditController extends Controller
{
    public function __invoke(Photo $photo)
    {
        $topics = Topic::all();
        return view ('admin.photo.edit',compact('photo','topics'));
    }
}
