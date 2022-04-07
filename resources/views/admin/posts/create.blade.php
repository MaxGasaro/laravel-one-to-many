@extends('admin.layouts.base')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h1>Crea un nuovo post</h1>
                <form method="POST" action={{route('admin.posts.store')}}>

                    @csrf

                    <div class="form-group">
                      <label for="category_id">Categoria</label>
                      <select multiple class="form-control" id="category_id" name="category_id">
                        <option value="">Nessuna categoria</option>
                        @foreach ($categories as $category)
                          <option {{(old('category_id', $post->category_id) == $category_id) ? 'selected' : ''}} value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                      </select>
                    </div>

                    <div class="form-group">
                      <label for="title">Titolo</label>
                      <input type="text" class="form-control" id="title" name="title" value="{{old('title')}}">
                    </div>
                    <div class="form-group">
                      <label for="content">Contenuto del post</label>
                      <textarea class="form-control" id="content" name="content" rows="10">{{old('content')}}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Salva</button>

                  </form>
            </div>
        </div>
    </div>
@endsection