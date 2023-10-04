@extends('layouts.master')

@section('title', 'Administrador de Series')

@section('content')
    <div class="row">
        <div class="col-12 mt-5">
            <div class="card bg-dark text-white">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <div>
                        <p class="card-title">Administrador de Series</p>
                    </div>
                    <div>
                        <button class="btn btn-success btn-sm" type="button" data-bs-toggle="modal"
                            data-bs-target="#addSerie"><i class="fa-solid fa-plus me-2"></i>Nueva Serie</button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="border border-1 border-white rounded p-2">
                        @livewire('show-series')
                    </div>
                </div>
            </div>
        </div>
        @include('modals.create-serie')
    </div>

@endsection
