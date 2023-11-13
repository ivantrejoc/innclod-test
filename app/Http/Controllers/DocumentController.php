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
        $documentos = DocDocumento::all();
        return view('documents.index', ['documentos' => $documentos]);
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

        return redirect('/documents');
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $search = $request->get('search');
        $documentos = DocDocumento::where('DOC_ID', $search);
        
        return view('documents.index', ['documentos' => $documentos]);
    }



    public function edit($id)
    {
        $document = DocDocumento::find($id);
        $types = TipoTipoDoc::all();
        $process = ProProceso::all();
        return view('documents.edit', ['document' => $document, 'procesos' => $process, 'tipos' => $types]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'docName' => 'required|max:60',
            'docCode' => 'required|max:40',
            'docContent' => 'required | max:4000',
            'docTipo' => 'required',
            'procTipo' => 'required',
        ]);

        $document = DocDocumento::find($id);

        $document->DOC_NOMBRE = $request->input('docName');
        $document->DOC_CODIGO = $request->input('docCode');
        $document->DOC_CONTENIDO = $request->input('docContent');
        $document->DOC_ID_TIPO = $request->input('docTipo');
        $document->DOC_ID_PROCESO = $request->input('procTipo');

        $document->save();

        return view("documents.message", ['message' => "Documento modificado"]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        print("ESTE ES EL ID QUE LLEGA POR ELIMINAR $id");
        $document = DocDocumento::find($id);
        $document->delete();

        return redirect("/documents");
    }
}