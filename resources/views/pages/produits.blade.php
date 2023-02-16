@extends('app')
@section('client')    
<div class="{{-- antialiased --}} overflow-x-hidden">
    {{-- Principes --}}
    <div style="background-image:url('{{asset('img/header/art.jpg')}}');" class="w-full bg-no-repeat bg-cover h-36">
        <div class="h-full bg-t-black">

            <div class="flex flex-col items-center justify-center w-full h-full px-5 py-10 text-left text-white 2xl:px-64 lg:px-5 md:px-24 xl:px-24" {{-- style="background: linear-gradient(90deg, rgba(255, 255, 255, 0.925) 0%, rgba(255,255,255,1) 35%, rgba(0, 0, 0, 0) 100%); --}} >
                {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
                <h4 class="w-full text-lg text-center lg:text-left">
                    Decouvrir <span class="font-bold">⸣</span>               
                </h4>
                <h1 class="w-full mt-2 text-xl font-bold text-center lg:text-left md:text-3xl">Nos produits</h1>
            </div>
        </div>
    </div>


    <div class=" bg-slate-200">
        <livewire:client.home.v-produit :excep="null"  />
    </div>
    {{-- <livewire:client.v-footer> --}}
</div>
@endsection
