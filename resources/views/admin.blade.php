@extends('layouts.app')

@section('content')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >
    @can('isAdmin')
        <div class="d-flex flex-row-reverse pr-3">
            <a href="/createnews" class="btn btn-primary">Create News</a>
        </div>
    @endcan
    @foreach ($berita as $i)
    <div class="mx-auto" id="box-berita">
        <a href="/berita/{{$i->id}}">
            <img src="../storage/{{$i->gambar}}" alt="image not found"><br><br>
        </a>
        <p class="text-primary">
            {{-- icon jam --}}
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
            </svg>
            {{--  --}}
            {{$i->tanggal}}
        </p>
        <h1>{{$i->judul}}</h1>
        <p class="shortdesc">{{$i->shortdesc}}</p>
        <a href="/berita/{{$i->id}}">Read More</a><br><br>
        @can('isAdmin')
            <form action="{{ route('delete',$i->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit">Delete</button>
            </form>
            <a href="/update/{{$i->id}}" class="btn btn-success">Update</a><br><br>
        @endcan
    </div>
    @endforeach
    <div class="pagination">
        {{$berita->links()}}
    </div>
@stop

