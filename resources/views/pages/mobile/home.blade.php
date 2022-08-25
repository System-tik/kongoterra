@extends('mobile')
@section('mobile')

<div class="flex flex-col h-screen">
    <livewire:mobile.m-header />
    <livewire:mobile.m-menu-about/>
    <div class="flex-1">
        <livewire:mobile.m-produits>
    </div>
</div>
@endsection