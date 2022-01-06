@can('admin.gestionarincidencias.agendaincidencias.editar.tipoincidencia')
<div class="">
    <a wire:click="activarmodaleditartipoincidencia" class="btn2 btn-blue mx-2 py-2">
        <i class="fas fa-edit"></i>
    </a>
</div>
@endcan

<x-jet-dialog-modal wire:model='vermodaleditartipoincidencia'>
    <x-slot name="title">
        Editar Tipo de Incidencia
    </x-slot>
    <x-slot name="content">
        <div class="mb-4">
            <label class="block text-gray-500 font-bold mb-1 md:mb-0 pr-4">
                Tipos de Incidencia
            </label>
            <select class="border rounded-lg block w-full px-6 border py-1 mt-1 border-secondary"
                wire:model='tipoincidenciaid' wire:change="changetipoincidenciaselect" required>
                <option value="" select>-Escoja un tipo de Incidencia-</option>
                @foreach ($totaltipoincidencias as $only)
                <option value="{{ $only->id }}">
                    {{ $only->nombre }} </option>
                @endforeach
            </select>
            @error('tipoincidenciaid')
            <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-4">
            <label class="block text-gray-500 font-bold mb-1 md:mb-0 pr-4">
                Nombre *
            </label>
            <x-jet-input type="text" class="block w-full px-6 border py-1 mt-1" placeholder="Ejm: Falla de router"
                wire:model="nombre" disabled={{$disabled2}} />
            @error('nombre')
            <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>
        @if (is_numeric($tipoincidenciaid))
        <div class="mb-4">
            <label class="block text-gray-500 font-bold mb-1 md:mb-0 pr-4">
                Este Tipo de incidencia se encuentra en {{$tipoincidenciausadopor}}&nbspIncidencias:
            </label>
        </div>
        @endif

        @if ($tipoincidenciausadopor != 0)
        <div class="mb-4">
            <label class="block text-gray-500 font-bold mb-1 md:mb-0 pr-4">
                Estado
            </label>
            <select class="border rounded-lg block w-full px-6 border py-1 mt-1 border-secondary"
                wire:model.defer="estadoid" disabled>
                @foreach ($totalestados as $estados)
                <option value={{$estados->id}} selected >{{$estados->nombre}}</option>
                @endforeach
            </select>
            @error('estadoid')
            <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>
        @else
        <div class="mb-4">
            <label class="block text-gray-500 font-bold mb-1 md:mb-0 pr-4">
                Estado
            </label>
            <select class="border rounded-lg block w-full px-6 border py-1 mt-1 border-secondary"
                wire:model.defer="estadoid">
                @foreach ($totalestados as $estados)
                <option value={{$estados->id}} selected >{{$estados->nombre}}</option>
                @endforeach
            </select>
            @error('estadoid')
            <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>
        @endif
    </x-slot>
    <x-slot name="footer">
        <x-jet-secondary-button wire:click="$set('vermodaleditartipoincidencia',false)" wire:loading.attr="disabled"
            class="float-left">
            {{ __('Cancel') }}
        </x-jet-secondary-button>
        @can('admin.gestionarincidencias.agendaincidencias.eliminar.tipoincidencia')
        @if ($tipoincidenciausadopor==0 && is_numeric($tipoincidenciaid))
        <x-jet-danger-button wire:click="$emit('deletethis', {{ $tipoincidenciaid }})" wire:loading.attr="disabled"
            class='mx-1'>
            {{ __('Eliminar') }}
        </x-jet-danger-button>
        @endif
        @endcan
        @can('admin.gestionarincidencias.agendaincidencias.editar.tipoincidencia')
        <x-jet-danger-button wire:click="updatetipoincidencia" wire:loading.attr="disabled" class='mx-1'>
            {{ __('Guardar Cambios') }}
        </x-jet-danger-button>
        @endcan
    </x-slot>
</x-jet-dialog-modal>