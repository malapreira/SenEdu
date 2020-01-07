@extends("acces")

@section("contenu")

    <div class="dashboard-wrapper">
        <div class="container-fluid dashboard-content">
 
        
        <form action="{{route('update_classroom',['id'=>$classroom->id])}}" method="post" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="_method" value="PATCH">
            <div><input type="text" name="name" class="form-control" placeholder="le nom de la classe" value="{{$classroom->name}}"></div>
            <div> <textarea name="description" id="description" cols="30" rows="10" class="form-control" placeholder="La description">{{$classroom->description}}</textarea> </div>
            <div> <button class="btn btn-primary">Enregistrer</button> </div>
            <div>
                        <select name="filiere_id" id="filiere_id" class="form-control">
                            <option value=""></option>
                            @foreach($filiere as $key => $value)
                                <option value="{{$key}}">{{$value}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <select name="level_id" id="level_id" class="form-control">
                            <option value=""></option>
                            @foreach($level as $key => $value)
                                <option value="{{$key}}">{{$value}}</option>
                            @endforeach
                        </select>
                    </div>
        </form>
@endsection
