<?php

namespace App\Http\Controllers\Admin\Photos;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Crop;
use App\Models\Photo;
use App\Models\Topic;

class ShowController extends Controller
{
    public function __invoke(Photo $photo)
    {
        return view('admin.photo.show',compact('photo'));
    }
}
