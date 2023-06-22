@extends('layouts.main')

@section('content')

    <h1 class="text-primary text-center">Svi poslovi</h1><br>

    <div class="text-right" style="margin-bottom: 2em;">
        @auth
        <a href="{{route('poslovi.create')}}"><button type="button" class="btn btn-primary btn-lg">+ Novi Posao</button></a>
        @endauth
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>@sortablelink('naziv', 'Naziv') <i class="bi bi-arrow-down-up text-primary" style="font-size: 11px;"></i></th>
                <th>@sortablelink('datum_pocetka', 'Početak') <i class="bi bi-arrow-down-up" style="font-size: 11px;"></i></th>
                <th>@sortablelink('datum_zavrsetka', 'Završetak') <i class="bi bi-arrow-down-up" style="font-size: 11px;"></i></th>
                <th>@sortablelink('budzet', 'Budžet') <i class="bi bi-arrow-down-up" style="font-size: 11px;"></i></th>
                <th>@sortablelink('status', 'Status') <i class="bi bi-arrow-down-up" style="font-size: 11px;"></i></th>
                @auth
                    <th>Detaljno</th>
                    <th>Obriši</th>
                @endauth
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
                    @auth
                        <td>
                            <a href="{{route('poslovi.edit', ['posao' => $posao])}}"><button type="button" class="btn btn-primary btn-sm">Detaljnije</button></a>
                        </td>
                        
                        <td>
                            <form action="{{route('poslovi.destroy', ['posao' => $posao])}}" method="post">
                                @csrf
                                <button class="btn btn-danger btn-sm">Obriši posao</button>
                            </form>
                        </td>
                    @endauth
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