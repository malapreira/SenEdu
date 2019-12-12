<form action="{{route('course.update',['id'=>$conrol->id])}}" method="post">
    @csrf
    @method('patch')
    <div><input type="text" name="name" class="form-control" placeholder="le nom du coontrole" value="{{$control->name}}"></div>
    <div><input type="text" name="date" class="form-control" placeholder="la date du controle" value="{{$control->date}}"></div>
    <div><input type="text" name="time" class="form-control" placeholder="l'heure du controle" value="{{$control->time}}"></div>
    <div> <button class="btn btn-primary">Enregistrer</button> </div>
</form>
