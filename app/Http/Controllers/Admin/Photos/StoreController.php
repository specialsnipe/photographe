<?php

namespace App\Http\Controllers\Admin\Photos;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Photos\StoreRequest;
use App\Models\Photo;
use Illuminate\Support\Facades\Storage;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request)
    {

        $data = $request->validated();

        $this->service->store($data);

        return redirect()->route('admin.photo.index');
    }
}
