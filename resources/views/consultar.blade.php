@extends("layouts.app")

@section("title")
Consultar empleados
@endsection

@section('title')
    Consultar empleados
@endsection

@section('content')
    <div class="container">
            @csrf
            <table class="table  table-hover">
                <thead>
                  <tr>
                    <th scope="col">id</th>
                    <th scope="col">mail</th>
                    <th scope="col">Puesto</th>
                    <th scope="col">nacimiento</th>
                    <th scope="col">Calle</th>
                    <th scope="col">Calle</th>
                    <th scope="col">No Ext</th>
                    <th scope="col">No Int</th>
                    <th scope="col">Colonia</th>
                    <th scope="col">Municipio</th>
                    <th scope="col">Codigo Postal</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Pais</th>
                  </tr>
                </thead>
                <tbody>
                    
                </tbody>
    </div>
@endsection
