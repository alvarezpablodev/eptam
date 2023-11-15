@extends('layouts.app')

@section('titulo')
    Formulario de Registro de vuelo
@endsection

@section('contenido')
<div class="md:flex md:justify-center md:gap-4 md:items-center"> 
    <div class="md:w-4/12">
           
</div>

<div class="md:w-4/12 bg-white p-6 rounded-lg shadow-xl" >
    <form>
            <div class="mb-5">
                    <label for="name" class="mb-2 block uppercase text-gray-500 font-bold"> Fecha</label>
                    <input 
                    id="name",
                    name="name",
                    type="date",
                    class="border p-3 w-full  rounded-lg"
                    />
            </div>

            <div class="mb-5">
                <label for="name" class="mb-2 block uppercase text-gray-500 font-bold"> Numero de Vuelo </label>
                <input 
                id="name",
                name="name",
                type="text",
                placeholder="ID Operador",
                class="border p-3 w-full  rounded-lg"
                />
             </div>

             <div class="mb-5">
                <label for="name" class="mb-2 block uppercase text-gray-500 font-bold"> C.I. - Pasaporte</label>
                <input 
                id="name",
                name="name",
                type="text",
                placeholder="escriba aqui",
                class="border p-3 w-full  rounded-lg"
                />
        </div>
            

            <div class="mb-5">
                    <label for="name" class="mb-2 block uppercase text-gray-500 font-bold"> Horario</label>
                    <input 
                    id="name",
                    name="name",
                    type="datetime",
                    placeholder="escriba aqui",
                    class="border p-3 w-full  rounded-lg"
                    />
            </div>
            <div class="mb-5">


            <input 
                    type="submit",
                    value="Ingresar",
                    class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg">

            
    </form>
</div>

</div>

@endsection