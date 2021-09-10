@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
    <div class="col-md-3" class="list-group" data-spy="scroll" data-target="#navbar-example2" data-offset="0" style="overflow: auto">
    <button type="button" class="list-group-item list-group-item-action active">Заявки на вывоз</button>
            <div class="card list-group-item" style="background-color: white;" >
                <div class="card-header">
                    Метро:Автозаводская
                </div>
                <div class="card-body">
                    <h6 class="card-title">MacBook Pro 16, телевизор <span class="badge badge-primary badge-pill">2</span></h6>
                    <p class="card-text">ул. Семена Иванова, д.5, кв.3</p>
                    <p class="card-text">893763882737 - Елена</p>
                        <button type="button" class="btn btn-primary btn-sm">в маршрут</button>
                        <button type="button" class="btn btn-danger btn-sm">удалить</button>
                </div>
            </div>
            <div class="card list-group-item" style="background-color: white;">
                <div class="card-header">
                    Метро:Ясенево
                </div>
                <div class="card-body">
                    <h6 class="card-title">Детская одежда <span class="badge badge-primary badge-pill">5</span></h6>
                    <p class="card-text">ул. Ленина, д.1, кв.1</p>
                    <p class="card-text">89376383342 - Миша</p>
                        <button type="button" class="btn btn-primary btn-sm">в маршрут</button>
                        <button type="button" class="btn btn-danger btn-sm">удалить</button>
            
                </div>
            </div>
    </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">

                       
     <div id="mapid" style="width: auto; height: 550px;"></div>

    <script>
        var mymap = L.map('mapid').setView([55.752004, 37.617734], 11);

        L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoiZGFsaWhpbGxhcnkiLCJhIjoiY2s1c2ZhYnp1MDF2NDNsbDd0bTNjM3RzNCJ9._wzQ6YFFVtt5c_KAbsd1XA', {
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        maxZoom: 18,
        id: 'mapbox/streets-v11',
        accessToken: 'pk.eyJ1IjoiZGFsaWhpbGxhcnkiLCJhIjoiY2s1c2ZhYnp1MDF2NDNsbDd0bTNjM3RzNCJ9._wzQ6YFFVtt5c_KAbsd1XA'
    }).addTo(mymap);

    </script>

<link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css"
  integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
  crossorigin=""/>

<!-- Make sure you put this AFTER Leaflet's CSS -->


<!--AXio json loader -->
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>

                </div>
            </div>
        </div>
        <div class="col-md-3">
            <ul class="list-group">
            <button type="button" class="list-group-item list-group-item-action active">Маршруты</button>
            <li class="list-group-item d-flex justify-content-between align-items-center" style="background-color: white;">
                №334234 - Автозаводская
                <span class="badge badge-primary badge-pill">14</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center" style="background-color: white;">
                №334234 - Беговая
                <span class="badge badge-primary badge-pill">2</span>
            </li>
            </ul>
        </div>
    </div>
</div>
@endsection
