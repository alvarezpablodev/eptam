<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Devstagram - @yield('titulo')</title>
    @vite('resources/css/app.css')
</head>
    <body class="bg-gray-100">

        <header class="p-5 border-b bg-white shadow"> 
            <div class=" container mx-auto flex justify-between items-center"> 
                <h1 class="text-2xl font-black ">
                    Transporte Aereo Militar
                </h1>
            <nav class="flex gap-2 items-center">
                
                
                
            </nav>    
            </div>
        </header>

        <main class="container mx-auto mt-10">
                <h2 class="font-black text-center text-3xl mb-10"> 
                    @yield('titulo')
                </h2>
                @yield('contenido')
        </main>
        
        <footer class="mt-12 text-center p-5 text-gray-500 font-bold uppercase">
                Empresa Publica de Transporte Aereo Militar  -  Todos los derechos reservados
                {{ now ()->year}}
        </footer>
       
        
    </body>
</html>