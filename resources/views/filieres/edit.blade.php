@extends("acces")

@section("contenu")

    <div class="dashboard-wrapper">
        <div class="container-fluid dashboard-content">
            
            <form action="{{route('update_filiere',['id'=>$filiere->id])}}" method="post" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="_method" value="PATCH">
                <div><input type="text" name="name" class="form-control" placeholder="le nom de la filiere" value="{{$filiere->name}}"></div>
                <div> <textarea name="description" id="description" cols="30" rows="10" class="form-control" placeholder="La description">{{$filiere->description}}</textarea> </div>
                <div> <button class="btn btn-primary">Enregistrer</button> </div>
            </form>
@endsection 
