@extends('layouts.main')

@section('content')

    <h1 class="text-primary text-center">{{$dizajner->ime}} {{$dizajner->prezime}}</h1><br>

    <form method='post' action="{{route('dizajneri.update', ['dizajner' => $dizajner])}}" class="form-horizontal" >
        @csrf

        <div class="form-group">
            <label class="control-label col-sm-2" for="adresa">Adresa</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="adresa" value="{{$dizajner->adresa}}" required>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="grad">Grad</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="grad" value="{{$dizajner->grad}}" required>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="drzava">Država</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="drzava" value="{{$dizajner->drzava}}" required>
            </div>
        </div>
        
        <div class="form-group">
            <label class="control-label col-sm-2" for="opis_delatnosti">Opis delatnosti</label>
            <div class="col-sm-10">
                <select name="opis_delatnosti" class="form-control">
                    <option value="Grafički dizajner" {{ $dizajner->opis_delatnosti === 'Grafički dizajner' ? 'selected' : '' }}>Grafički dizajner</option>
                    <option value="Dizajner zvuka" {{ $dizajner->opis_delatnosti === 'Dizajner zvuka' ? 'selected' : '' }}>Dizajner zvuka</option>
                    <option value="Game dizajner" {{ $dizajner->opis_delatnosti === 'Game dizajner' ? 'selected' : '' }}>Game dizajner</option>
                    <option value="Dizajner muzike" {{ $dizajner->opis_delatnosti === 'Dizajner muzike' ? 'selected' : '' }}>Dizajner muzike</option>
                </select>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button class="btn btn-primary btn-lg">Izmeni</button>
            </div>
        </div>

    </form>

@endsection