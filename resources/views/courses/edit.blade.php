<form action="{{route('course.update',['id'=>$course->id])}}" method="post">
    @csrf
    @method('patch')
    <div><input type="text" name="name" class="form-control" placeholder="le nom du cours" value="{{$course->name}}"></div>
    <div> <textarea name="description" id="description" cols="30" rows="10" class="form-control" placeholder="La description">{{$course->description}}</textarea> </div>
    <div> <button class="btn btn-primary">Enregistrer</button> </div>
</form>
