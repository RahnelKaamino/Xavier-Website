@extends('layouts.master')
@section('title','Category')

@section('content')

<div class="container-fluid px-4">
    <a class="btn btn-primary btn-block" style="float:right;" href="{{url('admin/add-category')}}">Add Category</a>
                        <h1 class="mt-4">Category</h1>
                        @if(session('message'))
                        <div class="alert alert-sucess">(session('message'))</div>

                        @endif()
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Category List</li>
                        </ol>
</div>
@endsection
