<!-- PLANTILLA LAYOUT -->

@extends("layouts/template")

@section("title","Crear Documento")

@section("content")
<main>
    <div class="alert alert-success" role="alert">
        <h4 class="alert-heading">Documento creado con éxito</h4>
        <hr>
    </div>
    <div>
        <a href="{{url('documents')}}" class="btn btn-success">Volver a registros</a>
    </div>

    </div>
</main>