<?php

namespace App\Http\Controllers\Admin\Photos;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Crop;
use App\Models\Photo;
use App\Models\Topic;

class DeleteController extends Controller
{
    public function __invoke(Photo $photo)
    {
        $photo->delete();
        return redirect()->route('admin.photo.index');
    }
}
