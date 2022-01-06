<a wire:click="activarmodalcrear"
    class="bg-gradient-to-r from-green-200 via-green-500  to-green-700 btn2 btn-green mx-2 py-2">
    <i class="fas fa-plus"></i>
</a>
<x-jet-dialog-modal wire:model='vermodalcrear'>
    <x-slot name="title">
        Crear nuevo Usuario
    </x-slot>
    <x-slot name="content">
        <div class="mb-4">
            <label class="block text-gray-500 font-bold mb-1 md:mb-0 pr-4">
                Nombre
            </label>
            <x-jet-input type="text" class="block w-full px-6 border py-1 mt-1" placeholder='Ejm: Samuel'
                wire:model.defer="nombre" />
            @error('nombre')
            <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-4">
            <label class="block text-gray-500 font-bold mb-1 md:mb-0 pr-4">
                Apellido
            </label>
            <x-jet-input type="text" class="block w-full px-6 border py-1 mt-1" placeholder='Ejm: Rojas'
                wire:model.defer="apellido" />
            @error('apellido')
            <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-4">
            <label class="block text-gray-500 font-bold mb-1 md:mb-0 pr-4">
                DNI
            </label>
            <x-jet-input type="text" class="block w-full px-6 border py-1 mt-1" placeholder='Ejm: 45698765'
                wire:model.defer="dni" />
            @error('dni')
            <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-4">
            <label class="block text-gray-500 font-bold mb-1 md:mb-0 pr-4">
                Direccion
            </label>
            <x-jet-input type="text" class="block w-full px-6 border py-1 mt-1" placeholder='Ejm: Ovalo Oasis Gr.4 Mz.P'
                wire:model.defer="direccion" />
            @error('direccion')
            <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-4">
            <label class="block text-gray-500 font-bold mb-1 md:mb-0 pr-4">
                Email
            </label>
            <x-jet-input type="text" class="block w-full px-6 border py-1 mt-1" placeholder='Ejm: prueba@hotmail.com'
                wire:model.defer="email" />
            @error('email')
            <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-4">
            <label class="block text-gray-500 font-bold mb-1 md:mb-0 pr-4">
                Roles
            </label>
            <select class="border rounded-lg block w-full px-6 border py-1 mt-1 border-secondary" wire:model='rolid'
                required>
                <option value="" selected>--Seleccione un rol--</option>
                @foreach ($roles as $rol)
                <option value={{$rol->name}} >{{$rol->name}}</option>
                @endforeach
            </select>
            @error('rolid')
            <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>

    </x-slot>

    <x-slot name="footer">
        <x-jet-secondary-button wire:click="$set('vermodalcrear',false)" wire:loading.attr="disabled"
            class="float-left">
            {{ __('Cancel') }}
        </x-jet-secondary-button>
        <x-jet-danger-button wire:click="save" wire:loading.attr="disabled">
            {{ __('Guardar Cambios') }}
        </x-jet-danger-button>
    </x-slot>
</x-jet-dialog-modal>