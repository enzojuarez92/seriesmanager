<div class="modal fade" id="delete_{{ $serie->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content bg-dark">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminar Serie</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('serie.destroy') }}" method="POST">
                @csrf
                @method('DELETE')
                <input type="hidden" name="id" value="{{$serie->id}}">
                <div class="modal-body">
                    <h3 class="text-primary text-center">Eliminar {{ $title }}</h3>
                    <div class="text-center">
                        <p>¿Seguro que desea eliminar esta serie?</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </div>
            </form>
        </div>
    </div>
</div>
