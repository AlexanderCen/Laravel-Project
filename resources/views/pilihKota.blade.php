@extends('layouts.app')

@section('content')
<form action="" method="GET" style="width: 70%;margin: 0 auto;">
    <div class="input-group">
        <input id="search" name="search" type="search" class="form-control rounded" placeholder="Cari kota" aria-label="Search" aria-describedby="search-addon" />
        <button type="button" class="btn btn-outline-primary">search</button>
    </div>
</form>

<div id="cardsKota" class="row row-cols-4" style="margin: auto; padding: 50px;">

    @foreach ($kota as $i)
    <div class="col" style="margin-left: 80px">
        <div class="card" style="text-align: center">
            <a class="stretched-link" href="/pilihLokasi/{{$i->id}}"></a>
            <img class="card-img-top" src="../storage/{{ $i->gambar }}" alt="Image not found" style="height: 200px">

            <div class="card-body">
                <h5 class="card-title"><b>{{$i->kota}}</b></h5>
            </div>
        </div>
    </div>
    @endforeach
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $(document).on('keyup paste', '#search', function() {

            var test = $('#search').val();

            $.ajax({
                type: "get",
                url: "{!! route('City') !!}/",
                data: {
                    'search': test
                },
                success: function(result) {

                    var data = JSON.parse(result);
                    // console.log(data);
                    $('#cardsKota').empty();
                    $.each(data, function(key, value) {
                        // console.log(value['id']);
                        $('#cardsKota').append(`

                            <div class="col" style="margin-left: 80px">
                                <div class="card" style="text-align: center">
                                    <a class="stretched-link" href="/pilihLokasi/${value['id']}"></a>
                                    <img class="card-img-top" src="../storage/${value['gambar']}" alt="Image not found" style="height: 200px">

                                    <div class="card-body">
                                        <h5 class="card-title"><b>${value['kota']}</b></h5>
                                    </div>
                                </div>
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
