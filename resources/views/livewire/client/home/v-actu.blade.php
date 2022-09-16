@if (count($actus) > 0)
    
<div class="grid grid-cols-1 gap-10 px-5 py-5 bg-gray-100 2xl:px-64 lg:px-5 md:px-24 xl:px-24 xl:grid-cols-3" id="Actu">
    {{-- Nothing in the world is as soft and yielding as water. --}}
    <div class="col-span-2 ">
        <h1 class="pb-5 text-lg font-bold text-green-600 xl:text-3xl lg:text-2xl">Nos actualités</h1>
        <div class="grid grid-cols-1 gap-5 lg:grid-cols-3">
            @foreach ($actus as $act)
            <a class="flex flex-col p-1" href="{{ route('actu', $act->id) }}">
                <img src="{{asset(Storage::url('public/actus/'.$act->id.'.png'))}}" >
                <div class="">
                    <p>{{$act->titre}}</p>
                </div>
            </a>       
            @endforeach
        </div>
    </div>
    <div>
        <h1 class="pb-5 text-lg font-bold text-green-600 xl:text-3xl lg:text-2xl">Nous suivre sur Facebook</h1>
        <iframe class="w-full" src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fweb.facebook.com%2Fcotedivoireartemisia18&tabs=timeline&width=400&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
    </div>
</div>
@endif
