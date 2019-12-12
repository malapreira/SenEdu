<form action="{{route('services.update',['id'=>$service->id])}}" method="post">
    @csrf
    @method('patch')
    <div><input type="text" name="name" class="form-control" placeholder="le nom de la filiere" value="{{$service->name}}"></div>
   <div> <textarea name="description" id="description" cols="30" rows="10" class="form-control" placeholder="La description">{{$service->description}}</textarea> </div>
    <div> <button class="btn btn-primary">Enregistrer</button> </div>
</form>
