<?php

namespace App\Http\Controllers;

use App\Models\DocDocumento;
use App\Models\ProProceso;
use App\Models\TipoTipoDoc;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('documents.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $types = TipoTipoDoc::all();
        $process = ProProceso::all();
        return view('documents.create', ['procesos' => $process, 'tipos' => $types]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
        $request->validate([
            'docName' => 'required|max:60',
            'docCode' => 'required|max:40',
            'docContent' => 'required | max:4000',
            'docTipo' => 'required',
            'procTipo' => 'required',
        ]);

        $doc = new DocDocumento();
        $DOC_NOMBRE = $request->input('docName');
        $DOC_CODIGO = $request->input('docCode');
        $DOC_CONTENIDO = $request->input('docContent');
        $DOC_ID_tipo = $request->input('docTipo');
        $DOC_ID_PROCESO = $request->input('procTipo');

        $doc->DOC_NOMBRE = $DOC_NOMBRE;
        $doc->DOC_CODIGO = $DOC_CODIGO;
        $doc->DOC_CONTENIDO = $DOC_CONTENIDO;
        $doc->DOC_ID_TIPO = $DOC_ID_tipo;
        $doc->DOC_ID_PROCESO = $DOC_ID_PROCESO;
        $doc->save();

        return view("documents.message", ['message' => "Nuevo documento creado"]);
    }

    /**
     * Display the specified resource.
     */
    public function show(DocDocumento $docDocumento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DocDocumento $docDocumento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DocDocumento $docDocumento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DocDocumento $docDocumento)
    {
        //
    }
}