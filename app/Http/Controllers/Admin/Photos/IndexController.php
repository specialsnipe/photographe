<?php

namespace App\Http\Controllers\Admin\Photos;

use App\Http\Controllers\Controller;
use App\Models\Photo;

class IndexController extends Controller
{
    public function __invoke()
    {
        $photos = Photo::paginate(8);
        return view('admin.photo.index', compact('photos'));
    }
}
