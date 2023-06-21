@extends('layouts.main')

@section('content')

    <h1 class="text-primary text-center">{{$frilenser->ime}} {{$frilenser->prezime}}</h1><br>

    <form method='post' action="{{route('frilenseri.update', ['frilenser' => $frilenser])}}" class="form-horizontal" >
        @csrf

        <div class="form-group">
            <label class="control-label col-sm-2" for="adresa">Adresa</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="adresa" value="{{$frilenser->adresa}}" required>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="grad">Grad</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="grad" value="{{$frilenser->grad}}" required>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="drzava">Drzava</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="drzava" value="{{$frilenser->drzava}}" required>
            </div>
        </div>
        
        <div class="form-group">
            <label class="control-label col-sm-2" for="upwork_rating">Upwork rating</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="upwork_rating" value="{{$frilenser->upwork_rating}}" required>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button class="btn btn-primary btn-lg">Izmeni</button>
            </div>
        </div>

    </form>

@endsection