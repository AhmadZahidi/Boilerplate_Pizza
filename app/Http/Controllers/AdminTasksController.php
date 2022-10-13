<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File; 
use Illuminate\Http\Request;
use App\Http\Requests\AdminStorePost;
use App\Product;

class AdminTasksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

      $tasks = \App\Product::all();
      return view('admin.tasks_index',
      [
          'tasks'=> $tasks
      ]
      );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $task = new \App\Task;
        return view('admin.tasks_newedit',[
            'task'=>$task,
            'new_form'=>true
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdminStorePost $request)
    {
        $request->validated();

        $newImageName = time().'-'.$request->title . '.'.$request->image->extension();

        $request->image->move(public_path('images'), $newImageName);
        
        $Model=new \App\Product;
        $menu=$Model::create([
            'image'=>$newImageName,
            'title'=>$request->input('title'),
            'description'=>$request->input('description'),
            'price'=>$request->input('price')
        ]);

        return redirect()->route('admin.tasks.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $task = \App\Task::find($id);
        return view('admin.tasks_newedit',[
            'task'=>$task,
            'new_form'=>false
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.tasks_update',['post'=>Product::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AdminStorePost $request, $id)
    {
        $request->validated();
        
        $newImageName = time().'-'.$request->title . '.'.$request->image->extension();

        $request->image->move(public_path('images'), $newImageName);

        $Model=new \App\Product;
        $post=$Model::findOrFail($id);

        $post->fill([
            'image'=>$newImageName,
            'title'=>$request->input('title'),
            'description'=>$request->input('description'),
            'price'=>$request->input('price')
        ]);
        $post->save();
        return redirect()->route('admin.tasks.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post=Product::find($id);
        $path="D:/Utilities_software/laragon/www/Boilerplate_pizza/public/images/";
        File::delete($path.$post->image);
        $post->delete();
        return redirect()->route('admin.tasks.index');
    }
}
