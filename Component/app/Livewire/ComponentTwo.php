<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Component as ComponentModel;
use App\Models\ComponentData;

class ComponentTwo extends Component
{
    public $title1;
    public $title2;
    public $description1;
    public $description2;
    public $isEditing = true;
    public $listeners = ['saveComponent' => 'saveComponentData'];

    public function mount($data = null)
    {
        $this->title1 = 'Title 1';
        $this->title2 = 'Title 2';
        $this->description1 = 'Description 1';
        $this->description2 = 'Description 2';

        if($data){
            $this->title1 = $data['title1'];
            $this->title2 = $data['title2'];
            $this->description1 = $data['description1'];
            $this->description2 = $data['description2'];
        }
    }

    public function render()
    {
        return view('livewire.component-two');
    }

    public function saveComponentData()
    {
        $component = ComponentModel::firstOrCreate([
            'name' => 'Component Two',
            'model_type' => 'component-two',
        ]);

        $this->componentData = [
            'title1' => $this->title1,
            'title2' => $this->title2,
            'description1' => $this->description1,
            'description2' => $this->description2,
        ];

        foreach($this->componentData as $key => $body){
            ComponentData::create([
                'component_id' => $component->id,
                'key' => $key,
                'value' => $body,
            ]);
        }
    }

}
