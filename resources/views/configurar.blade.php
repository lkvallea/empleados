@extends('layouts.app')

@section('title')
Configuracion de empleados
@endsection

@section('content')
<div class="container">
    @if ($fetch)
    <label class="{{ $mi_mensaje['class'] }}">{{ $mi_mensaje['mensaje'] }}</label>
    @endif
    <form action="/configurar" method="POST">
        @csrf
        <div class="flex-row">
            <div class="flex-md-row">
                <p>IMAGEN AQUI</p>
            </div>
        </div>
        <div class="flex-row">
            <div class="flex-md-row">
                <p>Empleados registrados {{ $empleados }}</p>
            </div>
        </div>
        <div class="flex-row">
            <label>Datos personales :</label>
            <div>
                <label>NOMBRE:</label>
                <input type="text" name="nombre" id="nombre" placeholder="Nombre del empleado" class=" @error('nombre')
                        border border-danger
                    @enderror " maxlength="50" value="{{ old('nombre') }}">
                @error('nombre')
                <p>{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label>Correo:</label>
                <input type="text" name="correo" id="correo" placeholder="Correo del empleado" class="@error('correo')
                    border border-danger
                @enderror" maxlength="50" value="{{ old('correo') }}">
                @error('correo')
                <p>{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label>Puesto:</label>
                <select name="puesto" id=puesto class=" @error('puesto')
                    border border-danger
                        @enderror ">
                    <option value="">Selecciona una opción</option>
                    @foreach ($options as $value)
                    <option value="{{ $value }}">{{ $value }}</option>
                    @endforeach
                </select>
                @error('puesto')
                <p>{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label">Fecha de nacimiento:</label>
                    <input type="date" name="nacimiento" id="nacimiento" class=" @error('nacimiento')
                border border-danger
            @enderror " value="{{ old('nacimiento') }}">
                    @error('nacimiento')
                    <p>{{ $message }}</p>
                    @enderror
            </div>
            <div>
                <label">Password:</label>
                    <input type="password" name="password" id="password" class=" @error('password')
                border border-danger
            @enderror ">
                    @error('password')
                    <p>{{ $message }}</p>
                    @enderror
            </div>
        </div>
        <div class="flex-row">
            <label>Direccion :</label>
            <div>
                <label>calle:</label>
                <input type="text" name="calle1" id="calle1" placeholder="Calle" class=" @error('calle1')
                border border-danger
            @enderror " maxlength="50" value="{{ old('calle1') }}">
                @error('calle1')
                <p>{{ $message }}</p>
                @enderror
                <input type="text" name="calle2" id="calle2" placeholder="Calle" maxlength="50"
                    value="{{ old('calle2') }}">
            </div>
            <div>
                <label>numero ext:</label>
                <input type="text" name="numero_ext" id="numero_ext" placeholder="numero_ext" class=" @error('numero_ext')
                border border-danger
            @enderror " maxlength="10" value="{{ old('numero_ext') }}">
                @error('numero_ext')
                <p>{{ $message }}</p>
                @enderror
                <label>numero int:</label>
                <input type="text" name="numero_int" id="numero_int" placeholder="numero_int" maxlength="10"
                    value="{{ old('numero_int') }}">
            </div>
            <div>
                <label>Colonia:</label>
                <input type="text" name="colonia" id="colonia" placeholder="Colonia" class=" @error('colonia')
                border border-danger
            @enderror " maxlength="50" value="{{ old('colonia') }}">
                @error('colonia')
                <p>{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label>Codigo Postal:</label>
                <input type="text" name="codigoPostal" id="codigoPostal" placeholder="Codigo Postal" class=" @error('codigoPostal')
                border border-danger
            @enderror " maxlength="8" value="{{ old('codigoPostal') }}">
                @error('codigoPostal')
                <p>{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label>Municipio / Ciudad:</label>
                <input type="text" name="municipio" id="municipio" placeholder="Municipio / Ciudad" class=" @error('municipio')
                border border-danger
            @enderror " maxlength="50" value="{{ old('codigoPostal') }}">
                @error('municipio')
                <p>{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label>Estado:</label>
                <select name="estado" id="estado" class=" @error('estado')
                border border-danger
                    @enderror ">
                    <option value="" disabled selected>Selecciona una opción</option>
                    @foreach ($estados as $value)
                    <option value="{{ $value }}">{{ $value }}</option>
                    @endforeach
                </select>
                @error('estado')
                <p>{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label>Pais</label>
                <select name="pais" id="pais" class=" @error('pais')
                border border-danger
                    @enderror ">
                    @foreach ($paises as $value)
                    @if ($value === 'México')
                    <option value="{{ $value }}" selected>{{ $value }}</option>
                    @else
                    <option value="{{ $value }}">{{ $value }}</option>
                    @endif
                    @endforeach
                </select>
                @error('pais')
                <p>{{ $message }}</p>
                @enderror
            </div>
        </div>
        <div>
            <button class="btn btn-primary" type="submit">Guardar</button>
        </div>
    </form>
</div>
@endsection