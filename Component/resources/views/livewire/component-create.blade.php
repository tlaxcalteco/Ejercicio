<div>
    <link href="assets/css/cropper.css" rel="stylesheet" />
    <link href="assets/css/index.css" rel="stylesheet" />
    <h1>Agregar Componente</h1>
    <ul>
        @foreach($availableComponents as $component => $label)
            <li wire:click="addComponent('{{ $component }}')">{{ $label }}</li>
        @endforeach
    </ul>
    @if(count($selectedComponents) >= 5)
        <p>Has alcanzado el máximo de 5 componentes.</p>
    @endif
    <div>
        @foreach($selectedComponents as $index => $componentData)
            <!-- Aquí utilizamos el nombre del componente obtenido desde la base de datos -->
            @livewire($componentData['component'], ['props' => $componentData['props']], key($index))
            <button wire:click="removeComponent({{ $index }})" class="btn btn-danger">Reset</button>
        @endforeach
    </div>

    <button wire:click="saveAll" class="btn btn-primary">Guardar</button>

        <!-- <div class="hidden" id="modal">
            <div class="card-content">
                <div class="card-header">
                    <p>Recorta tu foto</p>
                </div>
                <div class="card-body">
                    <div class="image-container">
                        <img src="" alt="" class="img-cropper" id="cropped-image">
                    </div>
                </div>
                <div class="card-footer">
                    <button class="btn primary" id="cut">Recortar</button>
                    <button class="btn secondary" id="close">Cancelar</button>
                </div>
            </div>
        </div> -->
</div>
