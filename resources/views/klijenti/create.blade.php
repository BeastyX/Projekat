@extends('layouts.main')

@section('content')

    <h1 class="text-primary text-center">Novi Klijent</h1><br>

    <form method='post' action="{{route('klijenti.store')}}" class="form-horizontal" >

        @csrf

        <div class="form-group">
            <label class="control-label col-sm-2" for="ime">Ime</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="ime" placeholder="Vase ime ili ime kompanije" required>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="prezime">Prezime</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="prezime" placeholder="Vase prezime (OPCIONO)">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="adresa">Adresa</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="adresa" placeholder="Vasa adresa ili adresa kompanije" required>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="grad">Grad</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="grad" placeholder="" required>
            </div>
        </div>
        
        <div class="form-group">
            <label class="control-label col-sm-2" for="drzava">Drzava</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="drzava" placeholder="" required>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button class="btn btn-primary btn-lg">Kreiraj</button>
            </div>
        </div>

    </form>

@endsection