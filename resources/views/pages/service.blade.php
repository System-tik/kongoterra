@extends('app')
@section('client')    
<div class="{{-- antialiased --}} overflow-x-hidden ">
    <livewire:client.v-service-detail idS="{{$id}}">
</div>
@endsection
