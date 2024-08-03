<div>
  <button wire:click="" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#NewPoint">Add New</button>

                        
                            
                            <!-- Modal -->
                            <div wire:ignore.self class="modal fade" id="NewPoint" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Add Point</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    
                                    <div class="modal-body">
                                        <form wire:submit.prevent="save" >
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
                                            <button type="submit" class="btn btn-primary">Add</button>
                                            
                                        </form>
                                    </div>
                                </div>
                                </div>
                            </div>
</div>