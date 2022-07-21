@extends('app')
@section('client')
<div class="" >
    <livewire:client.home.v-header />
    <livewire:client.home.v-about  />
    <livewire:client.home.v-produit :excep="null"  />
    <livewire:client.home.v-service />

    <livewire:client.v-footer>
</div>
@endsection