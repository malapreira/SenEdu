@extends("acces")

@section("contenu")

    <div class="dashboard-wrapper">
        <div class="container-fluid dashboard-content">
             <form action="{{route('update_level',['id'=>$level->id])}}" method="post">
                   @csrf
                   @method('patch')
                   <div><input type="text" name="name" class="form-control" placeholder="le nom du Niveau" value="{{$level->name}}"></div>
                  <div> <textarea name="description" id="description" cols="30" rows="10" class="form-control" placeholder="La description">{{$level->description}}</textarea> </div>
                   <div> <button class="btn btn-primary">Enregistrer</button> </div>
            </form>
        </div>
    </div>
@endsection 