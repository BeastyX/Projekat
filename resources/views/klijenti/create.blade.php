@extends('layouts.main')

@section('content')

    <h1 class="text-primary text-center">Novi Klijent</h1><br>

    <form method='post' action="{{route('klijenti.store')}}" class="form-horizontal" >

        @csrf

        <div class="form-group">
            <label class="control-label col-sm-2" for="ime">Ime</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="ime" placeholder="Ime i prezime ili ime kompanije" required>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="tip">Tip</label>
            <div class="col-sm-10">
                <select name="tip" class="form-control">
                    <option value="0">Pojedinac</option>
                    <option value="1">Kompanija</option>
                </select>
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
            <div class="col-sm-offset-2 col-sm-10">
                <button class="btn btn-primary btn-lg">Kreiraj</button>
            </div>
        </div>

    </form>

@endsection