@extends('layouts.main')

@section('content')

    <h1 class="text-primary text-center">{{$posao->naziv}}</h1><br>

    <form method='post' action="{{route('poslovi.update', ['posao' => $posao])}}" class="form-horizontal" >

        @csrf

        <div class="form-group">
            <label class="control-label col-sm-2" for="datum_pocetka">Datum početka</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" name="datum_pocetka" value="{{$posao->datum_pocetka}}" readonly>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="datum_zavrsetka">Datum završetka</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" name="datum_zavrsetka" value="{{$posao->datum_zavrsetka}}" required>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="budzet">Budžet</label>
            <div class="col-sm-10">
                <input type="number" min="0" class="form-control" name="budzet" value="{{$posao->budzet}}" required>
            </div>
        </div>
        
        <div class="form-group">
            <label class="control-label col-sm-2" for="opis_ideje">Opis ideje</label>
            <div class="col-sm-10">
                <textarea class="form-control" style="resize:none;" rows="5" name="opis_ideje" required>{{$posao->opis_ideje}}</textarea>
            </div>
        </div>
        
        <div class="form-group">
            <label class="control-label col-sm-2" for="frilenser_id">Frilenser</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="frilenser_id" value="{{$posao->frilenser->ime}} {{$posao->frilenser->prezime}}" readonly>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="klijent_id">Klijent</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="klijent_id" value="{{$posao->klijent->ime}} {{$posao->klijent->prezime}}" readonly>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="dizajner_id">Dizajner</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="dizajner_id" value="{{$posao->dizajner->ime}} {{$posao->dizajner->prezime}}" readonly>
            </div>
        </div>
        
        <div class="form-group">
            <label class="control-label col-sm-2" for="status">Status</label>
            <div class="col-sm-10">
                <select name="status" class="form-control">
                    <option value="0">Započet</option>
                    <option value="1">Završen</option>
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