<div class="flex flex-col items-center justify-center h-full pt-5 rounded bg-200">
    <div class="grid flex-1 w-full grid-cols-2 py-5">
        <div class="flex items-center justify-center border-r border-black">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-20 h-20 " fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M21 11.25v8.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5v-8.25M12 4.875A2.625 2.625 0 109.375 7.5H12m0-2.625V7.5m0-2.625A2.625 2.625 0 1114.625 7.5H12m0 0V21m-8.625-9.75h18c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125h-18c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z"" />
            </svg>
        </div>
        <div class="flex flex-col items-center justify-center gap-5">
            <h1 class="text-4xl font-extrabold">{{ $services->count() }}</h1>
        </div>
    </div>
    <div class="w-full text-white bg-gray-700">
        <div class="flex items-center justify-between">
            <p class="px-2">Les services</p>
            <p class="px-2 py-3 bg-gray-600">{{ $services->count() }}</p>
        </div>
    </div>
</div>
