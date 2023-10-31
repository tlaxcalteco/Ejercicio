<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Component as ComponentModel;

class ComponentCreateController extends Controller
{
    public $selectedComponents = [];
    public $availableComponents = [];

    public function index()
    {
        $this->availableComponents = ComponentModel::pluck('name', 'model_type')->toArray();
        return view('Component-create');
    }

    public function addComponent($component)
    {
        if (count($this->selectedComponents) < 5) {
            $this->selectedComponents[] = ['component' => $component, 'props' => []];
        }
    }
}
