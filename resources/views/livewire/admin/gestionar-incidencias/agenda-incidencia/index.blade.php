@extends('adminlte::page')
@section('title', 'Modulo Cliente')
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
<link rel="stylesheet" href="{{ mix('css/app.css') }}">
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@livewireStyles
<script src="{{ mix('js/app.js') }}" defer></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js" defer></script>

@section('content')
@livewire('admin.gestionar-incidencias.agenda-incidencia.show-incidencia')
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
{{-- <script>
    document.addEventListener('livewire:load', function(){
        $('.select2').select2();
    })
</script> --}}
@stack('modals')
@stack('js')
@section('js')
@stop