@extends('app')

@section('content')

<link rel="stylesheet" href="{{ asset('/css/index.css') }}">

<div class="title">
    <h1>Lista de Currículos</h1>
    <a href="{{ route('curriculum.create') }}">Criar currículo</a>
</div>

<table class="table">
    <thead>
        <tr>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Telefone</th>
            <th>Cargo</th>
            <th>Anexo</th>
        </tr>
    </thead>
    <tbody>
        @forelse($curriculums as $curriculum)
            <tr>
                <td>{{ $curriculum->name }}</td>
                <td>{{ $curriculum->email }}</td>
                <td>{{ $curriculum->phone }}</td>
                <td>{{ $curriculum->office }}</td>
                <td>
                    @if($curriculum->attachment)
                        <a href="{{ Storage::url($curriculum->attachment) }}" target="_blank">Ver Anexo</a>
                    @else
                        Sem Anexo
                    @endif
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="5">Nenhum currículo encontrado.</td>
            </tr>
        @endforelse
    </tbody>
</table>
</div>

@endsection
