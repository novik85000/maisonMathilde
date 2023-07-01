<div>
    <div>
        ok {{ $number }}  
    </div>
    <input type="text" wire:model="testText">
    <button wire:click="save"> save </button>
    <div> {{ $testText }} </div>
    <button wire:click="sum">  + </button>
</div>
