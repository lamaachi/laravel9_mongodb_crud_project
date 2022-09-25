@extends('layout.app')

@section('content')
    <div class="row">
        <div class="col-md-8 mx-auto my-5">
            <div class="card bg-light">
                <div class="card-header d-flex justify-content-between">
                    <h3>{{ $post->titre}}</h3>
                    <a href="{{ route('post.index')}}" class="btn btn-link">Retour</a>
                </div>
                <div class="card-body">
                    <ul class="list-group active">
                        <li class="list-group-item text-primary">{{ $post->_id}}</li>
                        <li class="list-group-item">{{ $post->descreption}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection