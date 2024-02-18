@extends('layouts.app')

@section('content')
    <a href="{{url()->previous()}}" class="btn btn-outline-dark ml-3"><< Back</a><br><br>
    <h1 class="text-center">Update Location</h1>
    @foreach ($lokasi as $i)
        <form action="{{ route('update',$i->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="ml-3">
                <h6>Nama Tempat</h6><input type="text" id="nama" name="nama" class="form-control @error('nama') is-invalid @enderror">
                @error('nama')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                @enderror

                <br><h6>Alamat</h6> <input type="text" id="alamat" name="alamat" class="form-control @error('alamat') is-invalid @enderror">
                @error('alamat')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

                <br><h6>No Telp</h6> <input type="text" id="no_telp" name="no_telp" class="form-control @error('no_telp') is-invalid @enderror">
                @error('no_telp')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

                <br><h6>Tanggal</h6> <input type="text" id="tanggal" name="tanggal" class="form-control @error('tanggal') is-invalid @enderror">
                @error('tanggal')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

                <br><h6>Jam</h6> <input type="text" id="jam" name="jam" class="form-control @error('jam') is-invalid @enderror">
                @error('jam')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

                <br><h6>Gambar</h6> <input type="file" id="gambar" name="gambar" class="form-control @error('no_telp') is-invalid @enderror">
                @error('gambar')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="text-center">
                <br><button type="submit" class="btn btn-success">Update</button>
            </div>
        </form>
    @endforeach
@endsection
