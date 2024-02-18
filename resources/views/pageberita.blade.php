@extends('layouts.app')


@section('content')
<style>
    pre{
        font-family: 'Times New Roman', Times, serif;
        text-align: left;
        white-space: pre-line;
    }
</style>

<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
<div class="pl-3">
    <a href="{{url()->previous()}}" class="btn btn-outline-dark">
        << Back</a>
</div>
@foreach ($berita as $i)
<div class="mx-auto" id="container">
    <h1>{{$i->judul}}</h1><br>
    <img src="../storage/{{$i->gambar}}"><br><br>
    <h6 class="text-primary">
        {{-- icon jam --}}
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
            <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
        </svg>
        {{-- --}}
        {{$i->tanggal}}
    </h6><br>
    <pre class="isi">{{$i->isi}}</pre><br>
    Sumber:<span class="text-primary"> {{$i->sumber}}</span>
</div>
@endforeach
@endsection
