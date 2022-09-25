@extends('layout.app')

@section('content')
    <div class="row">
        <div class="col-md-6 mx-auto my-5">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="card bg-light">
                <div class="card-header d-flex justify-content-between">
                    <h3>Ajouter Post</h3>
                    <a href="{{ route('post.index')}}" class="btn btn-link">Retour</a>
                </div>
                <div class="card-body">
                    <form action="{{ url('/post')}}" method="POST">
                        @csrf
                        <label for="titre">Titre:</label>
                        <input type="text" class="form-control" name="titre" id="titre" value="{{ old("titre")}}">
    
                        <label for="descreption">Descreption:</label>
                        <textarea type="text" class="form-control" name="descreption" id="descreption">{{ old("descreption")}}</textarea>
    
                        <button type="submit" class="btn btn-primary mt-3">Ajouter</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection