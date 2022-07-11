<div>
    <div class="mb-3">
        <input type="text" class="form-control" wire:model="nama">
    </div>


    <div class="mb-3">
        <input type="radio" name="jenis_kelamin" value="laki" wire:model="nama"> Laki:
        <input type="radio" name="jenis_kelamin" value="perempuan" wire:model="nama"> perempuan:
    </div>


    <div class="mb-3">
        <input
        @if($show_password == 'show')
        type="text"
        @else
        type="password"
        @endif 
        
        type="password"
        class="form-control">


        <label for=""> Show Password</label>
        <input type="checkbox"  value="show" wire:model="show_password">

    </div>

    
    
    Halo nama saya {{ $nama }}


</div>
