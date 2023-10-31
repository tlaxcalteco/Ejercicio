<?php

namespace App\Livewire;
use Livewire\WithFileUploads;

use Livewire\Component;

class ComponentOne extends Component
{
    use WithFileUploads;

    public $photo1;
    public $photo2;
    public $photo3;
    public $title;
    public $description;
    public $title2;
    public $description2;
    public $title3;
    public $description3;
    public $isEditing = true;
    public $listeners = ['saveComponent' => 'saveComponentData'];
 
    public function updatedPhoto()
    {
        $this->validate([
            'photo1' => 'image|max:1024',
            'photo2' => 'image|max:1024',
            'photo3' => 'image|max:1024',
        ]);
    }

    public function mount($data = null)
    {
        $this->title = 'Title';
        $this->description = 'Description';
        $this->title2 = 'Title 2';
        $this->description2 = 'Description 2';
        $this->title3 = 'Title 3';
        $this->description3 = 'Description 3';
        if($data){
            $this->title = $data['title'];
            $this->description = $data['description'];
            $this->title2 = $data['title2'];
            $this->description2 = $data['description2'];
            $this->title3 = $data['title3'];
            $this->description3 = $data['description3'];
        }
    }

    public function saveComponentData()
    {
        $this->validate([
            'photo1' => 'image|max:1024',
            'photo2' => 'image|max:1024',
            'photo3' => 'image|max:1024',
        ]);

        $this->photo1->store('photos');
        $this->photo2->store('photos');
        $this->photo3->store('photos');

        $this->componentData = [
            'title' => $this->title,
            'description' => $this->description,
            'title2' => $this->title2,
            'description2' => $this->description2,
            'title3' => $this->title3,
            'description3' => $this->description3,
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
        return view('livewire.component-one');
    }
}
