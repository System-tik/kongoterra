<div class="flex flex-col items-center justify-center h-full pt-5 rounded bg-slate-200">
    <div class="grid flex-1 w-full grid-cols-2 py-5">
        <div class="flex items-center justify-center border-r border-black">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-20 h-20 " fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="{{$icon}}" />
            </svg>
        </div>
        <div class="flex items-center justify-center">
            <h1 class="text-4xl font-extrabold">{{$val}}</h1>
        </div>
    </div>
    <div class="w-full text-white bg-{{$color}}-600">
        <div class="flex items-center justify-between">
            <p class="px-2">{{ $text }}</p>
            <p class="px-2 py-3 bg-{{$color}}-500">{{ $val }}</p>
        </div>
        
    </div>
</div>