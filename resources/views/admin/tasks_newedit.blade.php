@extends('admin.layouts.master')

<?php
$title = 'Edit Task';
$button_title = "Update Task";

if ($new_form == true){
  $title = 'New Task';
  $button_title = "Create New Task";
}
?>

@section('content')

@component('admin.components.navbar')
@slot('title',$title)
@slot('back_url',route('admin.tasks.index'))
@endcomponent

{{-- Will do the form --}}
<div class="container-fluid" style="background-color: beige;">
  <h1 style="text-align: center;padding:1% 0% 1% 0%;">Create order</h1>
</div>

<section id="form" style="padding:1% 7%;">
  
  <form action="{{route('admin.tasks.store')}}" method="POST"  enctype="multipart/form-data" style="border:1px solid black;padding:2%;">
    @csrf

    <div class="mb-3">
      <label class="form-label">Image</label>
      <div>
        <input type="file" name="image"  >
      </div>
    </div>
  
    <div class="mb-3">
      <label class="form-label">Title</label>
      <div>
        <input class="form-control" type="text" name="title" placeholder="title">
      </div>
    </div>
  
    <div class="mb-3">
      <label class="form-label">Description</label>
      <div>
      <textarea name="description" class="form-control"></textarea>
      </div>
    </div>
  
    <div class="mb-3">
      <label class="form-label">Price</label>
      <div>
        <input class="form-control" type="text" name="price" placeholder="Price">
      </div>
    </div>
  
    <div><input type="submit" value="Add" class="btn btn-primary" ></div>
  </form>

</section>


@endsection
