@extends('layouts.main')

@section('content')

    <h1 class="text-primary text-center">Svi klijenti</h1><br>

    <div class="text-right" style="margin-bottom: 2em;">
        <a href="{{route('frilenseri.create')}}"><button type="button" class="btn btn-primary btn-lg">+ Novi Frilenser</button></a>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Ime</th>
                <th>Prezime</th>
                <th>Drzava</th>
                <th>Rating</th>
                <th>Detaljno</th>
                <th>Obriši</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($frilenseri as $frilenser)
                <tr>
                    <td>{{$loop->index + 1 + ($frilenseri->currentPage() - 1) * $frilenseri->perPage()}}</td>
                    <td>{{$frilenser->ime}}</td>
                    <td>
                        @if ($frilenser->prezime == NULL)
                            /
                        @else
                            {{$frilenser->prezime}}
                        @endif
                    </td>
                    <td>{{$frilenser->drzava}}</td>
                    <td>
                        @if ($frilenser->upwork_rating == 0)
                            <span class="label label-warning">Potvrđuje se</span>
                        @else
                            {{$frilenser->upwork_rating}}
                        @endif
                    </td>
                    <td>
                        <a href="{{route('frilenseri.edit', ['frilenser' => $frilenser])}}"><button type="button" class="btn btn-primary btn-sm">Detaljnije</button></a>
                    </td>
                    <td>
                        {{-- <a href="{{route('poslovi.destroy', ['posao' => $posao])}}"><button type="button" class="btn btn-danger btn-sm">Obriši posao</button></a> --}}
                        <form action="{{route('frilenseri.destroy', ['frilenser' => $frilenser])}}" method="post">
                            @csrf
                            <button class="btn btn-danger btn-sm">Obriši frilensera</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div>
        <center>
            {{$frilenseri->links()}}
        </center>
    </div>

@endsection