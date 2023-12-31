@extends('layouts.main')

@section('content')

<center>
    <h1 class="text-primary">Izrada mobilnih igara preko platforme Upwork</h1> <br>
</center> 

    <h3>
        Ovo je sajt koji simulira sklapanje poslova za izradu mobilnih igara preko frilens platforme Upwork.
    </h3>

    <br>
    <br>

    <h4>
        Navigacioni bar:
    </h4>
    
    <p>
        <a href="{{route('poslovi.index')}}"><b>Poslovi</b></a> - Lista svih sklopljenih poslova sa opcijama za kreiranje novog posla kao i modifikaciju postojećih
    </p>
    <p>
        <a href="{{route('frilenseri.index')}}"><b>Frilenseri</b></a> - Lista svih frilensera sa opcijama za dodadavanje novih kao i modifikaciju postojećih
    </p>
    <p>
        <a href="{{route('klijenti.index')}}"><b>Klijenti</b></a> - Lista svih klijenata sa opcijama za dodadavanje novih kao i modifikaciju postojećih
    </p>
    <p>
        <a href="{{route('dizajneri.index')}}"><b>Dizajneri</b></a> - Lista svih dizajnera sa opcijama za dodadavanje novih kao i modifikaciju postojećih
    </p>
    
    <br>
    
    <h4>
        Autentifikacija:
    </h4>

    <p>
        <b class="text-primary">Guest</b> - Korisnici koji nisu logovani mogu samo da vrše pregled svih lista
    </p>
    <p>
        <b class="text-primary">User</b> - Korisnici koji su logovani mogu da vrše pregled svih lista kao i dodavanje/izmenu/brisanje svih podataka
    </p>

        
@endsection