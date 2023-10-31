<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Component;
use App\Models\ComponentData;
use App\Models\User;

class IndexController extends Controller
{
    public function show()
    {
        $id = 1;
        $invitation = User::where('id', $id)->with(['componentData' => function($query){
            $query->where('component_id', '4');
        }])->first();

        return view('component-index', compact('invitation'));
    }
}
