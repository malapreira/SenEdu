@extends("acces")

@section("contenu")

    <div class="dashboard-wrapper">
        <div class="container-fluid dashboard-content">
            <div class="container">
                <div><h1>{{__('Enregistrement d\'un cours')}}</h1></div>
                <div class="container">
                    <form action="{{route('course.store')}}" method="post">
                        @csrf
                        <div>
                            <input type="text" name="name" class="form-control" placeholder="le nom du cours">
                        </div>
                        <div>
                        <br><input type="date" name="date" class="form-control" placeholder="la date du cours">
                        </div>
                        <div>
                        <br><input type="time" name="early_hour" class="form-control" placeholder="Heure de debut" value="{{$errors->early_hour}}">
                        </div>
                        <div>
                        <br><input type="time" name="end_hour" class="form-control" placeholder="Heure de fin" value="{{$errors->end_hour}}">
                        </div>
                        <div>
                        <br><textarea name="description" id="description" cols="30" rows="10" class="form-control" placeholder="La description"></textarea><br>
                        </div>
                        <div>
                            <a href="{{route('course.index')}}" class="btn btn-sm btn-danger">Annuler</a>
                            <button class="btn btn-success">Enregistrer</button>
                        </div>
                        <div>
                        <br><select name="matter_id" id="matter_id" class="form-control">
                                <option value=""></option>
                                @foreach($matter as $key => $value)
                                    <option value="{{$key}}">{{$value}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                           <br> <select name="professor_id" id="professor_id" class="form-control">
                                <option value=""></option>
                                @foreach($professor as $key => $value)
                                    <option value="{{$key}}">{{$value}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                           <br> <select name="classroom_id" id="classroom_id" class="form-control">
                                <option value=""></option>
                                @foreach($classroom as $key => $value)
                                    <option value="{{$key}}">{{$value}}</option>
                                @endforeach
                            </select>
                        </div>
                    </form>
@endsection
