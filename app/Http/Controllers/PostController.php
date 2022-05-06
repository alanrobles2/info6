<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use Illuminate\Http\Request;
use App\Models\Posts;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }



    public function index()
    {
        //
        $posts = Posts::orderBy('created_at', 'desc')->paginate(2);
        /*$posts es una variable que esta instanciando el modelo Models > Posts.php (atributos y metodos) para que no sea directo Posts::get() y usarla en todas partes*/
        //-> paginate(x) -> donde x va a ser el numero de elementos por pagina
        //dd($posts);

        return view('dashboard.post.posts', [
            'posts'=>$posts
        ]);
        /*Jala datos de una vista*/
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('dashboard.post.create', [
            'post' => new Posts()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostRequest $request)
    {
        //
        //echo "Post Store";
        //dd($request);

        /**$validated = $request->validate([
            'title'=>'required | min: 5| max:500',
            'url_clean' => 'required',
            'content'=> 'min: 1| max:500'
        ]);
        */
        //dd($validated);      
        //dd($request->validated());
        Posts::create($request->validated());

        return back()->with('status', 'Post created successfully');
        
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
        return "Show: ".$id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Posts $post)
    {
        //
        //dd($post);
        return view('dashboard.post.edit', [
            'post' => $post
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StorePostRequest $request, Posts $post)
    {
        /*De tipo StorePostRequest */
        //dd($request->all()); + token mas metodo, cuando queremos ver todos los datos, saber que llega o no
        /*
        $content = $request->content."info6";
        $post->update([
            'title' => $request->title,
            'url_clean' => $request->url_clean,
            'content' => $content
        ]);     

            MANUAL

        */

        //dd($request->validated());

        //Post::find($id)->update($request->validated()); //Este es para buscar primero el ID y luego lo actualiza
        //PARA EL POST PIDE UN IMPORT 
        //METODO WHERE PARA id  Post::where('id', $id)->update($request->validated());

        $post->update($request->validated());
        return back()->with('status', 'Post se ha actualizado correctamente');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Posts $post)
    {
        //
        //dd($post);
        $post->delete();
        return back()->with('status', 'Post deleted sucessfully');
    }
}
