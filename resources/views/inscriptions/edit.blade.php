<form action="{{route('inscription.update',['id'=>$inscription->id])}}" method="post">
    @csrf
    @method('patch')
    <div><input type="text" name="date" class="form-control" placeholder="la date d'inscription" value="{{$inscription->date}}"></div>
    <div><input type="text" name="amount" class="form-control" placeholder="le montant verse" value="{{$inscription->amount}}"></div>
    <div> <button class="btn btn-primary">Enregistrer</button> </div>
</form>
