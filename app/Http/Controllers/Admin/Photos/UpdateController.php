<?php

namespace App\Http\Controllers\Admin\Photos;

use App\Http\Requests\Admin\Photos\UpdateRequest;
use App\Models\Photo;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, Photo $photo)
    {
        $data = $request->validated();

        $this->service->update($photo, $data);


        return redirect()->route('admin.photo.show', compact('photo'));
    }
}
