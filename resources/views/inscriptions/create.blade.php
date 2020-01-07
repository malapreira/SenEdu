@extends("acces")

@section("contenu")

    <div class="dashboard-wrapper">
        <div class="container-fluid dashboard-content"> 
            <div class="container">
                <div><h1>{{__('Inscription d\'un eleve')}}</h1></div>
                <div class="container">
                    <form action="{{route('inscription.store')}}" method="post">
                        @csrf
                        <div>
                        <br><input type="date" name="date" class="form-control" placeholder="la date d'inscription">
                        </div>
                        <div>
                        <br><input type="text" name="amount" class="form-control" placeholder="Le montant verse">
                        </div>
                        <div>
                        <br><button class="btn btn-primary">Enregistrer</button>
                        </div>
                        <div>
                        <br><select name="students_id" id="students_id" class="form-control">
                                <option value=""></option>
                                @foreach($student as $key => $value)
                                    <option value="{{$key}}">{{$value}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                        <br><select name="academic__year_id" id="academic__year_id" class="form-control">
                                <option value=""></option>
                                @foreach($academic__year as $key => $value)
                                    <option value="{{$key}}">{{$value}}</option>
                                @endforeach
                            </select>
                        </div>
                    </form>
@endsection
