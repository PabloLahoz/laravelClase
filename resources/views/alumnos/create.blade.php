<x-layouts.layout>
    <div class="flex flex-row justify-center items-center min-h-full bg-gray-300">
        <!-- Session Status -->
        <form action="">
            <div class="bg-white rounded-2xl p-5">
                <div>
                    <x-input-label for="name" value="Nombre"/>
                    <x-text-input id="nombre" class="block mt-1 w-full"
                                  type="text" name="nombre"
                                  required autofocus autocomplete="username"/>
                </div>
                <div>
                    <x-input-label for="email" value="Email"/>
                    <x-text-input id="email" class="block mt-1 w-full"
                                  type="email" name="email"
                                  required autofocus autocomplete="email"/>
                </div>
                <div>
                    <x-input-label for="f_nac" value="Fecha de Nacimiento"/>
                    <x-text-input id="f_nac" class="block mt-1 w-full"
                                  type="date" name="f_nac"
                                  required autofocus autocomplete="Fecha de nacimiento"/>
                </div>
                <div>
                    <x-input-label for="dni" value="DNI"/>
                    <x-text-input id="dni" class="block mt-1 w-full"
                                  type="text" name="dni"
                                  required autofocus autocomplete="username"/>
                </div>
                <div class="p-2">
            <button class= "btn btn-sm btn-success"  type="submit">Guardar </button>
            <a class= "btn btn-sm btn-success" href="{{route("alumnos.index")}}">Cancelar</a>
                </div>
            </div>

        </form>
    </div>

</x-layouts.layout>
