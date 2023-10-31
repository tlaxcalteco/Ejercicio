<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Component as ComponentModel;
use App\Models\ComponentData;
use App\Models\User;

class ComponentFour extends Component
{
    public $title;
    public $description;
    public $item1;
    public $item2;
    public $item3;
    public $description2;
    public $isEditing = true;
    public $listeners = ['saveComponent' => 'saveComponentData'];

    public function mount($data = null)
    {
        $this->title = 'Title';
        $this->description = 'Description';
        $this->item1 = 'Item 1';
        $this->item2 = 'Item 2';
        $this->item3 = 'Item 3';
        $this->description2 = 'Description 2';

        if($data){
            $this->title = $data['title'];
            $this->description = $data['description'];
            $this->items = $data['items'];
            $this->description2 = $data['description2'];
        }
    }

    public function saveComponentData()
    {
        $component = ComponentModel::firstOrCreate([
            'name' => 'Component Four',
            'model_type' => 'component-four',
        ]);

        $this->componentData = [
            'title' => $this->title,
            'description' => $this->description,
            'item1' => $this->item1,
            'item2' => $this->item2,
            'item3' => $this->item3,
            'description2' => $this->description2,
        ];

        foreach($this->componentData as $key => $body){
            ComponentData::create([
                'component_id' => $component->id,
                'user_id' => '1',
                'key' => $key,
                'value' => $body,
            ]);
        }
    }


    public function render()
    {
        return view('livewire.component-four');
    }
}
