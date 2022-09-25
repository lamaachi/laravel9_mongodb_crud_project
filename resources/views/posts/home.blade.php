@extends('layout.app')

@section('content')
    <div class="row">
        <div class="col-md-10 mx-auto my-5">
            <div class="card bg-light">
                <div class="card-header">
                    <h4 class="text-left">Posts</h4>
                    <div class="float-end">
                        <a href="{{route('post.create')}}" class="btn btn-link">Ajouter</a>
                    </div>
                </div>
                <div class="card-body">
                    <p class="card-text">
                        <table class="table table-hover">
                            <thead>
                                <th class="w-25">Id</th>
                                <th class="w-25">Titre</th>
                                <th class="w-25">Descreption</th>
                                <th class="w-25">Action</th>
                            </thead>
                            <tbody>
                                @foreach ($posts as $post)
                                <tr>
                                    <td>{{$post->_id}}</td>
                                    <td>{{$post->titre}}</td>
                                    <td>{{$post->descreption}}</td>
                                    <td> 
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <a  href="{{ url("/post/" . $post->_id . '/edit')}}" class="btn btn-primary">Edit</a>
                                            <a href="{{ route('post.show', $post->_id)}}" class="btn btn-success">View</a>
                                            <a class="btn btn-danger"  href="{{ route('post.index') }}" 
                                                onclick="event.preventDefault();
                                                    document.getElementById(
                                                    'delete-form-{{$post->_id}}').submit();">
                                                Delete 
                                            </a>
                                            <form id="delete-form-{{$post->_id}}" 
                                                 action="{{route('post.destroy', $post->_id)}}"
                                                 method="post">
                                                 @csrf @method('DELETE')
                                          </form>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection