@can('admin.gestionarincidencias.agendaincidencias.agregar.incidencia')
<a wire:click="activarmodalcrear"
    class="bg-gradient-to-r from-green-200 via-green-500  to-green-700 btn2 btn-green mx-2 py-2">
    <i class="fas fa-plus"></i>
</a>
@endcan

<x-jet-dialog-modal wire:model='vermodalcrear'>
    <x-slot name="title">
        Crear nueva Incidencia
    </x-slot>
    <x-slot name="content">
        <div class="mb-4">
            <label class="block text-gray-500 font-bold mb-1 md:mb-0 pr-4">
                Cliente
            </label>
            {{-- CUANDO NO TENGA INTERNET --}}
            <div>
                <select class="form-control" wire:model='clienteid' style="width: 100%">
                    <option value="">SELECCIONA UN CLIENTE</option>
                    @foreach($clientes as $onlycliente)
                    <option value="{{ $onlycliente->id }}">{{$onlycliente->nombre}} {{ $onlycliente->apellido }}
                    </option>
                    @endforeach
                </select>
            </div>
            {{-- ACTIVAR CUANDO TENGA INTERNET --}}
            {{-- <div wire:ignore>
                <select class="form-control" id="select2-dropdown" style="width: 100%">
                    <option value="">SELECCIONA UN CLIENTE</option>
                    @foreach($clientes as $onlycliente)
                    <option value="{{ $onlycliente->id }}">{{$onlycliente->nombre}} {{ $onlycliente->apellido }}
                    </option>
                    @endforeach
                </select>
            </div> --}}
            @error('clienteid')
            <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-4">
            <label class="block text-gray-500 font-bold mb-1 md:mb-0 pr-4">
                Tipo de Incidencia
            </label>
            <div>
                <select class="form-control" wire:model='tipoincidenciaid'>
                    <option value="">SELECCIONA UN TIPO DE INCIDENCIA</option>
                    @foreach($totaltipoincidencias as $tipoincidencia)
                    <option value="{{ $tipoincidencia->id }}">{{$tipoincidencia->nombre}}</option>
                    @endforeach
                </select>
            </div>
            @error('tipoincidenciaid')
            <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-4">
            <label class="block text-gray-500 font-bold mb-1 md:mb-0 pr-4">
                Descripcion
            </label>
            <textarea wire:model.defer='descripcion' class="form-control" rows="3"></textarea>
            @error('descripcion')
            <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>
        <div class="flex flex-col w-full md:flex-row">
            <div class="w-full p-2 ">
                <label class="block text-gray-500 font-bold mb-1 md:mb-0 pr-4">
                    Estado
                </label>
                <input type="text" class="form-control" value="Pendiente" disabled>
            </div>
            <div class="w-full p-2 ">
                <label class="block text-gray-500 font-bold mb-1 md:mb-0 pr-4">
                    Fecha y hora de visita
                </label>
                <input wire:model.defer="fecha" type="datetime-local" wire:model='fecha' class="form-control">
            </div>
            @error('fecha')
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


<script>
    $(document).ready(function () {
        $('#select2-dropdown').select2();
        $('#select2-dropdown').on('change', function (e) {
            var data = $('#select2-dropdown').select2("val");
            @this.set('clienteid', data);
        });
    });
</script>
<script>
    window.addEventListener('name-updated', event => {
        $('#select2-dropdown').val([]);
})
</script>