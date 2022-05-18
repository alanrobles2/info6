<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Posts;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Posts::leftJoin('categories', 'posts.category_id', '=', 'categories.id')
        ->select('posts.*', 'categories.title as category_name')
        ->orderBy('posts.created_at', 'desc')
        ->get();

        return response()->json($posts); 

    }

    /**
    *:: PARA ACCEDER METODOS Y SE COLOCA ANTES EL MODELO 
    * LEFT PARA QUE TRAIGA TODO DE LEFTJOIN
    * SIN IMPORTAR QUE TENGAN CATEGORIA 
    * 4 PARAMETROS, EL PRIMERO TABLA DE DONDE VA A HACER EL JOIN
    *
    *¨SEGUNOD LA LLAVE DE POST (LA ACTUAL) EN ESTE CASO
    *CORROBORAMOS CON LA MIGRACION  Y EL IGUAL Y EL DE CATEGORIES, LA LLAVE FORANEA 
    */

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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
