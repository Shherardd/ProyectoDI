<?php

namespace ProyectoDI\Http\Controllers;

use ProyectoDI\documento;
use Illuminate\Http\Request;

class DocumentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \ProyectoDI\documento  $documento
     * @return \Illuminate\Http\Response
     */
    public function show(documento $documento)
    {
        echo "kk";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \ProyectoDI\documento  $documento
     * @return \Illuminate\Http\Response
     */
    public function edit(documento $documento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \ProyectoDI\documento  $documento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, documento $documento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \ProyectoDI\documento  $documento
     * @return \Illuminate\Http\Response
     */
    public function destroy(documento $documento)
    {
        //
    }
}
