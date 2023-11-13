<!-- PLANTILLA LAYOUT -->

@extends("layouts/template")

@section("title","Editar Documento")

@section("content")
<nav class="navbar navbar-expand navbar-dark bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{url('documents')}}">Registro de
                        Documentos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('documents/create')}}">Crear Documento</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-danger" href="{{url('/')}}">Cerrar Sesión</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<main>
    <div class="container py-4">
        <h2>Editar Documento</h2>

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

        <form action="{{url('documents/'.$document->DOC_ID)}}" method="post">       
        @csrf
        @method('PUT')
                    <div class="mb-3">
                <label for="docName" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="docName" name="docName" value="{{$document->DOC_NOMBRE}}">
            </div>

            <div class="mb-3">
                <label for="docCode" class="form-label">Cod. Documento</label>
                <input type="text" class="form-control" id="docCode" name="docCode" value="{{$document->DOC_CODIGO}}">
            </div>

            <div class="mb-3">
                <label for="docContent" class="form-label">Contenido</label>
                <textarea name="docContent" id="docContent" class="form-control" cols="5"
                    rows="4" placeholder="{{$document->DOC_CONTENIDO}}"></textarea>
            </div>

            <div class="mb-3">
                <label for="docTipo" class="form-label">Tipo</label>
                <select id="docTipo" name="docTipo">
                    @foreach($tipos as $tipo)
                    <option value="{{$tipo->TIPO_ID}}">{{$tipo->TIP_NOMBRE}}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="procTipo" class="form-label">Proceso</label>
                <select id="procTipo" name="procTipo">
                    @foreach($procesos as $proceso)
                    <option value="{{$proceso->PRO_ID}}">{{$proceso->PRO_NOMBRE}}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
</main>