<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Component as ComponentModel;
use App\Models\ComponentData;
use App\Models\User;


class ComponentCreate extends Component
{
    public $selectedComponents = [];
    public $availableComponents = [];
    public $componentChangesSaved = [];

    public function render()
    {
        $this->availableComponents = ComponentModel::pluck('name', 'model_type')->toArray();
        return view('livewire.component-create');
    }

    public function addComponent($component)
    {
        if (count($this->selectedComponents) < 5) {
            $this->selectedComponents[] = ['component' => $component, 'props' => []];
        }
    }

    public function removeComponent($index)
    {
        unset($this->selectedComponents[$index]);
    }

    public function updateComponent($index, $props)
    {
        $this->selectedComponents[$index]['props'] = $props;
    }

    public function saveAll()
    {
        foreach ($this->selectedComponents as $index => $componentData) {
            $componentName = $componentData['component'];
            $componentRecord = ComponentModel::where('name', $componentName)->first();
            $component->saveComponentData();
            $this->componentChangesSaved[$index] = true;
        }
    }
}
