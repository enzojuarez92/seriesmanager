<div>
    <table class="table table-dark table-striped text-center">
        <thead>
            <tr>
                <th scope="col">Titulo</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Fecha Estreno</th>
                <th scope="col">Estrellas</th>
                <th scope="col">Genero</th>
                <th scope="col">Precio Alquiler</th>
                <th scope="col">APT</th>
                <th scope="col">Estado</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($series as $serie)
                <tr>
                    <td>{{ $serie->titulo }}</td>
                    <td>{{ $serie->descripcion }}</td>
                    <td>{{ $serie->fecha_estreno }}</td>
                    <td>{{ $serie->estrellas }}</td>
                    <td>{{ $serie->genero }}</td>
                    <td>{{ $serie->precio_alquiler }}</td>
                    <td>
                        @if ($serie->apt)
                            <input type="checkbox" checked="checked" disabled>
                        @else
                            <input type="checkbox" disabled>
                        @endif
                    </td>
                    <td>{{ $serie->estado }}</td>
                    <td class="d-flex justify-content-between">
                        <button class="btn btn-sm btn-primary" type="button" data-bs-toggle="modal"
                            data-bs-target="#editSerie_{{ $serie->id }}"><i class="fa-solid fa-edit"></i></button>
                        <button class="btn btn-sm btn-danger" data-bs-toggle="modal"
                            data-bs-target="#delete_{{ $serie->id }}"><i class="fa-solid fa-trash"></i></button>
                        @if ($serie->estado == 'AC')
                            <button class="btn btn-sm btn-warning" data-bs-toggle="modal"
                                data-bs-target="#anularSerie_{{ $serie->id }}"><i
                                    class="fa-solid fa-ban"></i></button>
                        @else
                            <button class="btn btn-sm btn-warning" data-bs-toggle="modal"
                                data-bs-target="#anularSerie_{{ $serie->id }}"><i
                                    class="fa-solid fa-circle-up"></i></button>
                        @endif
                    </td>
                </tr>
                @include('modals.delete-serie', ['title' => $serie->titulo])
                @include('modals.edit-serie', ['serie' => $serie])
                @include('modals.anular-serie', ['title' => $serie->titulo])
            @endforeach
        </tbody>
    </table>
</div>
