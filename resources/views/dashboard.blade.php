<x-app-layout>
   {{--  <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}

    <div class="flex flex-col min-h-screen" x-data="{
        menus : [true, false, false, false, false, false, false, false, false],
        afficher(index){
            for (let i = 0; i < this.menus.length; i++){
                if (i == index) this.menus[i] = true
                else this.menus[i] = false
            }
        }
    }">
        <div class="px-10 py-2">
            <div class="flex items-center shrink-0 ">
                {{-- <a href="{{ route('dashboard') }}">
                    <x-jet-application-mark class="block w-auto h-9" />
                </a> --}}
                {{-- <x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                    {{ __('Dashboard') }}
                </x-jet-nav-link> --}}
                <!-- Settings Dropdown -->
                <div class="px-2">
                    <h1 class="text-lg font-bold ">Kongoterra Admin</h1>
                </div>
                <div class="flex flex-1 px-2 border-l border-r">
                    <img src="{{ asset('img/logo/logo.png') }}" alt="" srcset="" class="w-12 ">
                </div>
                <div class="relative ml-3">
                    <x-jet-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                <button class="flex text-sm transition border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300">
                                    <img class="object-cover w-8 h-8 rounded-full" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                </button>
                            @else
                                <span class="inline-flex rounded-md">
                                    <button type="button" class="inline-flex items-center px-3 py-2 text-sm font-medium leading-4 text-gray-800 transition border border-transparent rounded-md hover:text-gray-200 focus:outline-none">
                                        {{ Auth::user()->name }}
    
                                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </span>
                            @endif
                        </x-slot>
    
                        <x-slot name="content">
                            <!-- Account Management -->
                            <div class="block px-4 py-2 text-xs text-gray-400">
                                {{ __('Manage Account') }}
                            </div>
    
                            <x-jet-dropdown-link href="{{ route('profile.show') }}">
                                {{ __('Profile') }}
                            </x-jet-dropdown-link>
    
                            @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                <x-jet-dropdown-link href="{{ route('api-tokens.index') }}">
                                    {{ __('API Tokens') }}
                                </x-jet-dropdown-link>
                            @endif
    
                            <div class="border-t border-gray-100"></div>
    
                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}" x-data>
                                @csrf
    
                                <x-jet-dropdown-link href="{{ route('logout') }}"
                                         @click.prevent="$root.submit();">
                                    {{ __('Log Out') }}
                                </x-jet-dropdown-link>
                            </form>
                        </x-slot>
                    </x-jet-dropdown>
                </div>
            </div>
            
        </div>
        <div class="flex w-full gap-2 px-10 pt-4 pb-32 text-white bg-gradient-to-r from-green-900 to-green-400">
            @foreach ($menus as $menu)    
            <div class="flex text-sm items-center justify-center gap-2 pr-3 transition duration-200 transform border-r border-gray-700 cursor-pointer hover:text-gray-400 hover:scale-95" @click="afficher({{$loop->index}})">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="{{ $menu["icon"]}}" />
                </svg>
                <p>{{ $menu["nom"]}}</p>
            </div>
            @endforeach
            
            
        </div>
        <div class="flex flex-col items-center flex-1 h-full px-10 ">
            <div class="relative flex-1 w-full h-full -top-28">
                <div x-show="menus[0]" class="animate__animated animate__bounceInRight">
                    <livewire:admin.dash />
                </div>
                <div x-show="menus[1]" class="animate__animated animate__bounceInRight">
                    <livewire:admin.v-info />
                </div>
                <div x-show="menus[2]" class="animate__animated animate__bounceInRight">
                    <livewire:admin.v-header />
                </div>
                <div x-show="menus[3]" class="animate__animated animate__bounceInRight">
                    <livewire:admin.v-about />
                </div>
                <div x-show="menus[4]" class="animate__animated animate__bounceInRight">
                    <livewire:admin.v-service />
                </div>
                <div x-show="menus[5]" class="animate__animated animate__bounceInRight">
                    <livewire:admin.v-produits />
                </div>
                <div x-show="menus[6]" class="animate__animated animate__bounceInRight">
                    <livewire:admin.v-magasin />
                </div>
                <div x-show="menus[7]" class="animate__animated animate__bounceInRight">
                    <livewire:admin.v-commandes />
                </div>
                <div x-show="menus[8]" class="animate__animated animate__bounceInRight">
                    <livewire:admin.prov-ville />
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
