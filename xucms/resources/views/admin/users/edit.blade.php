@extends('layouts.master')
@section('title','Edit Users')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit User</h2>
            </div>
            <div class="pull-right"> <a class="btn btn-primary" style="float:right; margin-right: 25px; width:15%;" href="{{ route('users') }}"> Back</a>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('users.update',$user->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-md-8">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" value="{{ $user->name }}" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-md-8">
                <div class="form-group">
                    <strong>Email:</strong>
                    <input type="text" name="email" value="{{ $user->email }}"class="form-control" placeholder="Enter email...">
                </div>
            </div>
            <div class="col-md-8">
                <div class="form-group">
                    <strong>Role:</strong>
                    <input type="text" name="role" value="{{ $user->role }}"class="form-control" placeholder="Enter role...">
                </div>
            </div>
            <div class="col-md-8">
                <div class="form-group">
                    <strong>Password:</strong>
                    <input type="text" name="password" value="{{ $user->password }}"class="form-control" placeholder="Enter password...">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary"  style="float:right; margin-right: 400px; width:15%;">Submit</button>
              </div>
          </div>
    </form>
@endsection