@extends('adminlte::page')
@section('title', 'Modulo Pagos')
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
<link rel="stylesheet" href="{{ mix('css/app.css') }}">
@livewireStyles
<script src="{{ mix('js/app.js') }}" defer></script>
@section('content')
@livewire('admin.pago.show-pago')
@stop
@livewireScripts
<script>
    Livewire.on('alert', function(message) {
        Swal.fire(
            'Buen Trabajo!',
            message,
            'success'
        )
    })
</script>
@stack('modals')
@stack('js')
@section('js')
@stop