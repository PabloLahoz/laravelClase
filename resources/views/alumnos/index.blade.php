<x-layouts.layout>
    <div class="p-2 bg-gray-200">
        <a class="btn btn-sm btn-secondary " href="{{route("alumnos.create")}}">Crear alumno</a>
        <a class="btn btn-sm btn-secondary " href="{{route("home")}}">Volver</a>
    </div>
    <div class="max-h-full overflow-x-auto">
        <table class="table table-xs table-pin-rows table-pin-cols">
            <thead>
            <tr>
                @foreach($campos as $campo)
                    <th>{{$campo}}</th>
                @endforeach
            </tr>
            </thead>
            <tbody>
            @foreach($filas as $fila)
                <tr>
                    @foreach($campos as $campo)
                        <td>{{$fila->$campo}}</td>
                    @endforeach

                </tr>

            @endforeach
            </tbody>
        </table>
    </div>
</x-layouts.layout>
