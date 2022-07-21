@extends('app')
@section('client')    
<div class="{{-- antialiased --}} overflow-x-hidden">
    <livewire:client.v-detail-produit  :detail="$id"/>
    <div class=" bg-slate-200">
        <livewire:client.home.v-produit :excep="$id" />
    </div>
    <livewire:client.v-footer>
</div>
@endsection
