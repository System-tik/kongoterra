<h1>envoyer des informations</h1>
<form method="post" action="{{ route('client/login') }}">
    @csrf
    
    <input type="text" name="email">
    <input type="text" name="mdp">
    <button>envoyer</button>
</form>