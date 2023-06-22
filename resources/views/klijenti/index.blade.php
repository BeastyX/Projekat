@extends('layouts.main')

@section('content')

    <h1 class="text-primary text-center">Svi klijenti</h1><br>

    <div class="text-right" style="margin-bottom: 2em;">
        @auth
        <a href="{{route('klijenti.create')}}"><button type="button" class="btn btn-primary btn-lg">+ Novi Klijent</button></a>
        @endauth
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Ime</th>
                <th>Tip</th>
                <th>Država</th>
                <th>Rating</th>
                @auth
                    <th>Detaljno</th>
                    <th>Obriši</th>
                @endauth
            </tr>
        </thead>

        <tbody>
            @foreach ($klijenti as $klijent)
                <tr>
                    <td>{{$loop->index + 1 + ($klijenti->currentPage() - 1) * $klijenti->perPage()}}</td>
                    <td>{{$klijent->ime}}</td>
                    <td>
                        @if ($klijent->tip == 0)
                            <i class="bi bi-person-fill"></i> Pojedinac
                        @else
                            <i class="bi bi-buildings-fill"></i> Kompanija
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
                    @auth
                        <td>
                            <a href="{{route('klijenti.edit', ['klijent' => $klijent])}}"><button type="button" class="btn btn-primary btn-sm">Detaljnije</button></a>
                        </td>
                        <td>
                            <form action="{{route('klijenti.destroy', ['klijent' => $klijent])}}" method="post">
                                @csrf
                                <button class="btn btn-danger btn-sm">Obriši klijenta</button>
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
            {{$klijenti->links()}}
        </center>
    </div>

@endsection