@extends('layouts.main')

@section('content')

    <h1 class="text-primary text-center">Svi klijenti</h1><br>

    <div class="text-right" style="margin-bottom: 2em;">
        <a href="{{route('klijenti.create')}}"><button type="button" class="btn btn-primary btn-lg">+ Novi Klijent</button></a>
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
            @foreach ($klijenti as $klijent)
                <tr>
                    <td>{{$loop->index + 1 + ($klijenti->currentPage() - 1) * $klijenti->perPage()}}</td>
                    <td>{{$klijent->ime}}</td>
                    <td>
                        @if ($klijent->prezime == NULL)
                            /
                        @else
                            {{$klijent->prezime}}
                        @endif
                    </td>
                    <td>{{$klijent->drzava}}</td>
                    <td>
                        @if ($klijent->upwork_rating == 0)
                            <span class="label label-warning">Potvrđuje se</span>
                        @else
                            {{$klijent->upwork_rating}}
                        @endif
                    </td>
                    <td>
                        <a href="{{route('klijenti.edit', ['klijent' => $klijent])}}"><button type="button" class="btn btn-primary btn-sm">Detaljnije</button></a>
                    </td>
                    <td>
                        {{-- <a href="{{route('poslovi.destroy', ['posao' => $posao])}}"><button type="button" class="btn btn-danger btn-sm">Obriši posao</button></a> --}}
                        <form action="{{route('klijenti.destroy', ['klijent' => $klijent])}}" method="post">
                            @csrf
                            <button class="btn btn-danger btn-sm">Obriši klijenta</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div>
        <center>
            {{$klijenti->links()}}
        </center>
    </div>

@endsection