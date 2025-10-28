<div>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
    
    
    <h2 class="d-3 text-dark">{{ $count }}</h2>
    
    <button wire:click="increment" class="btn btn-outline-secondary">+</button>
    <button wire:click="decrement" class="btn btn-outline-secondary">-</button>
    
    <button wire:click="incrementByNum({{$myNum}})" class="btn btn-outline-secondary">+{{$myNum}}</button>
    <button wire:click="decrementByNum({{$myNum}})" class="btn btn-outline-secondary">-{{$myNum}}</button>
    
    
    
</div>
