@extends('layouts.master')

    <div class="content-home mt-5">
        <div class="leave-idea">
            <header>
                <div class="image-logo">
                    <img src="images/logo.png">
                </div>
            </header>
            <main>
                <div class="content">
                        <p>Ficar em casa em períodos longos, não deve ser nada fácil.</p>
                        <p>Iremos catalogar ideias, <strong>brincadeiras, jogos, filmes, livros, cursos, dicas</strong> e tudo que for necessário para tornar esse momento mais interessante.</p>
                        <p>Comece clicando em ver ideias para ver as  ideias cadastradas e contribua adicioando a sua ideia.</p>
                </div>  
                <div class="buttons">
                    <button onclick="onOff()">+ Adicionar Ideia</button>
                    <a href="{{ route('ideias') }}" class="more">Ver Ideias</a>
                </div>
            </main>
        </div>
        <div class="latest-ideas d-flex flex-column">
            @include('all_ideias')
        </div>
    </div>