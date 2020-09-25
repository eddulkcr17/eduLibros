@extends('layouts.app')

@section('content')
@guest
<div class="container " >
    <div class="row justify-content-center" >
       <div class="cls-content shadow"style="background-color:rgba(78, 34, 109, 0.8); color:white; padding: 10px;height: 300px; width: 500px; border-radius:20px;">
            <div class="cls-content-sm panel ">
                <div class="panel-body">
                    <div class="mar-ver pad-btm">
                        <h1 class="h3 text-center  " style="color:white;padding: 10px;">Ingreso</h1>
                        
                    </div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Correo') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> 


                        <button type="submit" class="btn btn-success  " style="position: relative; top: 40px; left: 220px;">
                            {{ __('Ingresar') }}
                        </button>

                    </form>
                </div>
        
              
            </div>
        </div>
    </div>
</div>

@else
    <h1 class="text-white bg-info">Ya estas logeado  {{ auth()->user()->name }}</h1>
@endguest
@endsection
