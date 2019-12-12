<form action="{{route('teacher_type.update',['id'=>$teacher_type->id])}}" method="post">
    @csrf
    @method('patch')
    <div><input type="text" name="name" class="form-control" placeholder="le nom de la classe" value="{{$teacher_type->name}}"></div>
    <div> <textarea name="description" id="description" cols="30" rows="10" class="form-control" placeholder="La description">{{$teacher_type->description}}</textarea> </div>
    <div> <button class="btn btn-primary">Enregistrer</button> </div>
</form>
