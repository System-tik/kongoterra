@extends('app')
@section('client')    
<div class="{{-- antialiased --}} overflow-x-hidden ">
    <livewire:client.v-actu-detail idA="{{$id}}">
</div>
@endsection
