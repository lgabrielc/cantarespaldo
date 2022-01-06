@can('admin.recursosantena.antenas.agregar')
<a wire:click="activarmodalcrear"
    class="bg-gradient-to-r from-green-200 via-green-500  to-green-700 btn2 btn-green mx-2 py-2">
    <i class="fas fa-plus"></i>
</a>
@endcan


<x-jet-dialog-modal wire:model='vermodalcrear'>
    <x-slot name="title">
        Crear nueva Antena
    </x-slot>
    <x-slot name="content">
        <div class="flex flex-col w-full md:flex-row">
            <div class="w-full p-2 ">
                <label class="block text-gray-500 font-bold mb-1 md:mb-0 pr-4">
                    Nombre
                </label>
                <x-jet-input type="text" class="block w-full px-6 border py-1" placeholder="Ejm: Arapa_Noveno_Eng"
                    wire:model.defer="nombre" />
                @error('nombre')
                <div class="text-red-500">{{ $message }}</div>
                @enderror
            </div>
            <div class="w-full p-2 ">
                <label class="block text-gray-500 font-bold mb-1 md:mb-0 pr-4">
                    IP
                </label>
                <x-jet-input type="text" class="block w-full px-6 border py-1" wire:model.defer="ip"
                    placeholder="Ejm: 192.168.10.123" />
                @error('ip')
                <div class="text-red-500">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="flex flex-col w-full md:flex-row">
            <div class="w-full p-2 ">
                <label class="block text-gray-500 font-bold mb-1 md:mb-0 pr-4">
                    Mac
                </label>
                <x-jet-input type="text" class="block w-full px-6 border py-1" wire:model.defer="mac"
                    placeholder="Ejm: FG:GT:5T:6Y:4T:U7" />
                @error('mac')
                <div class="text-red-500">{{ $message }}</div>
                @enderror
            </div>
            <div class="w-full p-2 ">
                <label class="block text-gray-500 font-bold mb-1 md:mb-0 pr-4">
                    Frecuencia
                </label>
                <x-jet-input type="text" class="block w-full px-6 border py-1" wire:model.defer="frecuencia"
                    placeholder="Ejm: 5.8 GHZ" />
                @error('frecuencia')
                <div class="text-red-500">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="flex flex-col w-full md:flex-row">
            <div class="w-full p-2 ">
                <label class="block text-gray-500 font-bold mb-1 md:mb-0 pr-4">
                    Canal
                </label>
                <x-jet-input type="text" class="block w-full px-6 border py-1" wire:model.defer="canal"
                    placeholder="Ejm: 5800" />
                @error('canal')
                <div class="text-red-500">{{ $message }}</div>
                @enderror
            </div>
            <div class="w-full p-2 ">
                <label class="block text-gray-500 font-bold mb-1 md:mb-0 pr-4">
                    Marca
                </label>
                <x-jet-input type="text" class="block w-full px-6 border py-1" wire:model.defer="marca"
                    placeholder="Huawei" />
                @error('marca')
                <div class="text-red-500">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="flex flex-col w-full md:flex-row">
            <div class="w-full p-2 ">
                <label class="block text-gray-500 font-bold mb-1 md:mb-0 pr-4">
                    Torre
                </label>
                <select class="border rounded-lg block mt-1 w-full px-6 border py-1 py-1 py-1" wire:model.defer='torre'
                    required>
                    <option value="" selected>-Escoja una Torre-</option>
                    @foreach ($totaltorres as $torres)
                    <option value={{$torres->id}} selected >{{$torres->nombre}}</option>
                    @endforeach
                </select>
                @error('torre')
                <div class="text-red-500">{{ $message }}</div>
                @enderror
            </div>
            <div class="w-full p-2 ">
                <label class="block text-gray-500 font-bold mb-1 md:mb-0 pr-4">
                    Servidor
                </label>
                <select class="border rounded-lg block mt-1 w-full px-6 border py-1 py-1" wire:model.defer='servidor'
                    required>
                    <option value="" selected>-Escoja un Servidor-</option>
                    @foreach ($totalservidores as $servidores)
                    <option value={{$servidores->id}}>{{$servidores->nombre}}</option>
                    @endforeach
                </select>
                @error('servidor')
                <div class="text-red-500">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="flex flex-col w-full md:flex-row">
            <div class="w-full p-2 ">
                <label class="block text-gray-500 font-bold mb-1 md:mb-0 pr-4">
                    Tipo de Antena
                </label>
                <select class="border rounded-lg block mt-1 w-full px-6 border py-1" wire:model.defer='tipoantena'
                    required>
                    <option value="" selected>-Escoja un tipo de Antena-</option>
                    @foreach ($tipoantenas as $tipodeantena)
                    <option value={{$tipodeantena->id}}>{{$tipodeantena->nombre}}</option>
                    @endforeach
                </select>
                @error('tipoantena')
                <div class="text-red-500">{{ $message }}</div>
                @enderror
            </div>
            <div class="w-full p-2 ">
                <label class="block text-gray-500 font-bold mb-1 md:mb-0 pr-4">
                    Estado
                </label>
                <select class="border rounded-lg block mt-1 w-full px-6 border py-1 py-1" wire:model.defer='estado'
                    required>
                    @foreach ($totalestados as $estados)
                    <option value={{$estados->id}} selected >{{$estados->nombre}}</option>
                    @endforeach
                </select>
                @error('estado')
                <div class="text-red-500">{{ $message }}</div>
                @enderror
            </div>
        </div>
    </x-slot>

    <x-slot name="footer">
        <x-jet-secondary-button wire:click="$set('vermodalcrear',false)" wire:loading.attr="disabled"
            class="float-left">
            {{ __('Cancel') }}
        </x-jet-secondary-button>
        @can('admin.recursosantena.antenas.agregar')
        <x-jet-danger-button wire:click="save" wire:loading.attr="disabled">
            {{ __('Guardar Cambios') }}
        </x-jet-danger-button>
        @endcan

    </x-slot>
</x-jet-dialog-modal>