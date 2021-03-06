@extends('layouts.dashboard.master')

@section('menu')
    @include('dashboard.inventario.menu')
@endsection

@section('content')
    <div class="container-fluid">
        <h1 class="mt-4"><i class="fas fa-image mr-2"></i>Gravuras</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active"><a href="{{ route('bibliotecas.index') }}">Inventário</a></li>
            <li class="breadcrumb-item active">Gravuras</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-image mr-1"></i>
                Gravuras
            </div>
            <div class="card-body">
                <div class="mb-2"><a class="btn btn-primary btn-sm" href="{{ route('gravuras.create') }}" role="button">
                    <i class="fas fa-plus"></i> Adicionar Gravura</a>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Artista</th>
                            <th scope="col">Título</th>
                            <th scope="col">Ano Aquisição</th>
                            <th scope="col">Ação</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($gravuras as $gravura)
                                <tr>
                                    <th scope="row">{{ $gravura->id }}</th>
                                    <td>{{ $gravura->artista }}</td>
                                    <td>{{ $gravura->titulo }}</td>
                                    <td>{{ $gravura->ano_aquisicao }}</td>
                                    <td><a href="{{ route('gravuras.show', $gravura->id) }}"><i class="fas fa-eye mr-1"></i></a>
                                        <a href="{{ route('gravuras.edit', $gravura->id) }}"><i class="fas fa-pen mr-1"></i></a></td>
                            </tr>
                            @endforeach                            
                        </tbody>
                    </table>
                    {{ $gravuras->links() }}
                </div>
            </div>
        </div>
    </div>
    
@endsection