@extends('layouts.master')

@section('title', 'Conexion DB')

@section('content')
    <div class="row">
        <div class="col-12 mt-5">
            <div class="d-flex justify-content-center">
                <div class="card bg-dark text-white">
                    <div class="card-header bg-secondary">
                        <p class="card-text text-center">Conexión a la Base de Datos</p>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('connection') }}" class="border border-1 rounded p-3">
                          @csrf
                            <div class="mb-1">
                                <label for="host" class="form-label">Servidor / Host</label>
                                <input type="text" class="form-control" name="host" id="host" placeholder="127.0.0.1">
                            </div>
                            <div class="mb-1">
                                <label for="port" class="form-label">Puerto</label>
                                <input type="text" class="form-control" name="port" id="port" placeholder="3306">
                            </div>
                            <div class="mb-1">
                                <label for="database" class="form-label">Base de Datos</label>
                                <input type="text" class="form-control" name="database" id="database" placeholder="pragmasoft">
                            </div>
                            <div class="mb-1">
                                <label for="username" class="form-label">Usuario</label>
                                <input type="text" class="form-control" name="username" id="username" placeholder="Usuario">
                            </div>
                            <div class="mb-1">
                                <label for="password" class="form-label">Contraseña</label>
                                <input type="password" class="form-control" name="password" id="password">
                            </div>
                            <div class="text-center mt-2">
                                <button type="submit" class="btn btn-success">
                                    <i class="fa-regular fa-circle-check me-2"></i>Conectar
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
