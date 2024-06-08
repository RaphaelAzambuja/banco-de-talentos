@extends('app')

@section('content')
<link rel="stylesheet" href="{{ asset('/css/create.css') }}">

<form action="{{ route('curriculum.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
        <label for="name">Nome:</label>
        <input type="text" id="name" name="name" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="phone">Telefone:</label>
        <input type="text" id="phone" name="phone" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="message">Mensagem:</label>
        <textarea id="message" name="message" class="form-control"></textarea>
    </div>

    <div class="form-group">
        <label for="attachment">Anexo:</label>
        <input type="file" id="attachment" name="attachment" class="form-control">
    </div>

    <div class="form-group">
        <label for="office">Cargo:</label>
        <input type="text" id="office" name="office" class="form-control" required>
    </div>

    <button type="submit">Enviar</button>
</form>
@endsection
