@extends('layouts.app')

@section('content')
<div style="padding-top: 10px;position: sticky;top: 0">
    <a href="{{url()->previous()}}" class="btn btn-outline-dark ml-3"><< Back</a><br><br>
</div>
<div class="container">

    <div id="Header" class="container-fluid" style="justify-content: center; display: flex;">
        <h1>Daftar Vaksinasi Booster</h1>
    </div>

    <nav id="navbar-example2" class="navbar navbar-dark bg-dark" style="width: auto;">

        <ul class="nav nav-pills">
            <li class="nav-item">
                <a class="nav-link" href="#syarat">Syarat</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#Penjelasan">Penjelasan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#daftar">Daftar</a>
            </li>
        </ul>
    </nav>
    <br>

    <div data-spy="scroll" data-target="#navbar-example2" data-offset="0">
        <h4 id="syarat">Ketentuan Vaksinasi Booster</h4>
        <nav class="nav flex-column">
            <p>1. Calon penerima vaksin menunjukkan NIK dengan membawa KTP/KK atau melalui aplikasi Peduli Lindungi</p>
            <p>2. Berusia 18 tahun ke atas; dan</p>
            <p>3. Telah mendapatkan vaksinasi primer dosis lengkap minimal enam bulan sebelumnya</p>
            <p>4. Penerima vaksin Sinovac dosis pertama dan kedua juga bisa menggunakan jenis vaksin AstraZeneca dan Pfizer setengah dosis sebagai vaksin booster</p>
            <p>5. Penerima vaksin AstraZeneca dosis pertama dan kedua bisa menggunakan jenis vaksin Moderna setengah dosis sebagai vaksin booster</p>
            <br>
            <h4>Ibu Hamil</h4>
            <p>1. Tekanan darah di bawah 140/90 mmHg</p>
            <p>2. Usia kandungan minimal di atas 13 minggu / trimester kedua</p>
            <p>3. Tidak ada tanda-tanda preeklamsia</p>
            <p>4. Tidak memiliki riwayat alergi berat</p>
            <p>5. Ibu hamil dengan penyakit penyerta atau komorbid harus dalam keadaan terkontrol dan tidak ada komplikasi akut</p>
            <p>6. Ibu hamil dengan penyakit autoimun harus dalam keadaan terkontrol dan tidak ada komplikasi akut</p>
            <p>7. Tidak sedang menjalani pengobatan</p>
            <p>8. Tidak sedang menerima pengobatan imunosupresan</p>
            <br>
        </nav>

            <h4 id="Penjelasan">Penjelasan</h4>
            <nav class="nav flex-column">
                <b>
                    <p>1. Nama lengkap dipakai saat melakukan vaksinasi dan akan divalidasi ke data kartu keluarga yang ada</p>
                    <p>2. Foto NIK dari KTP atau Kartu Keluarga yang diupload akan digunakan sebagai bukti sah pemilik Nomor Induk Keluarga</p>
                    <p>3. Durasi yang tertera dalam jadwal merupakan maksimum dan diharapkan anda dapat datang sebelum akhir durasi</p>
                    <p>4. Semua data yang diberi bersifat personal sehingga akan digunakan khusus demi kepentingan vaksinasi</p>
                </b>
            </nav>

        <div id="daftar" class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center">
                        <strong>
                            {{ __('Registrasi vaksinasi') }}
                        </strong>
                    </div>

                    <div class="card-body">
                        <form method="POST" action="/daftar" enctype="multipart/form-data">
                            @csrf
                            @METHOD('POST')

                            <input type="hidden" name="id" value="{{$id}}">
                            <input type="hidden" name="tanggal" value="{{$place->tanggal}}">
                            <input type="hidden" name="jam" value="{{$place->jam}}">

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nama lengkap') }}</label>

                                <div class="col-md-6">
                                    <input id="name"  type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="text" class="col-md-4 col-form-label text-md-right">{{ __('Nomor induk keluarga') }}</label>

                                <div class="col-md-6">
                                    <input placeholder="NIK harus 16 digit" id="NIK" type="text" class="form-control @error('NIK') is-invalid @enderror" name="NIK" value="{{ old('NIK') }}" required autocomplete="NIK">

                                    @error('NIK')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">

                                <label class="col-md-4 col-form-label text-md-right">{{ __('Lokasi') }}</label>

                                <div class="col-md-6">
                                    <label>{{$place->nama}}</label>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="date" class="col-md-4 col-form-label text-md-right">{{ __('Tanggal vaksinasi') }}</label>

                                <div class="col-md-6">
                                    <label>{{$place->tanggal}}</label>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="date" class="col-md-4 col-form-label text-md-right">{{ __('Jam vaksinasi') }}</label>

                                <div class="col-md-6">
                                    <label>{{$place->jam}}</label>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="foto" class="col-md-4 col-form-label text-md-right">{{ __('Masukkan foto kartu keluarga atau KTP') }}</label>

                                <div class="col-md-6">
                                    <input id="foto" type="file" name="bukti" class="form-control @error('bukti') is-invalid @enderror" value="{{ old('bukti') }}" required>
                                    <span>Format file: jpg,jpeg,png</span>
                                    @error('bukti')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>

</script>
@endsection
