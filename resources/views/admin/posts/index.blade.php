@extends('layouts.dashboard')
@section('content')
    <h1>All posts for admin</h1>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>AUTHOR</th>
                <th>TITLE</th>
                <th>BODY</th>
                <th>SLUG</th>
                <th>CREATED AT</th>
                <th>EDITED AT</th>
                <th>ACTION</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
            <tr>
                <td scope="row">{{$post->id}}</td>
                <td>{{$post->author}}</td>
                <td>{{$post->title}}</td>
                <td>{{$post->body}}</td>
                <td>{{$post->slug}}</td>
                <td>{{$post->created_at}}</td>
                <td>{{$post->updated_at}}</td>
                <td>
                    <a href="{{ route('admin.posts.show', ['post'=> $post->id] )}}" class="btn btn-primary">Leggi</a>
                    <a href="" class="btn btn-warning">Modifica</a>
                    <a href="" class="btn btn-danger">Elimina</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
@endsection