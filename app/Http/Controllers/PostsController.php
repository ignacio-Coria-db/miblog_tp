<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Posts; //incluir modelo

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Posts::all();
        return view('posts.index', ["posts"=>$posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validar datos del formulario create
        $this->validate($request, [
            'titulo' =>'required',
            'contenido'=>'required',
        ]);

        $post = new Posts();
        $post->titulo = $request->input('titulo');
        $post->contenido = $request->input('contenido');
        $post->save();

        return redirect('/posts')->with("succes", "Post creado Exitosamente"); //lista de todos los posts
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Posts::find($id);
        return view('posts.show',['post' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Posts::find($id);
        return view('posts.edit', ['post'=>$post]);
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
         //validar datos del formulario 
         $this->validate($request, [
            'titulo' =>'required',
            'contenido'=>'required',
        ]);

        $post =  Posts::find($id);
        $post->titulo = $request->input('titulo');
        $post->contenido = $request->input('contenido');
        $post->save();

        return redirect('/posts')->with("succes", "Post editado Exitosamente"); //lista de todos los posts
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post =  Posts::find($id);
        $post->delete();

        return redirect('/posts')->with("succes", "Post eliminado Exitosamente"); //lista de todos los posts
    }
}
