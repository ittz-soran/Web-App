<div class=" container">
    Nothing in the world is as soft and yielding as water.
    <br>
    {{$number}}
    <br>
        <div class="" style="">
        <button class="btn btn-primary" wire:click="increment">+</button>
        <button wire:click="decrement">-</button>
        <br>
        </div>


    <input type="text" wire:model.live="name" placeholder="Live">
    <br>
    <input type="text" wire:model.lazy="name" placeholder="Lazy">
    <br>
    <input type="text" wire:model.live.debounce.500ms="name" placeholder="500ms">
    <br>
    {{$name}}

    <br>
    @foreach ($points as $Point)
    <div class="grid text-center">
        <div class="card m-2" style="width: 18rem;">
            <div class="card-body">
            <h5 class="card-title">{{$Point->name}}</h5>
            <h6 class="card-subtitle mb-2 text-body-secondary">{{$Point->address}}</h6>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="card-link">Card link</a>
            <a href="#" class="card-link">Another link</a>
            </div>
        </div>
    </div>
    @endforeach
   
</div>
