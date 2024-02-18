@extends('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('css/charts.css') }}">

<div id="menuSidebar" class="sidebar">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
    <a href="/charts">Covid-19 Nasional dan Per-Provinsi</a>
    <a href="/charts2">Vaksinasi dan Rumah Sakit Rujukan</a>
    <a href="/charts3">Perbandingan Kumulatif Total Kasus COVID-19 Antara Indonesia dengan Negara Tetangga</a>
</div>
<div id="main">
    <button class="btn btn-outline-dark" onclick="openNav()">☰</button>
    <a href="/education" class="btn btn-outline-primary eduButton">Pelajari Lebih Lanjut Tentang Covid-19</a>
</div>

<div class="chartContainer">
<h2></h2>
<div class="chartContainer2">
    <div class='tableauPlaceholder' id='viz1641881047270' style='position: relative'><object class='tableauViz'  style='display:none;'><param name='host_url' value='https%3A%2F%2Fpublic.tableau.com%2F' /> <param name='embed_code_version' value='3' /> <param name='site_root' value='' /><param name='name' value='PerbandinganKumulatifKasusTerkonfirmasidanKematianCOVID-19AntaraIndonesiadanNegaraTetangga&#47;Dashboard1' /><param name='tabs' value='no' /><param name='toolbar' value='yes' /><param name='animate_transition' value='yes' /><param name='display_static_image' value='yes' /><param name='display_spinner' value='yes' /><param name='display_overlay' value='yes' /><param name='display_count' value='yes' /><param name='language' value='en-US' /></object></div>                <script type='text/javascript'>                    var divElement = document.getElementById('viz1641881047270');                    var vizElement = divElement.getElementsByTagName('object')[0];                    if ( divElement.offsetWidth > 800 ) { vizElement.style.width='1000px';vizElement.style.height='827px';} else if ( divElement.offsetWidth > 500 ) { vizElement.style.width='1000px';vizElement.style.height='827px';} else { vizElement.style.width='100%';vizElement.style.height='1027px';}                     var scriptElement = document.createElement('script');                    scriptElement.src = 'https://public.tableau.com/javascripts/api/viz_v1.js';                    vizElement.parentNode.insertBefore(scriptElement, vizElement);                </script>
    <span>Source: ourworldindata.org</span>
</div>
</div>

@endsection
@push('scripts')
<script src="//code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="{{ asset('js/functions.js') }}"></script>
@endpush
