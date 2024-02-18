@extends('layouts.app')

@section('content')
<a href="{{url()->previous()}}" class="btn btn-outline-dark ml-3">
    << Back</a><br><br>
        <h1 class="text-center">Add Location</h1>

        <form action="/createlocation" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="ml-3">
                <h6>Kota</h6>
                <select name="id_kota" class="form-control">
                    @foreach ($kota as $i)
                    <option value="{{$i->id}}">{{$i->kota}}</option>
                    @endforeach
                </select><br>

                <h6>Nama Tempat</h6>
                <input type="text" id="nama" name="nama" class="form-control @error('nama') is-invalid @enderror">
                @error('nama')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

                <br>
                <h6>Alamat</h6>
                <input type="text" id="alamat" name="alamat" class="form-control @error('alamat') is-invalid @enderror">
                @error('alamat')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

                <br>
                <h6 aria-describedby="passwordHelpInline">Tanggal Vaksinasi</h6>
                <small id="passwordHelpInline" class="text-muted">Contoh: 28-29 Januari</small>
                <input type="text" id="tanggal" name="tanggal" class="form-control @error('tanggal') is-invalid @enderror">

                @error('tanggal')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

                <br>
                <h6 aria-describedby="passwordHelpInline2">Jam Vaksinasi</h6>
                <small id="passwordHelpInline2" class="text-muted">Contoh: 08.00 - 12.00 WIB</small>
                <input type="text" id="jam" name="jam" class="form-control @error('jam') is-invalid @enderror">
                @error('jam')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

                <br>
                <h6>No Telp</h6>
                <input type="text" id="no_telp" name="no_telp" class="form-control @error('no_telp') is-invalid @enderror">
                @error('no_telp')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

                <br>
                <h6>Gambar</h6>
                <input type="file" id="gambar" name="gambar" class="form-control @error('gambar') is-invalid @enderror">
                @error('gambar')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="text-center">
                <br><button type="submit" class="btn btn-primary">Create</button>
            </div>
        </form>
        @endsection