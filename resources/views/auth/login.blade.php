@extends('layouts.app')

{{-- @section('titulo')
        Inicio de Sesion
@endsection --}}


@section('contenido')
        <div class="md:flex md:justify-center md:gap-4 md:items-center"> 
                        <div class="md:w-4/12">
                               <img src="{{asset('img/login.jpg')}}" alt="Imagen Login Operadores"> 
                </div>
                
                <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-xl" >
                        <form action="{{route('login')}}" method="POST">
                                @csrf
                                <div class="mb-5">
                                        <label for="name" class="mb-2 block uppercase text-gray-500 font-bold"> ID Operador</label>
                                        <input 
                                        id="name",
                                        name="name",
                                        type="text",
                                        placeholder="ID Operador",
                                        class="border p-3 w-full  rounded-lg"
                                        />
                                </div>

                                <div class="mb-5">
                                        <label for="name" class="mb-2 block uppercase text-gray-500 font-bold"> Contraseña</label>
                                        <input 
                                        id="name",
                                        name="name",
                                        type="password",
                                        placeholder="password",
                                        class="border p-3 w-full  rounded-lg"
                                        />
                                </div>

                                <input 
                                        type="submit",
                                        value="Ingresar",
                                        class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg">
                        </form>
                </div>

        </div>

@endsection