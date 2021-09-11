@extends('layouts.app')

@section('content')




<div class="container-fluid">
    <div class="row justify-content-center">
    <div class="col-md-3" class="list-group" data-spy="scroll" data-target="#navbar-example2" data-offset="0" style="overflow: auto">
    <button type="button" class="list-group-item list-group-item-action active">Заявки на вывоз</button>
            <div class="card list-group-item" style="background-color: white;" >
                <div class="card-header">
                    Метро:Петровско-Разумовская
                </div>
                <div class="card-body">
                    <h6 class="card-title">Детская коляска<span class="badge badge-primary badge-pill">1</span></h6>
                    <p class="card-text">жилой комплекс Руставели 14, к1/3</p>
                    <p class="card-text">893763882737 - Елена</p>
                        <button type="button" class="btn btn-primary btn-sm">в маршрут</button>
                        <button type="button" class="btn btn-danger btn-sm">удалить</button>
                </div>
            </div>
            <div class="card list-group-item" style="background-color: white;">
                <div class="card-header">
                    Метро:Отрадное
                </div>
                <div class="card-body">
                    <h6 class="card-title">Детская одежда <span class="badge badge-primary badge-pill">5</span></h6>
                    <p class="card-text">улица Яблочкова, 35Б</p>
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
        var mymap = L.map('mapid').setView([55.825618, 37.577265], 11);

        L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoiZGFsaWhpbGxhcnkiLCJhIjoiY2s1c2ZhYnp1MDF2NDNsbDd0bTNjM3RzNCJ9._wzQ6YFFVtt5c_KAbsd1XA', {
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        maxZoom: 18,
        id: 'mapbox/streets-v11',
        accessToken: 'pk.eyJ1IjoiZGFsaWhpbGxhcnkiLCJhIjoiY2s1c2ZhYnp1MDF2NDNsbDd0bTNjM3RzNCJ9._wzQ6YFFVtt5c_KAbsd1XA'
    }).addTo(mymap);

    
    const arraySparse = [
        {'lat': 55.755819, 'long': 37.617644, 'name': 'Детские вещи', 'time': '13:00'},
        {'lat': 55.874435, 'long': 37.590147, 'name': 'Детские вещи', 'time': '15:00'},
        {'lat': 55.862404, 'long': 37.622603, 'name': 'Детские вещи', 'time': '12:00'},
        {'lat': 55.825618, 'long': 37.577265, 'name': 'Детская коляска', 'time': '12:00'},
        {'lat': 55.812110, 'long': 37.597854, 'name': 'Детская одежда', 'time': '11:00'},
    ]

    arraySparse.forEach((element) => {
        var Icon = L.icon({
    
    iconUrl: 'https://www.freeiconspng.com/uploads/blue-map-localization-icon-9.png',

    iconSize:     [48, 50], // size of the icon
    iconAnchor:   [22, 94], // point of the icon which will correspond to marker's location
    popupAnchor:  [0, -60] // point from which the popup should open relative to the iconAnchor
    });

    marker = L.marker([element.lat, element.long], {icon: Icon}).addTo(mymap);

    marker.bindPopup("<b>"+element.name+"</b>"+"<br>"+"<b>"+element.time+"</b>");

    });

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
