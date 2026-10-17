@extends('site.layouts.basico')

@section('titulo', 'Sobre Nós')

@section('conteudo')
    <div class="conteudo-pagina">
        <div class="titulo-pagina">
            <h1>Olá, eu sou o ALUNO DE DS</h1>
        </div>

        <div class="informacao-pagina">
            <p>XPTO.</p>
            <p>XPTO</p>
        </div>
    </div>

    <div class="rodape">
        <div class="redes-sociais">
            <h2>Redes sociais</h2>
            <img src="{{ asset('img/facebook.png') }}">
            <img src="{{ asset('img/linkedin.png') }}">
            <img src="{{ asset('img/youtube.png') }}">
        </div>
        <div class="area-contato">
            <h2>Contato</h2>
            <span>(11) 99999 9999 </span>
            <br>
            <span>XPTO@CPS.SP.GOV.BR</span>
        </div>
        <div class="localizacao">
            <h2>Localização</h2>
            <img src="{{ asset('img/mapa.png') }}">
        </div>
    </div>
@endsection
