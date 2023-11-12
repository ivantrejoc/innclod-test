<!-- PLANTILLA LAYOUT -->

@extends("layouts/template")

<!-- @section("title","Registro de Documentos") -->

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
                    <a class="nav-link active" aria-current="page" href="{{url('documents/')}}">Registro de
                        Documentos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('documents/create')}}">Crear Documento</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('documents/edit')}}">Modificar Documento</a>
                </li>
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>

<main>
    <div class="container py-4">
        <h2>Registro de Documentos</h2>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id. Doc</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Cod. Documento</th>
                    <th scope="col">Contenido</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Proceso</th>
                    <th scope="col">Modificar</th>
                    <th scope="col">Eliminar</th>
                </tr>
            </thead>
            <tbody>
                @foreach($documentos as $documento)
                <tr>
                    <td>{{$documento->DOC_ID}}</td>
                    <td>{{$documento->DOC_NOMBRE}}</td>
                    <td>{{$documento->DOC_CODIGO}}</td>
                    <td>{{$documento->DOC_CONTENIDO}}</td>
                    <td>{{$documento->tipo_tipo_doc->TIP_NOMBRE}}</td>
                    <td>{{$documento->pro_proceso->PRO_NOMBRE}}</td>
                    <td>modificar</td>
                    <td>eliminar</td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</main>