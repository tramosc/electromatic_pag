<?php

namespace App\Http\Controllers;

use App\Blogs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class BlogsController extends Controller
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
        $datos['blogs'] = Blogs::paginate(25);
        return view('blogs.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('blogs.create');
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
        $datosBlog = request()->except('_token');

        if($request->hasFile('img_portada')){
            $datosBlog['img_portada']=$request->file('img_portada')->store('uploads', 'public');
        }
        if($request->hasFile('img_contenido')){
            $datosBlog['img_contenido']=$request->file('img_contenido')->store('uploads', 'public');
        }

        Blogs::insert($datosBlog);
        return redirect('blogs');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Blogs  $blogs
     * @return \Illuminate\Http\Response
     */
    public function show(Blogs $blogs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blogs  $blogs
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $blog= Blogs::findOrFail($id);

        return view('blogs.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blogs  $blogs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosBlog=request()->except(['_token','_method']);


         if($request->hasFile('img_portada')){
            $blog= Blogs::findOrFail($id);
            Storage::delete('public/'.$blog->img_portada);
            $datosBlog['img_portada']=$request->file('img_portada')->store('uploads', 'public');
       }

       if($request->hasFile('img_contenido')){
        $blog= Blogs::findOrFail($id);
        Storage::delete('public/'.$blog->img_contenido);
        $datosBlog['img_contenido']=$request->file('img_contenido')->store('uploads', 'public');
   }

        Blogs::where('id','=',$id)->update($datosBlog);
 
         $blog= Blogs::findOrFail($id);
         return redirect('blogs');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blogs  $blogs
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $blog= Blogs::findOrFail($id);

        if(Storage::delete('public/'.$blog->img_portada)){
            Blogs::destroy($id);
        }
        if(Storage::delete('public/'.$blog->img_contenido)){
            Blogs::destroy($id);
        }

        return redirect('blogs');
    }
}
