@extends('layouts.app')

@section('content')
    <a href="/berita" class="btn btn-outline-dark ml-3"><< Back</a><br><br>
    <h1 class="text-center">Add News</h1>
    <form action="/createnews" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="ml-3">
            <h6>Judul</h6> <input type="text" id="judul" name="judul" class="form-control @error('judul') is-invalid @enderror"><br>
            @error('judul')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
            @enderror

            <h6>Tanggal</h6> <input type="date" name="tanggal" id="tanggal" class="form-control @error('tanggal') is-invalid @enderror"><br>
            @error('tanggal')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
            @enderror
            <h6>Gambar</h6> <input type="file" name="gambar" id="gambar" class="form-control @error('gambar') is-invalid @enderror"><br>
            @error('gambar')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
            @enderror
            <h6>Sumber</h6> <input type="text" name="sumber" id="sumber" class="form-control @error('sumber') is-invalid @enderror"><br>
            @error('sumber')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
            @enderror
            <h6>Deskripsi singkat</h6> <input type="text" name="shortdesc" id="shortdesc" class="form-control @error('shortdesc') is-invalid @enderror">
            @error('shortdesc')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
            @enderror
            <h6>Isi</h6> <textarea name="isi" id="isi" cols="100" rows="10" class="form-control @error('isi') is-invalid @enderror"></textarea>
            @error('isi')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
            @enderror
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-primary">Create</button>
        </div>
    </form>
@endsection
