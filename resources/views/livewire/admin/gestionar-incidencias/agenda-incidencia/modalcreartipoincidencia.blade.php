@can('admin.gestionarincidencias.agendaincidencias.agregar.tipoincidencia')
<div class="">
    <a wire:click="activarmodalcreartipoincidencia"
        class="bg-gradient-to-r from-green-200 via-green-400 to-green-500 btn2 btn-green mx-2 py-2">
        <i class="fas fa-plus"></i>
    </a>
</div>
@endcan

<x-jet-dialog-modal wire:model='vermodalcreartipoincidencia'>
    <x-slot name="title">
        Agregar nuevo Tipo de Incidencia
    </x-slot>
    <x-slot name="content">
        <div class="mb-4">
            <label class="block text-gray-500 font-bold mb-1 md:mb-0 pr-4">
                Nombre de la incidencia*
            </label>
            <x-jet-input type="text" class="block w-full px-6 border py-1" 
            placeholder="Ejm: Falla de router"
                wire:model.defer="nombre" />
            @error('nombre')
            <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-4">
            <label class="block text-gray-500 font-bold mb-1 md:mb-0 pr-4">
                Estado
            </label>
            <select class="border rounded-lg block w-full px-6 border py-1 mt-1 border-secondary" wire:model="estadoid">
                @foreach ($totalestados as $estados)
                <option value={{$estados->id}} selected>{{$estados->nombre}}</option>
                @endforeach
            </select>
            @error('estadoid')
            <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>
    </x-slot>

    <x-slot name="footer">
        <x-jet-secondary-button wire:click="$set('vermodalcreartipoincidencia',false)" wire:loading.attr="disabled"
            class="float-left">
            {{ __('Cancel') }}
        </x-jet-secondary-button>
        <x-jet-danger-button wire:click="savetipoincidencia" wire:loading.attr="disabled">
            {{ __('Guardar Cambios') }}
        </x-jet-danger-button>
    </x-slot>
</x-jet-dialog-modal>