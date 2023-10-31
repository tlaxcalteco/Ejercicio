<div>
    <div class="container">
        <h1>Seccion de informacion</h1>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">
                            <input type="text" class="form-control" placeholder="Título" wire:model="title1">
                        </h2>
                        <p class="card-text">
                            <textarea name="description" id="" cols="30" rows="5" class="form-control" placeholder="Descripción" wire:model="description1"></textarea>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">
                            <input type="text" class="form-control" placeholder="Otro Título" wire:model="title2">
                        </h2>
                        <p class="card-text">
                            <textarea name="description" id="" cols="30" rows="5" class="form-control" placeholder="Otra Descripción" wire:model="description2"></textarea>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
