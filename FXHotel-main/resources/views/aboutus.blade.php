@extends('layouts.main')

<style>
    #home_container {
        position: relative;
    }

    #home_main_banner {
        position: relative;
        margin:0;
        padding:0;
    }

    #home_main_banner img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .home_main_rectangle {
        position: absolute;
        top:87.5%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 100%;
        height: 25%;
        background-color: black;
        opacity: 0.5;
    }

    .home_main_banner_text {
        position: absolute;
        top: 90%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: white;
        font-size: 50px;
        font-weight: bold;
    }
    
    #home_container > p {
        font-size: 20pt; 
        text-align:center
    }

</style>

@section('content')
    <div class="container d-flex flex-column" id="home_container">

        <div class="container d-flex justify-content-center mt-5" id="home_main_banner">
            <img src="{{ asset('images/aboutus/hotel.jpg') }}" class="img-fluid " style="height:60vh" width="100vw" >
                <div class="home_main_rectangle"></div>    
                <div class="home_main_banner_text">
                    <h1 class="text-center text-white" style="text-shadow: 2px 2px #636363; ">Hospitality is our passion.</h1>
                </div>
        </div>
        
        </p>
        <br>
        <p>Bienvenue dans notre application de gestion d'hôtel ! Notre application offre une solution complète pour la réservation de chambres ainsi que la gestion efficace du personnel et des clients. Que vous soyez un hôtelier soucieux de maximiser votre taux d'occupation ou un client à la recherche d'une expérience sans tracas, notre application est là pour répondre à vos besoins.</p>
       
    </div>
@endsection
