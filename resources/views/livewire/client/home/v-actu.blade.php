@if (count($actus) > 0)
    
<div class="px-5 py-5 bg-gray-100 2xl:px-64 lg:px-5 md:px-24 xl:px-24" id="Actu">
    {{-- Nothing in the world is as soft and yielding as water. --}}
    <h1 class="pb-5 text-lg font-bold text-green-600 xl:text-3xl lg:text-2xl">Nos actualités</h1>
    <div class="grid grid-cols-1 gap-10 lg:grid-cols-3">
        @foreach ($actus as $act)
        @if ($act->source == "FB")
        <iframe src="{{$act->lien}}" class="w-full"  height="436" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
        
        @else
        <iframe  height="436" class="w-full" src="https://www.youtube.com/embed/{{$act->lien}}" title="Flutter Tutorial - Check Internet Connection in Flutter" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        
        @endif
        @endforeach
    </div>
</div>
@endif
 