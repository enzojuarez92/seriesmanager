  <!-- Modal -->
  <div class="modal modal-lg fade" id="addSerie" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content bg-dark text-white">
              <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Nueva Serie</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <form method="POST" action="{{ route('store') }}" class="border border-1 rounded p-3">
                  @csrf
                  <div class="modal-body">
                      <div class="row mb-3">
                          <div class="col-12">
                              <label for="titulo" class="form-label">Título</label>
                              <input type="text" class="form-control" name="titulo" id="titulo"
                                  placeholder="Título de la serie"
                                  value="{{ old('titulo', isset($serie) ? $serie->titulo : '') }}">
                              @error('titulo')
                                  <span class="text-danger fw-bold">{{ $message }}</span>
                              @enderror
                          </div>
                      </div>
                      <div class="row mb-3">
                          <div class="col-12">
                              <label for="descripcion" class="form-label">Descripción</label>
                              <textarea class="form-control" name="descripcion" id="descripcion" row mb-3s="5">{{ old('descripcion', isset($serie) ? $serie->descripcion : '') }}</textarea>
                              @error('descripcion')
                                  <span class="text-danger fw-bold">{{ $message }}</span>
                              @enderror
                          </div>
                      </div>
                      <div class="row mb-3 d-flex align-items-end">
                          <div class="col-12 col-md-5">
                              <label for="fecha_estreno" class="form-label">Fecha de Estreno</label>
                              <input type="date" class="form-control" name="fecha_estreno" id="fecha_estreno"
                                  value="{{ old('fecha_estreno', isset($serie) ? $serie->fecha_estreno : '') }}">
                              @error('fecha_estreno')
                                  <span class="text-danger fw-bold">{{ $message }}</span>
                              @enderror
                          </div>
                          <div class="col-12 col-md-3">
                              <label for="estrellas" class="form-label">Estrellas</label>
                              <input type="text" class="form-control" name="estrellas" id="estrellas" placeholder="5"
                                  value="{{ old('estrellas', isset($serie) ? $serie->estrellas : '') }}">
                              @error('estrellas')
                                  <span class="text-danger fw-bold">{{ $message }}</span>
                              @enderror
                          </div>
                          <div class="col-12 col-md-4">
                              <div class="form-check">
                                  <input class="form-check-input" type="checkbox" name="apt" id="apt"
                                      {{ old('apt', isset($serie) && $serie->apt ? 'checked' : '') }}>
                                  <label class="form-check-label" for="apt">Apto para todo público</label>
                              </div>
                              @error('apt')
                                  <span class="text-danger fw-bold">{{ $message }}</span>
                              @enderror
                          </div>
                      </div>
                      <div class="row mb-3">
                          <div class="col-12 col-md-6">
                              <label class="form-label" for="genero">Género</label>
                              <select class="form-select" id="genero" name="genero"
                                  aria-label="Default select example" required>
                                  <option value="" disabled selected>Seleccione una opción</option>
                                  <option value="accion"
                                      {{ old('genero', isset($serie) && $serie->genero == 'accion' ? 'selected' : '') }}>
                                      Acción</option>
                                  <option value="animacion"
                                      {{ old('genero', isset($serie) && $serie->genero == 'animacion' ? 'selected' : '') }}>
                                      Animación</option>
                                  <option value="comedia"
                                      {{ old('genero', isset($serie) && $serie->genero == 'comedia' ? 'selected' : '') }}>
                                      Comedia</option>
                                  <option value="drama"
                                      {{ old('genero', isset($serie) && $serie->genero == 'drama' ? 'selected' : '') }}>
                                      Drama</option>
                                  <option value="suspenso"
                                      {{ old('genero', isset($serie) && $serie->genero == 'suspenso' ? 'selected' : '') }}>
                                      Suspenso</option>
                                  <option value="terror"
                                      {{ old('genero', isset($serie) && $serie->genero == 'terror' ? 'selected' : '') }}>
                                      Terror</option>
                              </select>

                          </div>
                          <div class="col-12 col-md-6">
                              <label for="precio_alquiler" class="form-label">Precio de Alquiler</label>
                              <input type="text" class="form-control" name="precio_alquiler" id="precio_alquiler"
                                  placeholder="2500"
                                  value="{{ old('precio_alquiler', isset($serie) ? $serie->precio_alquiler : '') }}">
                              @error('precio_alquiler')
                                  <span class="text-danger fw-bold">{{ $message }}</span>
                              @enderror
                          </div>
                      </div>


                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                      <button type="submit" class="btn btn-primary">Guardar Serie</button>
                  </div>
              </form>
          </div>
      </div>
  </div>

  @push('scripts')
      @if (count($errors) > 0)
          <script>
              jQuery(document).ready(function($) {
                  $('#addSerie').modal('show');
              });
          </script>
      @endif
  @endpush
