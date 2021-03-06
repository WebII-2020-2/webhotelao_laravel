
@extends('layouts.main')

@section('title', 'Dashboard')


@section('content')

<h2>Data: {{ $hoje }}</h2>

<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
    <div class="info-box bg-yellow">
        <div class="icon">
            <i class="bi bi-building"></i>
        </div>
        <div class="content">
            <div class="number count-to" data-from="0" data-to="125" data-speed="1000" data-fresh-interval="20">{{ $hospedagens }}</div>
            <div class="text">Hospedagens</div>
            
        </div>
    </div>
</div>

<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
    <div class="info-box bg-red">
        <div class="icon">
            <i class="bi bi-people"></i>
        </div>
        <div class="content">
            <div class="number count-to" data-from="0" data-to="125" data-speed="1000" data-fresh-interval="20">{{ $hospedes }}</div>
            <div class="text">Hóspedes</div>
            
        </div>
    </div>
</div>

<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
    <div class="info-box bg-green">
        <div class="icon">            
            <i class="bi bi-house"></i>
        </div>
        <div class="content">
            <div class="number count-to" data-from="0" data-to="125" data-speed="1000" data-fresh-interval="20"> {{ $quartos_livres }}</div>
            <div class="text">Quartos Livres</div>
            
        </div>
    </div>
</div>

<div class="col-sm-6">



</div>


@endsection