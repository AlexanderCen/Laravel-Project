@extends('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('css/charts.css') }}">

{{-- sidebar --}}
<div id="menuSidebar" class="sidebar">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
    <a href="/charts" class="menu">Covid-19 Nasional dan Per-Provinsi</a>
    <a href="/charts2" class="menu">Vaksinasi dan Rumah Sakit Rujukan</a>
    <a href="/charts3" class="menu">Perbandingan Kumulatif Total Kasus COVID-19 Antara Indonesia dengan Negara Tetangga</a>
</div>
<div id="main">
    <button class="btn btn-outline-dark" onclick="openNav()">☰</button>
    <a href="/education" class="btn btn-outline-primary eduButton">Pelajari Lebih Lanjut Tentang Covid-19</a>
</div>
{{-- sidebar --}}
{{-- chart --}}
<div class="chartContainer" style="text-align: center;width: 90%;background-color: rgba(255, 255, 255, 0.479)">
    <h2>
        <b style="color: blue">Terkonfirmasi</b><br>
        <p>4.261.667 (+255 Kasus)</p>
        <b style="color: lightgreen">Sembuh</b><br>
        <p>4.112.901 (+195 Kasus)</p>
        <b style="color: lightsalmon">Meninggal</b>
        <p>144.053 (+6 Kasus)</p>
    </h2>
    <div style="text-align: center;width: 100%;background-color: white">
        Tanggal Pembaruan Data Terakhir: 27-12-2021 source:covid19.go.id
    </div>
</div>

<div class="chartContainer">
    <h2>Perkembangan Kasus COVID-19 di Indonesia</h2>
    <div class="chartContainer2">
        <div class='tableauPlaceholder' id='viz1640602554271' style='position: relative'><object class='tableauViz' style='display:none;'>
                <param name='host_url' value='https%3A%2F%2Fpublic.tableau.com%2F' />
                <param name='embed_code_version' value='3' />
                <param name='site_root' value='' />
                <param name='name' value='PerkembanganKasusCOVID-19&#47;GrafikGabungan' />
                <param name='tabs' value='yes' />
                <param name='toolbar' value='yes' />
                <param name='animate_transition' value='yes' />
                <param name='display_static_image' value='yes' />
                <param name='display_spinner' value='yes' />
                <param name='display_overlay' value='yes' />
                <param name='display_count' value='yes' />
                <param name='language' value='en-US' />
            </object></div>
        <script type='text/javascript'>
            var divElement = document.getElementById('viz1640602554271');
            var vizElement = divElement.getElementsByTagName('object')[0];
            vizElement.style.width = '100%';
            vizElement.style.height = (divElement.offsetWidth * 0.75) + 'px';
            var scriptElement = document.createElement('script');
            scriptElement.src = 'https://public.tableau.com/javascripts/api/viz_v1.js';
            vizElement.parentNode.insertBefore(scriptElement, vizElement);
        </script>
    </div>
</div>

<div class="chartContainer">
    <h2></h2>
    <div class='tableauPlaceholder' id='viz1640614433850' style='position: relative'><object class='tableauViz' style='display:none;'>
            <param name='host_url' value='https%3A%2F%2Fpublic.tableau.com%2F' />
            <param name='embed_code_version' value='3' />
            <param name='site_root' value='' />
            <param name='name' value='PerkembanganKasusCOVID-19Per-Provinsi&#47;Sheet1' />
            <param name='tabs' value='no' />
            <param name='toolbar' value='yes' />
            <param name='animate_transition' value='yes' />
            <param name='display_static_image' value='yes' />
            <param name='display_spinner' value='yes' />
            <param name='display_overlay' value='yes' />
            <param name='display_count' value='yes' />
            <param name='language' value='en-US' />
        </object></div>
    <script type='text/javascript'>
        var divElement = document.getElementById('viz1640614433850');
        var vizElement = divElement.getElementsByTagName('object')[0];
        vizElement.style.width = '100%';
        vizElement.style.height = (divElement.offsetWidth * 0.75) + 'px';
        var scriptElement = document.createElement('script');
        scriptElement.src = 'https://public.tableau.com/javascripts/api/viz_v1.js';
        vizElement.parentNode.insertBefore(scriptElement, vizElement);
    </script>
</div>

<div class="container">
    <div class="chartJenisKelamin">
        <h2>Berdasarkan Jenis Kelamin</h2>
        <div class="chartContainer2">
            <div class='tableauPlaceholder' id='viz1639326957075' style='position: relative'><object class='tableauViz' style='display:none;'>
                    <param name='host_url' value='https%3A%2F%2Fpublic.tableau.com%2F' />
                    <param name='embed_code_version' value='3' />
                    <param name='site_root' value='' />
                    <param name='name' value='JenisKelaminPositifCovid-19&#47;Sheet1' />
                    <param name='tabs' value='no' />
                    <param name='toolbar' value='yes' />
                    <param name='animate_transition' value='yes' />
                    <param name='display_static_image' value='yes' />
                    <param name='display_spinner' value='yes' />
                    <param name='display_overlay' value='yes' />
                    <param name='display_count' value='yes' />
                    <param name='language' value='en-US' />
                </object></div>
            <script type='text/javascript'>
                var divElement = document.getElementById('viz1639326957075');
                var vizElement = divElement.getElementsByTagName('object')[0];
                vizElement.style.width = '100%';
                vizElement.style.height = (divElement.offsetWidth * 0.75) + 'px';
                var scriptElement = document.createElement('script');
                scriptElement.src = 'https://public.tableau.com/javascripts/api/viz_v1.js';
                vizElement.parentNode.insertBefore(scriptElement, vizElement);
            </script>
        </div>
    </div>
</div>

<div class="chartContainer">
    <h2>Berdasarkan Umur</h2>
    <div class="chartContainer2">
        <div class='tableauPlaceholder' id='viz1639328644942' style='position: relative'><object class='tableauViz' style='display:none;'>
                <param name='host_url' value='https%3A%2F%2Fpublic.tableau.com%2F' />
                <param name='embed_code_version' value='3' />
                <param name='site_root' value='' />
                <param name='name' value='BerdasarkanUmurNasional&#47;Sheet1' />
                <param name='tabs' value='no' />
                <param name='toolbar' value='yes' />
                <param name='animate_transition' value='yes' />
                <param name='display_static_image' value='yes' />
                <param name='display_spinner' value='yes' />
                <param name='display_overlay' value='yes' />
                <param name='display_count' value='yes' />
                <param name='language' value='en-US' />
            </object></div>
        <script type='text/javascript'>
            var divElement = document.getElementById('viz1639328644942');
            var vizElement = divElement.getElementsByTagName('object')[0];
            vizElement.style.width = '100%';
            vizElement.style.height = (divElement.offsetWidth * 0.75) + 'px';
            var scriptElement = document.createElement('script');
            scriptElement.src = 'https://public.tableau.com/javascripts/api/viz_v1.js';
            vizElement.parentNode.insertBefore(scriptElement, vizElement);
        </script>
    </div>
</div>

<div class="chartContainer">
    <h2>Berdasarkan Umur Per-Provinsi</h2>
    <div class="chartContainer2">
        <div class='tableauPlaceholder' id='viz1638958243662' style='position: relative'><noscript><a href='#'><img alt='Sheet 1 (2) ' src='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Vi&#47;Viz_Umur&#47;Sheet12&#47;1_rss.png' style='border: none' /></a></noscript><object class='tableauViz' style='display:none;'>
                <param name='host_url' value='https%3A%2F%2Fpublic.tableau.com%2F' />
                <param name='embed_code_version' value='3' />
                <param name='site_root' value='' />
                <param name='name' value='Viz_Umur&#47;Sheet12' />
                <param name='tabs' value='no' />
                <param name='toolbar' value='yes' />
                <param name='static_image' value='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Vi&#47;Viz_Umur&#47;Sheet12&#47;1.png' />
                <param name='animate_transition' value='yes' />
                <param name='display_static_image' value='yes' />
                <param name='display_spinner' value='yes' />
                <param name='display_overlay' value='yes' />
                <param name='display_count' value='yes' />
                <param name='language' value='en-US' />
            </object></div>
        <script type='text/javascript'>
            var divElement = document.getElementById('viz1638958243662');
            var vizElement = divElement.getElementsByTagName('object')[0];
            vizElement.style.width = '100%';
            vizElement.style.height = (divElement.offsetWidth * 0.75) + 'px';
            var scriptElement = document.createElement('script');
            scriptElement.src = 'https://public.tableau.com/javascripts/api/viz_v1.js';
            vizElement.parentNode.insertBefore(scriptElement, vizElement);
        </script>
    </div>
</div>
{{-- chart --}}

@stop
@push('scripts')
<script src="//code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="{{ asset('js/functions.js') }}"></script>

@endpush
