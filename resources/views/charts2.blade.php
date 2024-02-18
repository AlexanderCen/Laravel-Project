@extends('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('css/charts.css') }}">
{{-- sidebar --}}
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
{{-- sidebar --}}
<div class="chartContainer">
    <div class="chartContainer2">
        <div class='tableauPlaceholder' id='viz1635599384597' style='position: relative'><noscript><a href='#'><img alt=' ' src='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Pe&#47;PetaVaksinasiCOVID-19Indonesia&#47;Sheet2&#47;1_rss.png' style='border: none' /></a></noscript><object class='tableauViz' style='display:none;'>
                <param name='host_url' value='https%3A%2F%2Fpublic.tableau.com%2F' />
                <param name='embed_code_version' value='3' />
                <param name='site_root' value='' />
                <param name='name' value='PetaVaksinasiCOVID-19Indonesia&#47;Sheet2' />
                <param name='tabs' value='yes' />
                <param name='toolbar' value='yes' />
                <param name='static_image' value='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Pe&#47;PetaVaksinasiCOVID-19Indonesia&#47;Sheet2&#47;1.png' />
                <param name='animate_transition' value='yes' />
                <param name='display_static_image' value='yes' />
                <param name='display_spinner' value='yes' />
                <param name='display_overlay' value='yes' />
                <param name='display_count' value='yes' />
                <param name='language' value='en-US' />
            </object></div>
        <script type='text/javascript'>
            var divElement = document.getElementById('viz1635599384597');
            var vizElement = divElement.getElementsByTagName('object')[0];
            vizElement.style.width = '100%';
            vizElement.style.height = (divElement.offsetWidth * 0.75) + 'px';
            var scriptElement = document.createElement('script');
            scriptElement.src = 'https://public.tableau.com/javascripts/api/viz_v1.js';
            vizElement.parentNode.insertBefore(scriptElement, vizElement);
        </script>
    </div>

    <div style="text-align: center;width: 100%; background-color: white">
        Tanggal Pembaruan Data Terakhir: 27-12-2021
        <br>
        source:vaksin.kemkes.go.id
    </div>
</div>

<div class="chartContainer">
    <div class="chartContainer2">
        <div class='tableauPlaceholder' id='viz1638886826019' style='position: relative'><noscript><a href='#'><img alt='Peta Rumah Sakit Rujukan Covid-19 ' src='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;MD&#47;MDKGDPBDF&#47;1_rss.png' style='border: none' /></a></noscript><object class='tableauViz' style='display:none;'>
                <param name='host_url' value='https%3A%2F%2Fpublic.tableau.com%2F' />
                <param name='embed_code_version' value='3' />
                <param name='path' value='shared&#47;MDKGDPBDF' />
                <param name='toolbar' value='yes' />
                <param name='static_image' value='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;MD&#47;MDKGDPBDF&#47;1.png' />
                <param name='animate_transition' value='yes' />
                <param name='display_static_image' value='yes' />
                <param name='display_spinner' value='yes' />
                <param name='display_overlay' value='yes' />
                <param name='display_count' value='yes' />
                <param name='language' value='en-US' />
                <param name='filter' value='publish=yes' />
            </object></div>
        <script type='text/javascript'>
            var divElement = document.getElementById('viz1638886826019');
            var vizElement = divElement.getElementsByTagName('object')[0];
            vizElement.style.width = '100%';
            vizElement.style.height = (divElement.offsetWidth * 0.75) + 'px';
            var scriptElement = document.createElement('script');
            scriptElement.src = 'https://public.tableau.com/javascripts/api/viz_v1.js';
            vizElement.parentNode.insertBefore(scriptElement, vizElement);
        </script>
        <span>Source : https://sunartha.co.id/cara-membuat-peta-rumah-sakit-rujukan-covid-tableau/</span>
    </div>
</div>

<div class="chartContainer">
    <div class="chartContainer2">
        <div class='tableauPlaceholder' id='viz1639729606999' style='position: relative'><object class='tableauViz' style='display:none;'>
                <param name='host_url' value='https%3A%2F%2Fpublic.tableau.com%2F' />
                <param name='embed_code_version' value='3' />
                <param name='site_root' value='' />
                <param name='name' value='PersebaranVaksinSecaraGlobal&#47;Sheet1' />
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
            var divElement = document.getElementById('viz1639729606999');
            var vizElement = divElement.getElementsByTagName('object')[0];
            vizElement.style.width = '100%';
            vizElement.style.height = (divElement.offsetWidth * 0.75) + 'px';
            var scriptElement = document.createElement('script');
            scriptElement.src = 'https://public.tableau.com/javascripts/api/viz_v1.js';
            vizElement.parentNode.insertBefore(scriptElement, vizElement);
        </script><br>
        <span>Source: </span>
        https://www.liputan6.com/global/read/4582595/daftar-vaksin-covid-19-paling-banyak-digunakan-di-dunia-astrazeneca-teratas
    </div>
</div>

@endsection
@push('scripts')
<script src="//code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="{{ asset('js/functions.js') }}"></script>
@endpush
