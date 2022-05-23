<?php

namespace App\Services\Photo;

use App\Models\Photo;
use Illuminate\Support\Facades\Storage;

class Service
{

    public function store($data)
    {
        $file = $data['file'];
        unset($data['file']);
        $file = Storage::disk('public')->put('/images', $file);
        $data['path'] = Storage::path($file);
        $data['url'] = Storage::url($file);
        $data['size'] = Storage::disk('public')->size($file);
        Photo::firstOrCreate($data);
    }

    public function update($photo,$data)
    {
        $file = $data['file'];
        unset($data['file']);
        $file = Storage::disk('public')->put('/images', $file);
        $data['path'] = Storage::path($file);
        $data['url'] = Storage::url($file);
        $data['size'] = Storage::disk('public')->size($file);
        $photo->update($data);
    }
}
