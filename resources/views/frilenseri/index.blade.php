@extends('layouts.main')

@section('content')

    <h1 class="text-primary text-center">Svi frilenseri</h1><br>

    <div class="text-right" style="margin-bottom: 2em;">
        @auth
        <a href="{{route('frilenseri.create')}}"><button type="button" class="btn btn-primary btn-lg">+ Novi Frilenser</button></a>
        @else   
        <button type="button" class="btn btn-primary btn-lg disabled">+ Novi Frilenser</button>
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
                        @if ($frilenser->tip == 0)
                            <i class="bi bi-person-fill"></i> Pojedinac
                        @else
                            <i class="bi bi-buildings-fill"></i> Kompanija
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
                        @auth
                            <a href="{{route('frilenseri.edit', ['frilenser' => $frilenser])}}"><button type="button" class="btn btn-primary btn-sm">Detaljnije</button></a>
                            @else
                            <button type="button" class="btn btn-primary btn-sm disabled">Detaljnije</button>
                        @endauth
                    </td>
                    <td>
                        <form action="{{route('frilenseri.destroy', ['frilenser' => $frilenser])}}" method="post">
                            @csrf
                            @auth
                                <button class="btn btn-danger btn-sm">Obriši frilensera</button>
                                @else
                                <button type="button" class="btn btn-danger btn-sm disabled">Obriši frilensera</button>
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
            {{$frilenseri->links()}}
        </center>
    </div>

@endsection