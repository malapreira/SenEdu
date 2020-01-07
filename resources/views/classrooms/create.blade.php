@extends("acces")

@section("contenu")
    <div class="dashboard-wrapper">
        <div class="container-fluid dashboard-content">
            <div class="container">
                <div><h1>{{__('Ajouter une classe')}}</h1></div>
                
                <div class="container">
                    <form action="{{route('classroom.store')}}" method="post">
                        @csrf
                        <div>
                        <br><input type="text" name="name" class="form-control" placeholder="le nom de la classe">
                        </div>
                        <div>
                        <br><textarea name="description" id="description" cols="30" rows="10" class="form-control" placeholder="La description"></textarea><br>
                        </div>
                        <div>
                            <a href="{{route('classroom.index')}}" class="btn btn-sm btn-danger">Annuler</a>
                            <button class="btn btn-success">Enregistrer</button>
                        </div>
                        <div>
                        <br><select name="filiere_id" id="filiere_id" class="form-control">
                                <option value=""></option>
                                @foreach($filiere as $key => $value)
                                    <option value="{{$key}}">{{$value}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                        <br><select name="level_id" id="level_id" class="form-control">
                                <option value=""></option>
                                @foreach($level as $key => $value)
                                    <option value="{{$key}}">{{$value}}</option>
                                @endforeach
                            </select>
                        </div>

                    </form>
@endsection 
