@extends('layouts.app')

@section('content')

<section class="py-5 container">
    <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
            <div class="card">

                <div class="card-body">

                    <h5 class="card-title">Nama:    {{$info->name}}</h5>
                    <h5 class="card-title">Lokasi Vaksinasi:    {{$location->nama}}</h5>
                    <h5 class="card-title">Email:    {{$email->email}}</h5>
                    <h5 class="card-title">Tanggal Vaksinasi:   {{$info->tanggal_vaksin}}</h5>
                    <h5 class="card-title">Jam Vaksinasi:   {{$info->jam_vaksin}}</h5>
                    <h5 class="card-title">NIK: {{$info->NIK}}</h5>
                    {{-- modal button --}}
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        Lihat KTP/KK
                    </button>
                    {{-- modal button --}}
                    {{-- modal --}}
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Foto KTP/KK</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <img src="../proof/{{$info->bukti}}" alt="image not found" style="width: 100%;height: 100%;">
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    {{-- modal --}}
                    <p class="card-text">*Mohon untuk menunjukkan kartu ini kepada petugas/perawat yang ada di lokasi.</p>

                </div>
            </div>
        </div>
    </div>
</section>
@endsection
