<div>
    <div class="w-full mx-auto">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-4 content-center">
            <div class="pt-4 px-2 mb-2">
                <div class="w-full bg-white rounded-xl overflow-hdden shadow-md px-4 pt-4 pb-2 undefined">
                    <div class="flex flex-wrap border-b border-gray-200 undefined">
                        <div
                            class="bg-gradient-to-tr from-green-400 to-green-800 -mt-10 mb-4 rounded-xl text-white grid items-center w-24 h-24 py-4 px-4 justify-center shadow-lg-pink mb-0">
                            <span class="material-icons text-white text-3xl leading-none">date_range</span>
                        </div>
                        <div class="w-full pl-2 max-w-full flex-grow flex-1 mb-2 text-right undefined">
                            <h5 class="text-gray-500 font-light tracking-wide text-base mb-1">Pagos registrados hoy día
                            </h5>
                            <span class="text-3xl text-gray-900">
                                {{ $pagoshoy }}
                            </span>
                        </div>
                    </div>
                    <div class="text-sm text-gray-700 pt-2 flex items-center undefined"><span
                            class="material-icons text-green-500 text-base leading-none">arrow_upward</span><span
                            class="text-green-500 ml-1 mr-2"></span><span class="font-light whitespace-nowrap">En
                            total</span></div>
                </div>
            </div>
            <div class="pt-4 px-2 mb-2">
                <div class="w-full bg-white rounded-xl overflow-hdden shadow-md px-4 pt-4 pb-2 undefined">
                    <div class="flex flex-wrap border-b border-gray-200 undefined">
                        <div
                            class="bg-gradient-to-tr from-pink-500 to-pink-700 -mt-10 mb-4 rounded-xl text-white grid items-center w-24 h-24 py-4 px-4 justify-center shadow-lg-pink mb-0">
                            <span class="material-icons text-white text-3xl leading-none">attach_money</span>
                        </div>
                        <div class="w-full pl-4 max-w-full flex-grow flex-1 mb-2 text-right undefined">
                            <h5 class="text-gray-500 font-light tracking-wide text-base mb-1">Ingresos registrados hoy
                                día
                            </h5>
                            <span class="text-3xl text-gray-900">
                                {{ $ingresoshoy }} S/. </span>
                        </div>
                    </div>
                    <div class="text-sm text-gray-700 pt-2 flex items-center undefined"><span
                            class="material-icons text-green-500 text-base leading-none">arrow_upward</span><span
                            class="text-green-500 ml-1 mr-2"></span><span class="font-light whitespace-nowrap">En
                            total</span></div>
                </div>
            </div>
            <div class="pt-4 px-2 mb-2">
                <div class="w-full bg-white rounded-xl overflow-hdden shadow-md px-4 pt-4 pb-2 undefined">
                    <div class="flex flex-wrap border-b border-gray-200 undefined">
                        <div
                            class="bg-gradient-to-tr from-pink-500 to-pink-700 -mt-10 mb-4 rounded-xl text-white grid items-center w-24 h-24 py-4 px-4 justify-center shadow-lg-pink mb-0">
                            <span class="material-icons text-white text-3xl leading-none">attach_money</span>
                        </div>
                        <div class="w-full pl-4 max-w-full flex-grow flex-1 mb-2 text-right undefined">
                            <h5 class="text-gray-500 font-light tracking-wide text-base mb-1">N° de items del filtro
                            </h5>
                            <span class="text-3xl text-gray-900">
                                {{ $totalitems }} Items </span>
                        </div>
                    </div>
                    <div class="text-sm text-gray-700 pt-2 flex items-center undefined"><span
                            class="material-icons text-green-500 text-base leading-none">arrow_upward</span><span
                            class="text-green-500 ml-1 mr-2"></span><span class="font-light whitespace-nowrap">En
                            total</span></div>
                </div>
            </div>
            <div class="pt-4 px-2 mb-2">
                <div class="w-full bg-white rounded-xl overflow-hdden shadow-md px-4 pt-4 pb-2 undefined">
                    <div class="flex flex-wrap border-b border-gray-200 undefined">
                        <div
                            class="bg-gradient-to-tr from-pink-500 to-pink-700 -mt-10 mb-4 rounded-xl text-white grid items-center w-24 h-24 py-4 px-4 justify-center shadow-lg-pink mb-0">
                            <span class="material-icons text-white text-3xl leading-none">attach_money</span>
                        </div>
                        <div class="w-full pl-4 max-w-full flex-grow flex-1 mb-2 text-right undefined">
                            <h5 class="text-gray-500 font-light tracking-wide text-base mb-1">Ingresos totales del
                                filtro
                            </h5>
                            <span class="text-3xl text-gray-900">
                                {{ $totalpagado }} S/. </span>
                        </div>
                    </div>
                    <div class="text-sm text-gray-700 pt-2 flex items-center undefined"><span
                            class="material-icons text-green-500 text-base leading-none">arrow_upward</span><span
                            class="text-green-500 ml-1 mr-2"></span><span class="font-light whitespace-nowrap">En
                            total</span></div>
                </div>
            </div>
        </div>

    </div>
    {{-- TABLA SEARCH Y TABLA PARA MOSTRAR LOS DATOOS --}}
    <div class=" max-w-7x1 mx-auto px-4 sm:px-6 lg:px-8 ">
        <div class="w-full">
            <div class="bg-white  rounded-2xl px-10 py-8 shadow-lg hover:shadow-2xl transition duration-500 w-full">
                <div class="w-full">
                    <div class=w-full">
                        <h1 class="text-2xl font-semibold leading-tight mb-2">Reporte de pagos del cliente</h1>
                        <div class="my-2 flex sm:flex-row flex-col">
                            <div class="pr-2 flex flex-row mb-1 sm:mb-0 content-center justify-center">
                                <div class="flex relative content-center ">
                                    <span class="mt-2 mr-1">Mostrar</span>
                                    <select wire:model="cant"
                                        class="appearance-none h-full rounded-l border block appearance-none w-full bg-white border-gray-400 text-gray-700 py-2 px-4 pr-8 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                                        <option value="5">5</option>
                                        <option value="10">10</option>
                                        <option value="25">25</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                    </select>
                                </div>
                                <div class="relative">
                                    <div
                                        class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="block relative">
                                <span class="h-full absolute inset-y-0 left-0 flex items-center pl-2">
                                    <svg viewBox="0 0 24 24" class="h-4 w-4 fill-current text-gray-500">
                                        <path
                                            d="M10 4a6 6 0 100 12 6 6 0 000-12zm-8 6a8 8 0 1114.32 4.906l5.387 5.387a1 1 0 01-1.414 1.414l-5.387-5.387A8 8 0 012 10z">
                                        </path>
                                    </svg>
                                </span>
                                <x-jet-input type="text" class="block w-full px-6 border py-1 py-2 "
                                    placeholder="Buscar .." wire:model="search" />
                            </div>
                            <div class="flex sm:flex-row flex-col content-center ">
                                <x-jet-input type="date" class="block w-full px-6 border py-1 py-2 ml-2"
                                    wire:model="searchdate" />
                                <div class="align-items-center">
                                    <label class="py-1 ml-3">
                                        Al
                                    </label>
                                </div>
                                <x-jet-input type="date" class="block w-full px-6 border py-1 py-2 ml-3"
                                    wire:model="searchdate2" />
                            </div>
                        </div>
                        <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-1 overflow-x-auto">
                            <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                                @if (count($clientes))
                                <table class="min-w-full leading-normal">
                                    <thead>
                                        <tr>
                                            <th wire:click="order('id')"
                                                class="cursor-pointer pl-2 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                                ID
                                                @if ($sort == 'id')
                                                @if ($direction == 'asc')
                                                {{-- SI ES ASCENDENTE PONER SU ICONO --}}
                                                <i class="fas fa-sort-numeric-up float-right"></i>
                                                {{-- SI ES DESCENDENTE PONER SU ICONO --}}
                                                @else
                                                {{-- SI ES DESCENDENTE PONER SU ICONO --}}
                                                <i class="fas fa-sort-numeric-up-alt float-right"></i>
                                                @endif
                                                @else
                                                {{-- SI ES CLICKEA POR PRIMERA VEZ EN ID PONER SU ICONO --}}
                                                <i class="fas fa-sort float-right"></i>
                                                @endif
                                            </th>
                                            <th wire:click="order('fechapagada')"
                                                class="cursor-pointer px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                                Fecha Pagada
                                                <i class="fas fa-sort float-right mt-1"></i>
                                            </th>
                                            <th wire:click="order('nombre')"
                                                class="cursor-pointer px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                                Nombre
                                                <i class="fas fa-sort float-right mt-1"></i>
                                            </th>
                                            <th wire:click="order('apellido')"
                                                class="cursor-pointer px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                                Apellido
                                                <i class="fas fa-sort float-right mt-1"></i>
                                            </th>
                                            <th wire:click="order('dni')"
                                                class="cursor-pointer px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                                DNI
                                                <i class="fas fa-sort float-right mt-1"></i>
                                            </th>
                                            <th wire:click="order('periodo')"
                                                class="cursor-pointer px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                                Periodo
                                                <i class="fas fa-sort float-right mt-1"></i>
                                            </th>
                                            <th wire:click="order('monto')"
                                                class="cursor-pointer px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                                Monto
                                                <i class="fas fa-sort float-right mt-1"></i>
                                            </th>
                                            <th wire:click="order('personal')"
                                                class="cursor-pointer px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                                Personal
                                                <i class="fas fa-sort float-right mt-1"></i>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($clientes as $cliente)
                                        <tr>
                                            <td class="py-4 border-b border-gray-200 bg-white text-sm text-center">
                                                <p class="text-gray-900">
                                                    {{ $cliente->id }}
                                                </p>
                                            </td>
                                            <td class="py-4 border-b border-gray-200 bg-white text-sm text-center">
                                                <p class="text-gray-900 whitespace-no-wrap ">
                                                    {{ $cliente->fechapagada }}
                                                </p>
                                            </td>
                                            <td class="py-4 border-b border-gray-200 bg-white text-sm text-center">
                                                <p class="text-gray-900 whitespace-no-wrap ">
                                                    {{ $cliente->nombre }}
                                                </p>
                                            </td>
                                            <td class="py-1 border-b border-gray-200 bg-white text-sm text-center">

                                                <p class="text-gray-900 whitespace-no-wrap">
                                                    {{ $cliente->apellido }}</p>

                                            </td>
                                            <td class="py-1 border-b border-gray-200 bg-white text-sm text-center">
                                                <p class="text-gray-900 whitespace-no-wrap">
                                                    {{ $cliente->dni }}</p>
                                            </td>
                                            <td class="py-1 border-b border-gray-200 bg-white text-sm text-center">
                                                <p class="text-gray-900 whitespace-no-wrap">
                                                    {{ $cliente->periodo }}</p>
                                            </td>
                                            <td class="py-1 border-b border-gray-200 bg-white text-sm text-center">
                                                <p class="text-gray-900 whitespace-no-wrap">
                                                    {{ $cliente->monto }}</p>
                                            </td>
                                            <td class="py-1 border-b border-gray-200 bg-white text-sm text-center">
                                                <p class="text-gray-900 whitespace-no-wrap">
                                                    {{ $cliente->personal }}</p>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                @if ($clientes->hasPages())
                                <div class="px-6 py-3">
                                    {{ $clientes->links() }}
                                </div>
                                @endif
                                @else
                                <div class="px-6 py-4">
                                    No existe ningún registro coincidente
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                </body>
            </div>
        </div>
    </div>
    <script>
        livewire.on('deletthis', deletID => {
            Swal.fire({
                title: 'Estás seguro?',
                text: "¡No podrás revertir esto!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: '¡Sí, bórralo!'
            }).then((result) => {
                if (result.isConfirmed) {
                    @this.call('delete', deletID)
                    Swal.fire(
                        'Deleted!',
                        'El Cli ha sido eliminado.',
                        'success'
                    )
                }
            })
        });
    </script>
</div>