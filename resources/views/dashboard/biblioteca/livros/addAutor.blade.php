@extends('layouts.dashboard.master')

@section('menu')
    @include('dashboard.menu')
@endsection

@section('content')
    <div class="container-fluid">
        <h1 class="mt-4"><i class="fas fa-book mr-2"></i>Livros</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active"><a href="{{ route('bibliotecas.index') }}">Biblioteca</a></li>
            <li class="breadcrumb-item active"><a href="{{ route('livros.index') }}">Livros</a></li>
            <li class="breadcrumb-item active">Adicionar Autor(a)</li>
        </ol>
        
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-user-edit mr-1"></i>
                Adicionar Autor(a) ao Livro: <strong>{{ $livro->titulo }}</strong>
            </div>
            <div class="card-body">
                <div class="col-12">
                    @if ($errors->any())
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <h4 class="alert-heading">Erros Encontrados</h4>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                </div>
                <div class="col-12">
                    <form action="{{ route('autorLivro.store') }}" method="POST">
                        @method('POST')
                        @csrf

                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                                <label>Autor(a)</label>
                                <select name="autor_id" class="form-control" required>
                                    @foreach ($autors as $autor)
                                    <option value="{{ $autor->id }}">{{ $autor->autor }}</option>
                                    @endforeach
                                </select>
                                <input type="hidden" name="livro_id" value="{{ $livro->id }}">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-success"><i class="fas fa-check mr-1"></i>Adicionar</button>
                                <a class="btn btn-primary" href="{{ route('livros.edit', $livro->id) }}" role="button">
                                    <i class="fas fa-ban"></i> Cancelar</a>
                            </div>
                        </div>

                    </form>
                </div>
                
            </div>
        </div>

    </div>
    
@endsection
