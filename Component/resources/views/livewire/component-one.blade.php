<div>
    <div class="container">
        <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        @if ($photo1)
                            <img src="{{ $photo1->temporaryUrl() }}">
                        @endif
                    
                        <input type="file" wire:model="photo1">
                    
                        @error('photo1') <span class="error">{{ $message }}</span> @enderror
                    
                        <div class="card-body">
                            <h5 class="card-title">
                                <input type="text" class="form-control" placeholder="Título" wire:model="title">
                            </h5>
                            <p class="card-text">
                                <textarea name="description" id="" cols="30" rows="5" class="form-control" placeholder="Descripción" wire:model="description"></textarea>
                            </p>
                            <a href="#" class="btn btn-primary">Ver más</a>
                        </div>
                    </div>
                </div>
    
                <div class="col-md-4">
                    <div class="card">
                        @if ($photo2)
                            <img src="{{ $photo2->temporaryUrl() }}">
                        @endif
                    
                        <input type="file" wire:model="photo2">
                    
                        @error('photo2') <span class="error">{{ $message }}</span> @enderror
                    
                        <div class="card-body">
                            <h5 class="card-title">
                                <input type="text" class="form-control" placeholder="Título" wire:model="title2">
                            </h5>
                            <p class="card-text">
                                <textarea name="description" id="" cols="30" rows="5" class="form-control" placeholder="Descripción" wire:model="description2"></textarea>
                            </p>
                            <a href="#" class="btn btn-primary">Ver más</a>
                        </div>
                    </div>
                </div>
    
                <div class="col-md-4">
                    <div class="card">
                        @if ($photo3)
                            <img src="{{ $photo3->temporaryUrl() }}">
                        @endif
                    
                        <input type="file" wire:model="photo3">
                    
                        @error('photo3') <span class="error">{{ $message }}</span> @enderror
                    
                        <div class="card-body">
                            <h5 class="card-title">
                                <input type="text" class="form-control" placeholder="Título" wire:model="title3">
                            </h5>
                            <p class="card-text">
                                <textarea name="description" id="" cols="30" rows="5" class="form-control" placeholder="Descripción" wire:model="description3"></textarea>
                            </p>
                            <a href="#" class="btn btn-primary">Ver más</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



