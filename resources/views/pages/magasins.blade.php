@extends('app')
@section('client')    
<div class="{{-- antialiased --}} overflow-x-hidden">
    <livewire:client.v-detail-produit  :detail="$id"/>
    <livewire:client.v-footer>
</div>
@endsection
