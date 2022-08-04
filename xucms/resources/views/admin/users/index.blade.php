@extends('layouts.master')
@section('title','Users')

@section('content')

<div class="container-fluid px-4">
                        <h1 class="mt-4">Users</h1>
                        <a class="btn btn-success btn-block" style="float:right; margin-right: 15px;" href="{{route('users.create')}}"><i class="fa-solid fa-plus"></i> Add New User</a>
                        @if(session('message'))
                        <div class="alert alert-sucess">(session('message'))</div>

                        @endif()
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">User List</li>
                        </ol>

                        <table class="table table-striped">
                            <thead>
                              <tr>
                               
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Role</th>
                                <th scope="col"><center> Action </center></th>
                              </tr>
                            </thead>
                            <tbody>
                              @foreach($users as $user)
                              <tr>
                                
                                <td scope="row">{{($user->name)}}</td>
                                <td scope="row">{{($user->email)}}</td>
                                <td scope="row">{{($user->role)}}</td>
                                <td>
                                  <center>

                                  <a class="btn btn-primary" href="{{ route('users.show',$user->id) }}"><i class="fa-solid fa-eye"></i> View</a> 
                                  <a  href="{{route('users.edit', $user->id)}}"><button class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i> Edit </button></a>
                                  <!--<a class="btn btn-primary" href="{{ route('users.update',$user->id) }}"><i class="fa-solid fa-square-arrow-up-right"></i> Update</a> -->
                                  <a class="btn btn-danger btn-flat" href="#" onclick="event.preventDefault(); document.getElementById('delete-user-{{$user->id}}').submit();"><i class="fa-solid fa-trash-can"></i> Delete </a>
                                  
                                  <form id="delete-user-{{$user->id}}" action="{{route('users.destroy', $user->id)}}" method="POST" style="display:none"> 
                                    @csrf
                                    @method("DELETE")
                                    </form>

                                  </center>
                                </td>
                              </tr>
                              @endforeach

                            </tbody>
                        </table>
                          {{$users->links()}}
                    </div>

@endsection