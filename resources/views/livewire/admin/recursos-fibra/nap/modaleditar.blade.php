<x-jet-dialog-modal wire:model='vermodaleditar'>
    <x-slot name="title">
        Editar Caja Nap
    </x-slot>
    <x-slot name="content">
        <div class="mb-3">
            <label class="block text-gray-500 font-bold mb-1 md:mb-0 pr-4">
                DataCenter
            </label>
            <select class="border rounded-lg block w-full px-6 border py-1 mt-1 border-secondary"
                wire:model="datacenterid" wire:change='generarolts'>
                @foreach ($totaldatacenters as $datacenter)
                <option value="{{ $datacenter->id }}">{{ $datacenter->nombre }}</option>
                @endforeach
            </select>
            @error('datacenterid')
            <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>
        @if (!$datacenterselect)
        <div class="mb-3">
            <label class="block text-gray-500 font-bold mb-1 md:mb-0 pr-4">
                Olt
            </label>
            <x-jet-input type="text" class="block w-full px-6 border py-1 mt-1" wire:model.defer="oltnombre" disabled />
        </div>
        @endif
        @if (!$datacenterselect)
        <div class="mb-3">
            <label class="block text-gray-500 font-bold mb-1 md:mb-0 pr-4">
                Tarjeta
            </label>
            <x-jet-input type="text" class="block w-full px-6 border py-1 mt-1" wire:model.defer="tarjetanombre"
                disabled />
        </div>
        @endif
        @if (!$datacenterselect)
        <div class="mb-3">
            <label class="block text-gray-500 font-bold mb-1 md:mb-0 pr-4">
                Gpon
            </label>
            <x-jet-input type="text" class="block w-full px-6 border py-1 mt-1" wire:model.defer="gponnombre"
                disabled />
        </div>
        @endif
        @if (is_numeric($datacenterid) && isset($datacenterselect))
        <div class="mb-3">
            <label class="block text-gray-500 font-bold mb-1 md:mb-0 pr-4">
                Olt
            </label>
            <select class="border rounded-lg block w-full px-6 border py-1 mt-1 border-secondary" wire:model="oltid"
                wire:change='olttarjetarelacion'>
                <option value="">-Escoja una Olt-</option>
                @foreach ($datacenterselect->olts as $olt)
                <option value="{{ $olt->id }}">{{ $olt->nombre }}</option>
                @endforeach
            </select>
            @error('oltid')
            <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>
        @endif

        @if ($olttarjetarelacionado && is_numeric($oltid) && is_numeric($datacenterid))
        <div class="mb-3">
            <label class="block text-gray-500 font-bold mb-1 md:mb-0 pr-4">
                Tarjeta
            </label>
            <select class="border rounded-lg block w-full px-6 border py-1 mt-1 border-secondary" wire:model="tarjetaid"
                wire:change='tarjetagponrelacion'>
                <option value="">-Escoja una Tarjeta-</option>
                @foreach ($olttarjetarelacionado->tarjetas as $tarjeta)
                <option value="{{ $tarjeta->id }}">{{ $tarjeta->nombre }}&nbsp,&nbsp
                    Slots:{{ $tarjeta->slots }}</option>
                @endforeach
            </select>
            @error('tarjetaid')
            <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>
        @endif

        @if ($tarjetagponrelacionado && is_numeric($oltid) && is_numeric($datacenterid) && is_numeric($tarjetaid))
        <div class="mb-3">
            <label class="block text-gray-500 font-bold mb-1 md:mb-0 pr-4">
                Gpon
            </label>
            <select class="border rounded-lg block w-full px-6 border py-1 mt-1 border-secondary" wire:model="gponid"
                wire:change='gponnaprelacion'>
                <option value="">-Escoja una Gpon-</option>
                @foreach ($tarjetagponrelacionado->gpons as $gpon)
                <option value="{{ $gpon->id }}">{{ $gpon->nombre }}</option>
                @endforeach
            </select>
            @error('gponid')
            <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>
        @endif

        @if ($gponnaprelacionado && is_numeric($oltid) && is_numeric($datacenterid) && is_numeric($tarjetaid) &&
        is_numeric($gponid))
        <div class="mb-3">
            <label class=" block text-gray-500 font-bold mb-1 md:mb-0 pr-4">
                Cajas Nap Registradas:
                @foreach ($gponnaprelacionado->naps as $nap)
                {{ $nap->nombre }};
                @endforeach
            </label>
        </div>
        @endif
        <div class="mb-3">
            <label class="block text-gray-500 font-bold mb-1 md:mb-0 pr-4">
                Nombre
            </label>
            <x-jet-input type="text" class="block w-full px-6 border py-1 mt-1" placeholder="Ejm: Nap 0"
                wire:model.defer="nombre" />
            @error('nombre')
            <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="block text-gray-500 font-bold mb-1 md:mb-0 pr-4">
                Slots
            </label>
            <x-jet-input type="text" class="block w-full px-6 border py-1 mt-1" wire:model.defer="slots"
                placeholder="Ejm: 15" />
            @error('slots')
            <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="block text-gray-500 font-bold mb-1 md:mb-0 pr-4">
                Estado
            </label>
            <select class="border rounded-lg block w-full px-6 border py-1 mt-1 border-secondary" wire:model='estado'
                required>
                @foreach ($totalestados as $estados)
                <option value={{$estados->id}} selected >{{$estados->nombre}}</option>
                @endforeach
            </select>
            @error('estado')
            <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>
    </x-slot>
    <x-slot name="footer">
        <x-jet-secondary-button wire:click="$set('vermodaleditar',false)" wire:loading.attr="disabled"
            class="float-left">
            {{ __('Cancelar') }}
        </x-jet-secondary-button>
        @can('admin.recursosfibra.naps.editar')
        <x-jet-danger-button wire:click="update" wire:loading.attr="disabled">
            {{ __('Guardar Cambios') }}
        </x-jet-danger-button>
        @endcan
    </x-slot>
</x-jet-dialog-modal>