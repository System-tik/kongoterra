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

    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v14.0" nonce="zDwACsf">
    </script>
    <div class="fb-page" data-href="{{$actu->lien}}" 
        data-tabs="timeline" data-width="" data-height="" 
        data-small-header="false" data-adapt-container-width="true" 
        data-hide-cover="false" data-show-facepile="true">
        <blockquote cite="https://www.facebook.com/facebook" class="fb-xfbml-parse-ignore">
            <a href="https://www.facebook.com/facebook">Facebook</a>
        </blockquote>
    </div>
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
