<div class="fixed top-0 left-0 flex items-center justify-center w-full h-screen gap-10 p-5 text-white" style="background-color:rgba(0,0,0, .5);">
    <div class="flex flex-col items-center justify-center gap-10 p-5 black-transparent" >
        <div>
            <h1 class="text-2xl font-bold">Message de confirmation</h1>
            <hr>
        </div>
        {{ $slot }}
    </div>
    <div class="">
        <h1 class="font-extrabold text-9xl">?</h1>
    </div>
</div>