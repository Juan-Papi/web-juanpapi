@extends('pages/sign-up')

@section('titulo', 'Welcome')
@section('name', 'te damos la bienvenidad rellaena el siguiente dato')

@section('contenido')

@if($errors->any())
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <ul>
    @foreach($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
  </ul>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
   <!-- <span aria-hidden="true">&times;</span>-->
  </button>
</div>
@endif
<form action="{{ url('personal') }}" method="post">
  @csrf
    
  <div class="mb-4">
    <input type="text" name="nombre" id="nombre" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="Nombre" aria-label="nombre" aria-describedby="email-addon" value="{{ old('nombre') }}" />
  </div>
  <div class="mb-4">
    <input type="text" name="apellido" id="apellido" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="Apellido" aria-label="apellido" aria-describedby="email-addon" value="{{ old('apellido') }}"/>
  </div>
  <div class="mb-4">
    <input type="email" name="email" id="email" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="Email" aria-label="Email" aria-describedby="email-addon" value="{{ old('email') }}" />
    </div>
 <!-- <div class="mb-4">
    <input type="password" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="Password" aria-label="Password" aria-describedby="password-addon" />
  </div>-->
  <div class="mb-4">
    <input type="date" name="fecha_nacimineto" id="fecha_nacimineto" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="Fecha nacimineto" aria-label="Fecha nacimineto" aria-describedby="email-addon"  value="{{ old('fecha_nacimineto') }}" />
  </div>
  <div class="mb-4">
    <input type="text" name="genero" id="genero" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="Genero" aria-label="Genero" aria-describedby="email-addon"  value="{{ old('genero') }}" />
  </div>
  <div class="mb-4">
    <input type="number" name="telefono" id="telefono" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="telefono" aria-label="telefono" aria-describedby="email-addon"  value="{{ old('telefono') }}" />
  </div>
  <div class="mb-4">
    <input type="text" name="ciudad" id="ciudad" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="ciudad" aria-label="ciudad" aria-describedby="email-addon"  value="{{ old('ciudad') }}" />
  </div>
  <div class="mb-4">
    <input type="text" name="callle" id="callle" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="calle" aria-label="calle" aria-describedby="email-addon"  value="{{ old('calle') }}" />
  </div>
  <div class="mb-4">
    <input type="text" name="distrito" id="distrito" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="Distrito" aria-label="Distrito" aria-describedby="email-addon"   value="{{ old('distrito') }}"/>
  </div>
  <div class="mb-4">
    <input type="number" name="numero_casa" id="numero_casa" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="Numero de casa" aria-label="Numero de casa" aria-describedby="email-addon"  value="{{ old('numero_casa') }}" />
  </div>
  <div class="mb-4">
    <input type="date" name="fecha_inicio" id="fecha_inicio" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="Fecha contrato" aria-label="Fecha contrato" aria-describedby="email-addon"   value="{{ old('fecha_inicio') }}"/>
  </div>
  <div class="mb-4">
    <input type="date" name="fecha_final" id="fecha_final" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="Fecha Fin de contrato" aria-label="Fecha Fin de contrato" aria-describedby="email-addon"   value="{{ old('fecha_final') }}"/>
  </div>
  <div class="mb-4">
  
    <select name="cargo" id="cargo" class="text-sm focus:shadow-soft-primary-outline leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-fuchsia-300 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" aria-placeholder="cargo" aria-label="cargo" required  value="{{ old('cargo') }}">
      <option value="">Seleccionar cargo</option>
      @foreach ($rols as $rol)
          <option value="{{$rol -> id}}">{{$rol->nombre}}</option>
      @endforeach
       
    </select>
  </div>
  <div class="min-h-6 pl-6.92 mb-0.5 block">
    <input id="terms" class="w-4.92 h-4.92 ease-soft -ml-6.92 rounded-1.4 checked:bg-gradient-to-tl checked:from-gray-900 checked:to-slate-800 after:text-xxs after:font-awesome after:duration-250 after:ease-soft-in-out duration-250 relative float-left mt-1 cursor-pointer appearance-none border border-solid border-slate-200 bg-white bg-contain bg-center bg-no-repeat align-top transition-all after:absolute after:flex after:h-full after:w-full after:items-center after:justify-center after:text-white after:opacity-0 after:transition-all after:content-['\f00c'] checked:border-0 checked:border-transparent checked:bg-transparent checked:after:opacity-100" type="checkbox" value="" checked />
    <label class="mb-2 ml-1 font-normal cursor-pointer select-none text-sm text-slate-700" for="terms"> I agree the <a href="javascript:;" class="font-bold text-slate-700">Terms and Conditions</a> </label>
  </div>
  <div class="text-center">
    <button type="submit" class="inline-block w-full px-6 py-3 mt-6 mb-2 font-bold text-center text-white uppercase align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer active:opacity-85 hover:scale-102 hover:shadow-soft-xs leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 bg-gradient-to-tl from-gray-900 to-slate-800 hover:border-slate-700 hover:bg-slate-700 hover:text-white">Guardar</button>
    <a  href="{{ url('personal') }}" class="inline-block w-full px-6 py-3 mt-6 mb-2 font-bold text-center text-white uppercase align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer active:opacity-85 hover:scale-102 hover:shadow-soft-xs leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 bg-gradient-to-tl from-gray-900 to-slate-800 hover:border-slate-700 hover:bg-slate-700 hover:text-white">Regresar</a>
  </div>
  <p class="mt-4 mb-0 leading-normal text-sm">¿ya tienen una cuenta? <a href="../pages/sign-in.html" class="font-bold text-slate-700">inicier sesion</a></p>
</form>
@endsection



