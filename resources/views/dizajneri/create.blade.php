@extends('layouts.main')

@section('content')

    <h1 class="text-primary text-center">Novi Dizajner</h1><br>

    <form method='post' action="{{route('dizajneri.store')}}" class="form-horizontal" >

        @csrf

        <div class="form-group">
            <label class="control-label col-sm-2" for="ime">Ime</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="ime" placeholder="Vaše ime ili ime kompanije" required>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="prezime">Prezime</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="prezime" placeholder="Vaše prezime (OPCIONO)">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="adresa">Adresa</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="adresa" placeholder="Vaša adresa ili adresa kompanije" required>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="grad">Grad</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="grad" placeholder="" required>
            </div>
        </div>
        
        <div class="form-group">
            <label class="control-label col-sm-2" for="drzava">Država</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="drzava" placeholder="" required>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="opis_delatnosti">Opis delatnosti</label>
            <div class="col-sm-10">
                <select name="opis_delatnosti" class="form-control">
                    <option value="Grafički dizajner">Grafički dizajner</option>
                    <option value="Dizajner zvuka">Dizajner zvuka</option>
                    <option value="Game dizajner">Game dizajner</option>
                    <option value="Dizajner muzike">Dizajner muzike</option>
                </select>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button class="btn btn-primary btn-lg">Kreiraj</button>
            </div>
        </div>

    </form>

@endsection