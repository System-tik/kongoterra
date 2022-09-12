<div>
    <input type="text" wire:model="titre" placeholder="titre">
    @error('titre') <span>{{$message}}</span><br> @enderror
    <input type="text" wire:model="descrip" placeholder="descrip">
    @error('descrip') <span>{{$message}}</span><br> @enderror
    <input type="text" wire:model="lien" placeholder="lien">
    @error('lien') <span>{{$message}}</span><br> @enderror
    <input type="text" wire:model="source" placeholder="source">
    @error('source') <span>{{$message}}</span><br> @enderror
    
    <button wire:click="add">add</button>
    <button wire:click="update">update</button>
    @error('idUnique1') <span>{{$message}}</span><br> @enderror
    <button wire:click="delete">delete</button>
    @error('idUnique2') <span>{{$message}}</span><br> @enderror

    @foreach ($actus as $actu)
    <p wire:click="recupere({{ $actu }})">{{ $actu->titre }}</p>
    @endforeach
        
    <script>
        window.addEventListener('confirm',event => {
            console.log(event.detail.message);
        })
        window.addEventListener('echec',event => {
            console.log(event.detail.message);
        })

    </script>
</div>
