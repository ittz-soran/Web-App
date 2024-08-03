<div>
    <div class="container">

        
        <div>
            <livewire:CraetePoint />
        </div>

        
        <input type="text" wire:model.live.debounce.250ms="search">
        
        </div>
            @if (session('status'))
                <div class="alert alert-danger">
                    {{ session('status') }}
                </div>
            @endif
        <div class=" d-flex flex-wrap justify-content-start">
            @forelse ($points as $point)
                <div class="">
                    <div class="card m-2" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $point->name }}</h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary">{{ $point->address }}</h6>
                            <button wire:click="Delete({{$point->id}})" class="btn btn-danger btn-sm">Delete</button>
                            <button wire:click="findPoint({{$point->id}})" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#editPoint{{$point->id}}">Edit</button>
                            <a wire:click="findPoint({{$point->id}})" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#editPoint{{$point->id}}">View</a>

                        
                            
                            <!-- Modal -->
                            <div wire:ignore.self class="modal fade" id="editPoint{{$point->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Point Update</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    
                                    <div class="modal-body">
                                        <form wire:submit.prevent="update({{$point->id}})" >
                                            <div class="mb-3">
                                            <label class="form-label">Name</label>
                                            <input type="name" class="form-control @error('name') border-danger @enderror" wire:model.defer="name">
                                            @error('name') 
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                            </div>
                                            <div class="mb-3">
                                            <label class="form-label">Address</label>
                                            <input type="text" class="form-control @error('address') border-danger @enderror" wire:model.defer="address">
                                            @error('address') 
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                            </div>
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Update</button>
                                            
                                        </form>
                                    </div>
                                </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            @empty
                    No data found.
            @endforelse
        </div>

        @if ($paginate < $points->total())
        <div class="d-flex flex-wrap justify-content-center my-4">
            <button wire:click="loadMore">Load More</button>
        </div>
        @endif
        
    
    </div>
</div>
