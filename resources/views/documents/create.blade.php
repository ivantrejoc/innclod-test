<!-- PLANTILLA LAYOUT -->

@extends("layouts/template")

@section("title","Crear Documento")

@section("content")
<main>
    <div class="container py-4">
        <h2>Crear Nuevo Documento</h2>

        @if($errors ->any())
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <ul>
    @foreach($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
  </ul>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
        @endif

        <form action="{{url('documents')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="docName" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="docName">
            </div>

            <div class="mb-3">
                <label for="docCode" class="form-label">Cod. Documento</label>
                <input type="text" class="form-control" id="docCode" placeholder="ejemplo: INS-DES-20">
            </div>

            <div class="mb-3">
                <label for="docContent" class="form-label">Contenido</label>
                <textarea name="content" id="docContent" class="form-control" cols="5" rows="4"
                >Detalles del documento...</textarea>
            </div>

            <div class="mb-3">
                <label for="docTipo" class="form-label">Tipo</label>
                <select id="docTipo" name="tipo" >
                    @foreach($tipos as $tipo)
                    <option value="{{$tipo->id}}">{{$tipo->TIP_NOMBRE}}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="procTipo" class="form-label">Proceso</label>
                <select id="procTipo" name="proceso">
                    @foreach($procesos as $proceso)
                    <option value="{{$proceso->id}}">{{$proceso->PRO_NOMBRE}}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
</main>