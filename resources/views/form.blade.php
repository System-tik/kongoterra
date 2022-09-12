<h1>envoyer des informations</h1>
<form method="post" action="{{ route('panier/store') }}">
    @csrf
    
    <input type="text" name="client_id">
    <input type="text" name="produits">
    <input type="text" name="etat">
    <button>envoyer</button>
</form>