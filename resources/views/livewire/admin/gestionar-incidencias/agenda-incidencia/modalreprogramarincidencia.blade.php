<x-jet-dialog-modal wire:model='vermodalreprogramarincidencia'>
    <x-slot name="title">
        Editar Incidencia
    </x-slot>
    <x-slot name="content">
        <div class="mb-4">
            <label class="block text-gray-500 font-bold mb-1 md:mb-0 pr-4">
                Cliente
            </label>
            <x-jet-input type="text" class="block w-full px-6 border py-1 mt-1" value={{$nombrecompleto}} disabled />
        </div>
        <div class="mb-4">
            <label class="block text-gray-500 font-bold mb-1 md:mb-0 pr-4">
                Tipo de Incidencia
            </label>
            {{--
            <x-jet-input type="text" class="block w-full px-6 border py-1 mt-1" value={{$tipoincidencianombre}}
                disabled /> --}}
            <select class="border rounded-lg block w-full px-6 border py-1 mt-1 border-secondary"
                wire:model="tipoincidenciaid">
                @foreach ($totaltipoincidencias as $only)
                <option value={{$only->id}} selected>{{$only->nombre}}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-4">
            <label class="block text-gray-500 font-bold mb-1 md:mb-0 pr-4">
                Descripcion
            </label>
            <textarea wire:model='descripcion' class="form-control" rows="3"></textarea>
            @error('descripcion')
            <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-4">
            <label class="block text-gray-500 font-bold mb-1 md:mb-0 pr-4">
                Fecha y hora de visita
            </label>
            <input wire:model="fecha" wire:change="changeverificarcambiodefecha" type="datetime-local"
                wire:model='fecha' class="form-control">
            @error('fecha')
            <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>

    </x-slot>
    <x-slot name="footer">
        <x-jet-secondary-button wire:click="$set('vermodaleditartipoincidencia',false)" wire:loading.attr="disabled"
            class="float-left">
            {{ __('Cancel') }}
        </x-jet-secondary-button>
        @if (is_numeric($estareprogramando))
        <x-jet-danger-button wire:click="$emit('reprogramarthis', {{ $incidenciaid }})" wire:loading.attr="disabled"
            class='mx-1'>
            {{ __('Reprogramar') }}
        </x-jet-danger-button>
        @else
        <x-jet-danger-button wire:click="editincidencia" wire:loading.attr="disabled" class='mx-1'>
            {{ __('Guardar Cambios') }}
        </x-jet-danger-button>
        @endif

    </x-slot>
</x-jet-dialog-modal>