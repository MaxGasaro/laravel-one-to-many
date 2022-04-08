@extends('admin.layouts.base')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">

                <h1>Visualizza post</h1>
                <div><strong>Titolo: </strong>{{$post->title}}</div>
                <div><strong>Contenuto: </strong>{{!! $post->content !!}}</div>
                <div><strong>Slug: </strong>{{$post->slug}}</div>
                <div><strong>Categoria: </strong>{{$post->category->name}}</div>
                {{-- qui inserisco i dati riguardanti i post --}}
                <a href="{{route('admin.posts.index')}}"></a>
            </div>
        </div>
    </div>
@endsection