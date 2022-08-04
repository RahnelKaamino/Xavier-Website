@extends('layouts.master')
@section('title','Add Category')

@section('content')

<div class="container-fluid-px-4" style="background: #d9d9d9; font-style: Merriweather;">

    <div class="card-header mt-6">
        <div class="card-header"style="background: #f1f1f1; font-style: Merriweather;">
        <h4 class="">Category</h4>
        <hr>
</div>
<div class="card-body">
    @if($errors->any())
            <div class="aler alert-danger">
                @foreach ($errors->all() as $error )
            <div>{{$error}}</div>

                @endforeach
            </div>
    @endif
    <form action="{{ url('admin/add-category')}}" method="POST" enctype="multipart/form-data"> @csrf

    <div class="mb-2">
        <label for=""> Category Name</label>
        <input type="text" name="name"class="form-control" placeholder="Enter name..."/>
</div>
<div class="mb-3">
        <label for=""> Slug</label>
        <input type="text" name="slug"class="form-control form-control-sm" placeholder="Enter slug..."/>
</div>
<div class="mb-5">
        <label for=""> Category Decription</label>
        <textarea class="form-control" id="description" rows="3" placeholder="Enter description..."></textarea>
</div>
<div class="mb-5">
        <label for="">Image</label>
        <input type="file" name="image"class="form-control"/>
</div>

<h3> SEO Tags</h3>

<div class="mb-3">
        <label for="">Meta Title</label>
        <input type="text" name="meta_title"class="form-control form-control-sm"placeholder="Enter meta title..."/>
</div>
<div class="mb-3">
        <label for="">Meta Description</label>
        <textarea name="meta_desc"class="form-control "placeholder="Enter meta description..."></textarea>
</div>
<div class="mb-3">
        <label for="">Meta Keywords</label>
        <textarea name="meta_keyword"class="form-control "placeholder="Enter meta keywords..."></textarea>
</div>

<h3>Status Mode</h3>

<div class="row">
    <div class="col-md-3 mb-3">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="navbarStatus">
        <label class="form-check-label" for="flexCheckDefault">
            Navbar Status
          </label>
</div>
<div class="col-md-3 mb-3">
    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"name="status">
    <label class="form-check-label" for="flexCheckDefault">
        Status
      </label>

</div>
<div class="col-md-6">
        <button type="submit" class="btn btn-primary btn-block" style="float:right;"> Save Category </button>
</div>
</div>

</form>
</div>
</div>
</div>
@endsection
