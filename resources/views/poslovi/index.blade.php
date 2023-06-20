@extends('layouts.main')

@section('content')

<center>
    <h1 class="text-primary">Svi poslovi</h1><br>
</center>

    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Naziv</th>
                <th>Početak</th>
                <th>Završetak</th>
                <th>Budžet</th>
                <th>Status</th>
                <th>Detaljno</th>
                <th>Obriši</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($poslovi as $posao)
                <tr>
                    <th>{{$loop->index + 1}}</th>
                    <th>{{$posao->naziv}}</th>
                    <th>{{$posao->datum_pocetka}}</th>
                    <th>{{$posao->datum_zavrsetka}}</th>
                    <th>{{$posao->budzet}}</th>
                    <th>{{$posao->status}}</th>
                    <th><a href="{{route('poslovi.index')}}"><button type="button" class="btn btn-primary btn-sm">Detaljnije</button></a></th>
                    <th>
                        delete
                    </th>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection