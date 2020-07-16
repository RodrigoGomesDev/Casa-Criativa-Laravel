@extends('layouts.master')
<div class="container-ideias">
    <nav class="navbar navbar-expand-lg navbar-light">
        <a href="/" class="navbar-brand">
            <img src="images/logo.png">
        </a>
        <div class="collapse navbar-collapse" style="margin-left: 63%" id="navbarNav" >
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="/" class="nav-link">Início</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-outline-white" style="color: #ff5E84" href="#" onclick="onOff()">Nova Ideia</a>
                </li>
            </ul>
        </div>
    </nav>
<main>
    <div class="title-page">
        <p>em exibição</p>
        <h1>Ideias</h1>
    </div>
    <div class="ideas d-flex flex-column align-items-center" >
        @include('all_ideias')
    </div>
</main>
</div>