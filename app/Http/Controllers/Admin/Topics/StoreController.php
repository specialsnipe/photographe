<?php

namespace App\Http\Controllers\Admin\Topics;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Topics\StoreRequest;
use App\Models\Topic;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        Topic::firstOrCreate($data);
        return redirect()->route('admin.topic.index');
    }
}
