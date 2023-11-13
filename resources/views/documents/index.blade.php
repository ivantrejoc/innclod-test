<!-- PLANTILLA LAYOUT -->

@extends("layouts/template")

@section("title","Registro de Documentos")

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
                    <a class="btn btn-danger" href="{{url('/')}}">Cerrar Sesión</a>
                </li>
            </ul>



        </div>
    </div>
</nav>

<main>
    <div class="container py-4">
        <h2>Registro de Documentos</h2>
        
        <form class="d-flex" action="{{url('documents/')}}" method="get">
                @csrf
                <input name="search"class="form-control me-2" type="search" placeholder="Cod. Documento" aria-label="Search" name="search">
                <button class="btn btn-success" type="submit">Buscar</button>
            </form>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id. Doc</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Cod. Documento</th>
                    <th scope="col">Contenido</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Proceso</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
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
                    <td><a href="{{url('documents/'.$documento->DOC_ID.'/edit')}}"
                            class="btn btn-warning btn-sm">Editar</a>
                    </td>
                    <td>
                        <form action="{{url('documents/'.$documento->DOC_ID)}}" method="post">
                            @method('DELETE')
                            @csrf
                            <input type="submit" class="btn btn-danger btn-sm" value="Eliminar"></input>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</main>