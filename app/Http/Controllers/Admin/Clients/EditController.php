<?php

namespace App\Http\Controllers\Admin\Clients;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Topic;

class EditController extends Controller
{
    public function __invoke(Client $client)
    {
        $topics = Topic::all();
        return view ('admin.client.edit',compact('client','topics'));
    }
}
