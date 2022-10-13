@extends('admin.layouts.master')

@section('content')

<div class="navbar">
  <div style="display:flex;flex-direction:row;justify-content:center;align-items:center; ">
  
    <a href="http://boilerplate_pizza.test/admin/tasks" style="text-decoration:none;margin-top:-2px; margin-left:-12px; font-size:14px;backgroud-color:'black',width:40,">
      <i class="bi bi-chevron-left"></i>
       < Back</a>
    <div style="width:8px"></div>
  
  <span class="d-none d-md-block" style="font-size:16px;">New Task</span>
  <span class="d-block d-md-none" style="font-size:14px;">New Task</span>
  
  </div>
  
  
  </div>
{{-- Will do the form --}}

<div class="container-fluid" style="background-color: beige;">
  <h1 style="text-align: center;padding:1% 0% 1% 0%;">Update order</h1>
</div>

<section id="form" style="padding:1% 7%;">
  <form action="{{route('admin.tasks.update',$post->id)}}" method="POST"  enctype="multipart/form-data"   style="border:1px solid black;padding:2%;">
    @csrf
    @method('PUT')
  
    <div class="mb-3">
        <label class="form-label">Image</label>
        <div>
          <input type="file" name="image">
        </div>
      </div>
  
      <div class="mb-3">
        <label class="form-label">Title</label>
        <div>
          <input class="form-control" type="text" name="title" value="{{old('title',optional($post)->title)}}">
        </div>
      </div>
  
      <div class="mb-3">
        <label class="form-label">Description</label>
        <div>
        <textarea name="description" class="form-control" >{{old('description',optional($post)->description)}}</textarea>
        </div>
      </div>
  
      <div class="mb-3">
        <label class="form-label">Price</label>
        <div>
          <input class="form-control" type="text" name="price" placeholder="Price" value="{{old('price',optional($post)->price)}}">
        </div>
      </div>
  
    <div><input type="submit" value="Update" class="btn btn-primary"></div>
  </form>
</section>




@endsection
