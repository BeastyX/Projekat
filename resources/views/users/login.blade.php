@extends('layouts.main')

@section('content')

    <h1 class="text-primary text-center">Uloguj se</h1><br>

    <form method='post' action="{{route('users.autentifikacija')}}" class="form-horizontal">

        @csrf

        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Email</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" name="email" placeholder="Vaš Email" value="{{old('email')}}" required>
                @error('autentifikacija')
                    <h6 style="color: rgb(255, 0, 0);">{!! $message !!}</h6>
                @enderror
            </div>
        </div>


        <div class="form-group">
            <label class="control-label col-sm-2" for="password">Password</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" name="password" required>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button class="btn btn-primary btn-lg">Uloguj se</button>
            </div>
        </div>

    </form>

@endsection