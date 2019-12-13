<form action="{{route('academic_year.update',['id'=>$academic_year->id])}}" method="post">
       @csrf
       @method('patch')
       <div><input type="text" name="academic" class="form-control" placeholder="Entrer l'annee academique" value="{{$academic_year->name}}"></div>
      <div> <textarea name="description" id="description" cols="30" rows="10" class="form-control" placeholder="La description">{{$matter->description}}</textarea> </div>
       <div> <button class="btn btn-primary">Enregistrer</button> </div>
</form>
