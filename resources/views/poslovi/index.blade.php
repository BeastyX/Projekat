@extends('layouts.main')

@section('content')

    <h1 class="text-primary text-center">Svi poslovi</h1><br>

    <div class="text-right" style="margin-bottom: 2em;">
        @auth
        <a href="{{route('poslovi.create')}}"><button type="button" class="btn btn-primary btn-lg">+ Novi Posao</button></a>
        @else   
        <button type="button" class="btn btn-primary btn-lg disabled">+ Novi Posao</button>
        @endauth
    </div>

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
                    <td>{{$loop->index + 1 + ($poslovi->currentPage() - 1) * $poslovi->perPage()}}</td>
                    <td>{{$posao->naziv}}</td>
                    <td>{{$posao->datum_pocetka}}</td>
                    <td>{{$posao->datum_zavrsetka}}</td>
                    <td>{{$posao->budzet}} RSD</td>
                    <td>
                        @switch($posao->status)
                            @case(0)
                                <span class="label label-warning">Započet</span>
                                @break

                            @case(1)
                                <span class="label label-success">Završen</span>
                                @break

                            @default
                                
                        @endswitch
                    </td>
                    <td>
                        @auth
                            <a href="{{route('poslovi.edit', ['posao' => $posao])}}"><button type="button" class="btn btn-primary btn-sm">Detaljnije</button></a>
                            @else
                            <button type="button" class="btn btn-primary btn-sm disabled">Detaljnije</button>
                        @endauth
                    </td>
                    <td>
                        <form action="{{route('poslovi.destroy', ['posao' => $posao])}}" method="post">
                            @csrf
                            @auth
                                <button class="btn btn-danger btn-sm">Obriši posao</button>
                            @else
                                <button type="button" class="btn btn-danger btn-sm disabled">Obriši posao</button>
                            @endauth
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div>
        <center>
            {{$poslovi->links()}}
        </center>
    </div>

@endsection