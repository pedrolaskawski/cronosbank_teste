@extends('layout')

<link rel="stylesheet" type="text/css" href="assets/css/form.css" />

@section('landingPage')
    <div class="form-container">
        <form method="post" action="{{ route('opportunity.sendLead') }}" enctype="multipart/form-data">
            @csrf
            <input type="text" placeholder="Nome" id="name" name="name" minlength="3" required>
            <input type="email" placeholder="Email" id="email" name="email" required>
            <input type="text" id="mobile" placeholder="Celular" name="mobile" required>
            <input type="text" pattern="[A-Za-z ]+" id="city" placeholder="Cidade" name="city" required>
            <select name="state" id="state" required>
                <option value="" disabled selected>Estado</option>
                @foreach ($estados as $sigla => $nome)
                    <option value="{{ $sigla }}">{{ $nome }}</option>
                @endforeach
            </select>
            <button type="submit">Enviar</button>
        </form>
    </div>
@endsection
