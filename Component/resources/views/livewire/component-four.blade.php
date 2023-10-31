<div>
    <div class="container">
        <h2 class="text-center mt-4">Sección de Información Adicional</h2>
        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron">
                    @if($isEditing)
                        <h3>
                            <input type="text" class="form-control" placeholder="Título" wire:model="title">
                        </h3>
                        <p>
                            <textarea name="description" id="" cols="30" rows="5" class="form-control" placeholder="Descripción" wire:model="description"></textarea>
                        </p>
                        <ul>
                            <li>
                                <input type="text" class="form-control" placeholder="Item 1" wire:model="item1">
                            </li>
                            <li>
                                <input type="text" class="form-control" placeholder="Item 2" wire:model="item2">
                            </li>
                            <li>
                                <input type="text" class="form-control" placeholder="Item 3" wire:model="item3">
                            </li>
                        </ul>
                        <p>
                            <textarea name="description" id="" cols="30" rows="5" class="form-control" placeholder="Descripción 2" wire:model="description2"></textarea>
                        </p>
                    @else
                        <h3>{{ $title }}</h3>
                        <p>{{ $description }}</p>
                        <ul>
                            <li>{{ $item1 }}</li>
                            <li>{{ $item2 }}</li>
                            <li>{{ $item3 }}</li>
                        </ul>
                        <p>{{ $description2 }}</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
