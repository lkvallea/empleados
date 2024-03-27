
@extends('layouts.app')


@section('content')
{{-- <img src="{{URL::asset('images/login.avif')}}" alt=""> --}}
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">'Inicio de sesión'</div>
                <div class="card-body">
                    <form method="POST"  >
                        
                        @csrf

                        <div class="row">
                            <div class="col bg-personal">
                                <img src="{{URL::asset('images/logo.png')}}" alt="">
                                <span>Codigo bonito</span>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right"></label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control  name="email" value="" required autocomplete="email" autofocus>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right"></label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control  name="password" required autocomplete="current-password">

                        
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Iniciar Session
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-body">
                    <div>
                        <img src="{{URL::asset('images/login.avif')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
