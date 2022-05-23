<?php

namespace App\Http\Controllers\Admin\Clients;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Clients\UpdateRequest;
use App\Models\Client;
use App\Models\Crop;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Client $client)
    {

        $data = $request->validated();
        $client->update($data);
        return redirect()->route('admin.client.show',compact('client'));
    }
}
