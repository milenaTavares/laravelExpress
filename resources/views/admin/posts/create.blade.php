@extends('template')

@section('title')
    CreatePosts
@endsection

@section('content')
    <h1>Create new Post</h1>

    @if($errors->any())

        <ul class="alert">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>

    @endif

    {!! Form::open(['route'=>'admin.posts.store', 'method'=>'post']) !!}

        
         @include('admin.posts._form')

         <div class="form-group">
            {!! Form::label('tags', 'Tags:', ['class'=>'control-label']) !!}
            {!! Form::textarea('tags', null, ['class'=>'form-control']) !!}
         </div>

         <!-- Submit -->
         <div class="form-goup">
            {!! Form::submit('Creat Post', ['class'=>'btn btn-primary']) !!}
        </div>





    {!! Form::close() !!}

@endsection

