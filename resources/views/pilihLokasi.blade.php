{{-- @extends('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
<div style="padding-top: 10px;position: sticky;top: 0">
    <a href="/kota" class="btn btn-outline-dark ml-3">
        << Back</a>
</div>
<br><br>
@if (Auth::user()->role == "admin")
<a href="/createlocation" class="btn btn-primary" style="margin-left: 20px">Create</a>
@endif

<form action="" method="GET" style="margin: 0 auto; width: 70%">
    <div class="input-group-prepend">
        <input type="search" class="form-control" placeholder="Cari kelurahan/kecamatan" name="search">
        <button name="" class="btn btn-outline-primary" type="submit">Search</button>
    </div>
</form>


<div class="row row-cols-4" style="margin: auto; padding: 50px;" id="cardsLokasi">
    @foreach ($lokasi as $i)
    <div class="col" style="margin-left: 80px">
        <div class="card" style="text-align: center">
            <a class="stretched-link" href="/daftar/{{$i->id}}"></a>
            <img class="card-img-top" src="../storage/{{ $i->gambar }}" alt="Salah seeding atau create" style="height: 200px">

            <div class="card-body">
                <h5 class="card-title"><b>{{$i->nama}}</b></h5>
                <h6 class="card-title"><b>Tanggal: {{$i->tanggal}}</b></h6>
                <h6 class="card-title"><b>Jam: {{$i->jam}}</b></h6>
                <p class="card-text">{{$i->alamat}}</p>
            </div>

            <div class="card-footer">
                <p class="card-text"><small class="text-muted">{{$i->no_telp}}</small></p>
            </div>
        </div>

        @can('isAdmin')
        <div class="row d-flex justify-content-center">
            <a href="/updatelocation/{{$i->id}}" class="btn btn-success">Update</a>
            <form method="POST" action="{{route('dellocation', $i->id)}}">
                @csrf
                @METHOD('DELETE')
                <button class="btn btn-danger" role="button" type="submit">Delete</button>
            </form>
        </div>
        @endcan
    </div>
    @endforeach
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $(document).on('keyup paste', '#search', function() {

            var test = $('#search').val();
            var id = "{{$lokasi[0]->id_kota}}";
            $.ajax({
                type: "get",
                url: "{!! route('Location') !!}/",
                data: {
                    'search': test,
                    'id_kota': id
                },
                success: function(result) {

                    var data = JSON.parse(result);
                    // console.log(data);
                    $('#cardsLokasi').empty();
                    $.each(data, function(key, value) {
                        // console.log(value['id']);
                        $('#cardsLokasi').append(`

                            <div class="col" style="margin-left: 80px">
                                <div class="card" style="text-align: center">
                                    <a class="stretched-link" href="/daftar/${value['id']}"></a>
                                    <img class="card-img-top" src="../storage/${value['gambar']}" alt="Salah seeding atau create" style="height: 200px">

                                    <div class="card-body">
                                        <h5 class="card-title"><b>${value['nama']}</b></h5>
                                        <h6 class="card-title"><b>Tanggal: ${value['tanggal']}</b></h6>
                                        <h6 class="card-title"><b>Jam: ${value['jam']}</b></h6>
                                        <p class="card-text">${value['alamat']}</p>
                                    </div>

                                    <div class="card-footer">
                                        <p class="card-text"><small class="text-muted">${value['no_telp']}</small></p>
                                    </div>
                                </div>

                                @can('isAdmin')
                                <div class="row d-flex justify-content-center">
                                    <a href="/updatelocation/${value['id']}" class="btn btn-success">Update</a>
                                    <form method="POST" action="{{route('dellocation', $i->id)}}">
                                        @csrf
                                        @METHOD('DELETE')
                                        <button class="btn btn-danger" role="button" type="submit">Delete</button>
                                    </form>
                                </div>
                                @endcan
                            </div>
                        `);
                    })

                },
                error: function(error) {

                }
            });
        });
    });
</script>
@endsection --}}

@extends('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
<div style="padding-top: 10px;position: sticky;top: 0">
    <a href="/kota" class="btn btn-outline-dark ml-3">
        << Back</a>
</div>
<br><br>
@if (Auth::user()->role == "admin")
<a href="/createlocation" class="btn btn-primary" style="margin-left: 20px">Create</a>
@endif

<form action="" method="GET" style="margin: 0 auto; width: 70%">
    <div class="input-group-prepend">
        <input id="search" type="search" class="form-control" placeholder="Cari kelurahan/kecamatan" name="search">
        <button name="" class="btn btn-outline-primary" type="submit">Search</button>
    </div>
</form>

<div id="cardsLokasi" class="row row-cols-4" style="margin: auto; padding: 50px;">
    @foreach ($lokasi as $i)
    <div class="col" style="margin-left: 80px">
        <div class="card" style="text-align: center">
            <a class="stretched-link" href="/daftar/{{$i->id}}"></a>
            <img class="card-img-top" src="../storage/{{ $i->gambar }}" alt="Salah seeding atau create" style="height: 200px">

            <div class="card-body">
                <h5 class="card-title"><b>{{$i->nama}}</b></h5>
                <h6 class="card-title"><b>Tanggal: {{$i->tanggal}}</b></h6>
                <h6 class="card-title"><b>Jam: {{$i->jam}}</b></h6>
                <p class="card-text">{{$i->alamat}}</p>
            </div>

            <div class="card-footer">
                <p class="card-text"><small class="text-muted">{{$i->no_telp}}</small></p>
            </div>
        </div>

        @can('isAdmin')
        <div class="row d-flex justify-content-center">
            <a href="/updatelocation/{{$i->id}}" class="btn btn-success">Update</a>
            <form method="POST" action="{{route('dellocation', $i->id)}}">
                @csrf
                @METHOD('DELETE')
                <button class="btn btn-danger" role="button" type="submit">Delete</button>
            </form>
        </div>
        @endcan
    </div>
    @endforeach
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $(document).on('keyup paste', '#search', function() {

            var test = $('#search').val();
            var id = "{{$lokasi[0]->id_kota}}";
            $.ajax({
                type: "get",
                url: "{!! route('Location') !!}/",
                data: {
                    'search': test,
                    'id_kota': id
                },
                success: function(result) {

                    var data = JSON.parse(result);
                    // console.log(data);
                    $('#cardsLokasi').empty();
                    $.each(data, function(key, value) {
                        // console.log(value['id']);
                        $('#cardsLokasi').append(`

                            <div class="col" style="margin-left: 80px">
                                <div class="card" style="text-align: center">
                                    <a class="stretched-link" href="/daftar/${value['id']}"></a>
                                    <img class="card-img-top" src="../storage/${value['gambar']}" alt="Salah seeding atau create" style="height: 200px">

                                    <div class="card-body">
                                        <h5 class="card-title"><b>${value['nama']}</b></h5>
                                        <h6 class="card-title"><b>Tanggal: ${value['tanggal']}</b></h6>
                                        <h6 class="card-title"><b>Jam: ${value['jam']}</b></h6>
                                        <p class="card-text">${value['alamat']}</p>
                                    </div>

                                    <div class="card-footer">
                                        <p class="card-text"><small class="text-muted">${value['no_telp']}</small></p>
                                    </div>
                                </div>

                                @can('isAdmin')
                                <div class="row d-flex justify-content-center">
                                    <a href="/updatelocation/${value['id']}" class="btn btn-success">Update</a>
                                    <form method="POST" action="{{route('dellocation', $i->id)}}">
                                        @csrf
                                        @METHOD('DELETE')
                                        <button class="btn btn-danger" role="button" type="submit">Delete</button>
                                    </form>
                                </div>
                                @endcan
                            </div>
                        `);
                    })

                },
                error: function(error) {

                }
            });
        });
    });
</script>
@endsection
