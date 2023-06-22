@extends('layouts.main')

@section('content')

    <h1 class="text-primary text-center">Svi dizajneri</h1><br>

    <div class="text-right" style="margin-bottom: 2em;">
        @auth
        <a href="{{route('dizajneri.create')}}"><button type="button" class="btn btn-primary btn-lg">+ Novi Dizajner</button></a>
        @endauth
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Ime</th>
                <th>Tip</th>
                <th>Država</th>
                <th>Opis delatnosti</th>
                @auth
                    <th>Detaljno</th>
                    <th>Obriši</th>
                @endauth
            </tr>
        </thead>

        <tbody>
            @foreach ($dizajneri as $dizajner)
                <tr>
                    <td>{{$loop->index + 1 + ($dizajneri->currentPage() - 1) * $dizajneri->perPage()}}</td>
                    <td>{{$dizajner->ime}}</td>
                    <td>
                        @if ($dizajner->tip == 0)
                            <i class="bi bi-person-fill"></i> Pojedinac
                        @else
                            <i class="bi bi-buildings-fill"></i> Kompanija
                        @endif
                    </td>
                    <td>{{$dizajner->drzava}}</td>
                    <td>{{$dizajner->opis_delatnosti}}</td>
                    @auth
                        <td>
                            <a href="{{route('dizajneri.edit', ['dizajner' => $dizajner])}}"><button type="button" class="btn btn-primary btn-sm">Detaljnije</button></a>
                        </td>
                        <td>
                            <form action="{{route('dizajneri.destroy', ['dizajner' => $dizajner])}}" method="post">
                                @csrf
                                <button class="btn btn-danger btn-sm">Obriši dizajnera</button>
                            </form>
                        </td>
                    @endauth
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