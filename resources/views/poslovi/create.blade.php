@extends('layouts.main')

@section('content')

    <h1 class="text-primary text-center">Novi posao</h1><br>

    <form method='post' action="{{route('poslovi.store')}}" class="form-horizontal" >

        @csrf

        <div class="form-group">
            <label class="control-label col-sm-2" for="naziv">Naziv</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="naziv" placeholder="Kratak naziv posla" required>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="datum_pocetka">Datum početka</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" name="datum_pocetka" placeholder="" required>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="datum_zavrsetka">Datum završetka</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" name="datum_zavrsetka" placeholder="" required>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="budzet">Budžet</label>
            <div class="col-sm-10">
                <input type="number" min="0" class="form-control" name="budzet" placeholder="Iznos u dinarima" required>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="opis_ideje">Opis ideje</label>
            <div class="col-sm-10">
                <textarea class="form-control" style="resize:none;" rows="5" name="opis_ideje" placeholder="Opis ideje za izradu igre" required></textarea>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="frilenser_id">Frilenser</label>
            <div class="col-sm-10">
                <select name="frilenser_id" class="form-control">
                    @foreach ($frilenseri as $frilenser)
                        <option value="{{$frilenser->id}}">{{$frilenser->ime}} {{$frilenser->prezime}}, Rating: {{$frilenser->upwork_rating}}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="klijent_id">Klijent</label>
            <div class="col-sm-10">
                <select name="klijent_id" class="form-control">
                    @foreach ($klijenti as $klijent)
                        <option value="{{$klijent->id}}">{{$klijent->ime}} {{$klijent->prezime}}, Rating: {{$klijent->upwork_rating}}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="dizajner_id">Dizajner</label>
            <div class="col-sm-10">
                <select name="dizajner_id" class="form-control">
                    @foreach ($dizajneri as $dizajner)
                    <option value="{{$dizajner->id}}">{{$dizajner->ime}} {{$dizajner->prezime}}, {{$dizajner->opis_delatnosti}}</option>
                    @endforeach
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