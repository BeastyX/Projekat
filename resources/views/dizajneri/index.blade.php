@extends('layouts.main')

@section('content')

    <h1 class="text-primary text-center">Svi dizajneri</h1><br>

    <div class="text-right" style="margin-bottom: 2em;">
        @auth
        <a href="{{route('dizajneri.create')}}"><button type="button" class="btn btn-primary btn-lg">+ Novi Dizajner</button></a>
        @else   
        <button type="button" class="btn btn-primary btn-lg disabled">+ Novi Dizajner</button>
        @endauth
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Ime</th>
                <th>Prezime</th>
                <th>Država</th>
                <th>Opis delatnosti</th>
                <th>Detaljno</th>
                <th>Obriši</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($dizajneri as $dizajner)
                <tr>
                    <td>{{$loop->index + 1 + ($dizajneri->currentPage() - 1) * $dizajneri->perPage()}}</td>
                    <td>{{$dizajner->ime}}</td>
                    <td>
                        @if ($dizajner->prezime == NULL)
                            <p style="color:rgb(182, 182, 182)">Kompanija</p>
                        @else
                            {{$dizajner->prezime}}
                        @endif
                    </td>
                    <td>{{$dizajner->drzava}}</td>
                    <td>{{$dizajner->opis_delatnosti}}</td>
                    <td>
                        @auth
                            <a href="{{route('dizajneri.edit', ['dizajner' => $dizajner])}}"><button type="button" class="btn btn-primary btn-sm">Detaljnije</button></a>
                            @else
                            <button type="button" class="btn btn-primary btn-sm disabled">Detaljnije</button>
                        @endauth
                    </td>
                    <td>
                        <form action="{{route('dizajneri.destroy', ['dizajner' => $dizajner])}}" method="post">
                            @csrf
                            @auth
                                <button class="btn btn-danger btn-sm">Obriši dizajnera</button>
                                @else
                                <button type="button" class="btn btn-danger btn-sm disabled">Obriši dizajnera</button>
                            @endauth
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    @error('delete')
        <h5 style="color: rgb(255, 0, 0);">{!! $message !!}</h5>
    @enderror

    <div>
        <center>
            {{$dizajneri->links()}}
        </center>
    </div>

@endsection