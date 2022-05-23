<?php

namespace App\Http\Controllers\Admin\Topics;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Topics\UpdateRequest;
use App\Models\Topic;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Topic $topic)
    {

        $data = $request->validated();
        $topic->update($data);
        return redirect()->route('admin.topic.show',compact('topic'));
    }
}
