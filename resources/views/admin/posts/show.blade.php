@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>Visualizzazione post</h1>
        <h2>
            {{$post->title}}
        </h2>
    </div>
@endsection