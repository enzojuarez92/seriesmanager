<div class="modal fade" id="anularSerie_{{ $serie->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content bg-dark">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Anular Serie</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('anular', $serie) }}" method="POST">
                @csrf
                <div class="modal-body">
                    @if ($serie->estado == 'AC')
                        <h3 class="text-primary text-center">Anular serie {{ $title }}</h3>
                        <div class="text-center">
                            <p>¿Seguro que desea anular esta serie?</p>
                        </div>
                    @else
                        <h3 class="text-primary text-center">Activar serie {{ $title }}</h3>
                        <div class="text-center">
                            <p>¿Seguro que desea activar esta serie?</p>
                        </div>
                    @endif
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-danger">{{ $serie->estado == 'AC' ? 'Anular' : 'Activar'}}</button>
                </div>
            </form>
        </div>
    </div>
</div>
